Get Country
-----------

<?php

$country = file_get_contents('http://api.hostip.info/country.php?ip='.$_SERVER['REMOTE_ADDR']);
echo $country; //Remove this line

?>


Get Flag
--------

<IMG SRC="http://api.hostip.info/flag.php" width="30" height="20" BORDER="0" ALT="Your Choice">