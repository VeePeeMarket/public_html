<?php 
session_start();


// Check if mobile,tablet or PC
// include 'geoplugin/index.php';
// For Now,
$_SESSION['countryName'] = 'Nigeria';



//Geoplugin
require_once 'mobiledetect/Mobile_Detect.php';

$detect = new Mobile_Detect;
if ($detect->isMobile()) {
	$_SESSION['device'] = "mobile";
	if ($detect->isAndroidOS() !== false) {
		$_SESSION['mobile'] = 'android';
	}
}elseif ($detect->isTablet() !== false || $detect->is('iOS') !== false) {
	$_SESSION['device'] = "tablet";
}
else{
	$_SESSION['device'] = "pc";
}

if ($detect->isJavaOS() !== false) {
	die('Only Smartphones, Android, iPad And Computers Are Allowed. Sorry');
}

$browser2 =$_SERVER['HTTP_USER_AGENT'];
if ($_SESSION['device'] !== 'pc') {
	if (strpos($browser2, 'Opera') !== false || strpos($browser2, 'OPR') !== false) {
		die('Opera Mini Browser Not Allowed!!! Please Use A Different Browser');
	}
}
if ($detect->is('Opera Mobi') !== false || $detect->is('Opera Mini') !== false) {
	die('Please use a different browser');
}

require 'private.php';

$connect = new PDO("mysql:host=".$db_host.";dbname=".$db_name.";",$db_user,$db_pass);

?>
<meta charset="utf8mb4">
<?php
// Currency Query
header('Content-Type: text/html; charset=utf-8');
$countryName = $_SESSION['countryName'];
if ($currencysql = $mysqli->query("SELECT * FROM curr WHERE name = '$countryName'")) {
	$currency = $currencysql->fetch_assoc();
	$_SESSION['currency'] = array('symbol' => $currency["currency_symbol"], 'name' => $currency["currency_name"], 'abbr' => $currency["currency_code"], 'country' => $currency["name"]);
}else{
	$_SESSION['currency'] = array('symbol' => '$', 'name' => 'Dollar', 'abbr' => 'USD', 'country' => $currency["name"]);
}
if ($_SESSION['currency']['symbol'] == '') {
	$_SESSION['currency'] = array('symbol' => '$', 'name' => $currency["currency_name"], 'abbr' => $currency["currency_code"], 'country' => $currency["name"]);
}


if (is_readable("../sweetalert/dist/sweetalert.css") !== false) { ?><noscript><style type="text/css">html{ display: none; }</style> <meta http-equiv="refresh" content="0.0; url=../nojs.php"> Please Only Use An Advanced Web Browser Which Has Javascript Enabled</noscript><script type="text/javascript" src="../sweetalert/dist/sweetalert.js"></script><link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css"><?php }elseif(is_readable("sweetalert/dist/sweetalert.css") !== false){ ?><noscript><style type="text/css">html{ display: none; }</style> <meta http-equiv="refresh" content="0.0; url=nojs.php"> Please Only Use An Advanced Web Browser Which Has Javascript Enabled</noscript><script type="text/javascript" src="sweetalert/dist/sweetalert.js"></script><link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css"><?php }elseif(is_readable("../../../sweetalert/dist/sweetalert.css") !== false){ ?><noscript><style type="text/css">html{ display: none; }</style> <meta http-equiv="refresh" content="0.0; url=../../../nojs.php"> Please Only Use An Advanced Web Browser Which Has Javascript Enabled</noscript><script type="text/javascript" src="../../../sweetalert/dist/sweetalert.js"></script><link rel="stylesheet" type="text/css" href="../../../sweetalert/dist/sweetalert.css"><?php }else{ ?><noscript><style type="text/css">html{ display: none; }</style> <meta http-equiv="refresh" content="0.0; url=../../nojs.php"> Please Only Use An Advanced Web Browser Which Has Javascript Enabled</noscript><script type="text/javascript" src="../../sweetalert/dist/sweetalert.js"></script><link rel="stylesheet" type="text/css" href="../../sweetalert/dist/sweetalert.css"><?php } ?><script>function success() {swal("Success", "Click OK to continue", "success");}function error() {swal("Error", "", "error");}function vpabout() {swal("", "VeePee Market Is An Online Digital Marketing Platform Where You Can Buy Or Sell Anything, Open A VeePee Shop, And Make Money From The Comfort Of Your Home.");}function warning() {swal("Warning", "Are you sure you want to do this?", "error");}</script><?php 
 if (isset($_SESSION['customfn']) && $_SESSION['customfn'] !== false) {
 	?>
 	<script type="text/javascript">
	function customfn() {
		swal("<?= $_SESSION['customtitle'] ?>", "<?= $_SESSION['custommsg'] ?>");
	}
</script>
<?php
 }

 // Visitors counter

// fns
 $conn = $mysqli;


			$qs = $_SERVER['PHP_SELF'];
			$conn->query("INSERT INTO pages(id) VALUES ('$qs')");


function total_views($conn, $page_id = null)
{
	if($page_id === null)
	{
		// count total website views
		$query = "SELECT sum(total_views) as total_views FROM pages";
		$result = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result) > 0)
		{
			while($row = $result->fetch_assoc())
			{
				if($row['total_views'] === null)
				{
					return 0;
				}
				else
				{
					return $row['total_views'];
				}
			}
		}
		else
		{
			return "No records found!";
		}
	}
	else
	{
		// count specific page views
		$query = "SELECT total_views FROM pages WHERE id='$page_id'";
		$result = mysqli_query($conn, $query);
		
		if(mysqli_num_rows($result) > 0)
		{
			while($row = $result->fetch_assoc())
			{
				if($row['total_views'] === null)
				{
					return 0;
				}
				else
				{
					return $row['total_views'];
				}
			}
		}
		else
		{
			return "No records found!";
		}
	}
}



function is_unique_view($conn, $visitor_ip, $page_id)
{
	$query = "SELECT * FROM page_views WHERE visitor_ip='$visitor_ip' AND page_id='$page_id'";
	$result = mysqli_query($conn, $query);
	
	if(mysqli_num_rows($result) > 0)
	{
		return false;
	}
	else
	{
		return true;
	}
}



function add_view($conn, $visitor_ip, $page_id)
{
	if(is_unique_view($conn, $visitor_ip, $page_id) === true)
	{
		// insert unique visitor record for checking whether the visit is unique or not in future.
		$date_visited = date('d')." ".date('M')." ".date('Y');
		$query = "INSERT INTO page_views (visitor_ip, page_id, date_visited) VALUES ('$visitor_ip', '$page_id', '$date_visited')";
		
		if(mysqli_query($conn, $query))
		{
			// At this point unique visitor record is created successfully. Now update total_views of specific page.
			$query = "UPDATE pages SET total_views = total_views + 1 WHERE id='$page_id'";
			
			if(!mysqli_query($conn, $query))
			{
				echo "Error updating record: " . mysqli_error($conn);
			}
		}
		else
		{
			echo "Error inserting record: " . mysqli_error($conn);
		}
	}
}

// Insert into db
$page_id = $_SERVER['PHP_SELF'];
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// Add view

add_view($conn, $visitor_ip, $page_id);



// Date
if (date('D') == 'Tue') {
	$_SESSION['dateday'] = 'Tues';
}elseif (date('D') == 'Wed') {
	$_SESSION['dateday'] = 'Wednes';
}elseif (date('D') == 'Thu') {
	$_SESSION['dateday'] = 'Thurs';
}elseif (date('D') == 'Sat') {
	$_SESSION['dateday'] = 'Satur';
}
else{
	$_SESSION['dateday'] = date('D');
}


// Short Number Format
function number_format_short( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9m-850m
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'M';
	} else if ($n < 900000000000) {
		// 0.9b-850b
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'B';
	} else {
		// 0.9t+
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'T';
	}

  // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
  // Intentionally does not affect partials, eg "1.50" -> "1.50"
	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}

	return $n_format . $suffix;

}
      // Random String
      function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
    }

    ?>
