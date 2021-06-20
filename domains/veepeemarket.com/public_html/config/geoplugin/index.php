<?php
/*
This file is free software: you can redistribute it and/or modify
the code under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version. 

However, the license header, copyright and author credits 
must not be modified in any form and always be displayed.

This class is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

@author geoPlugin (gp_support@geoplugin.com)
@copyright Copyright geoPlugin (gp_support@geoplugin.com)

This file is an example PHP file of the geoplugin class
to geolocate IP addresses using the free PHP Webservices of
http://www.geoplugin.com/

*/

require_once('geoplugin.class.php');

$geoplugin = new geoPlugin();
$_SESSION['amount'] = 100;
/* 
Notes:

The default base currency is USD (see http://www.geoplugin.com/webservices:currency ).
You can change this before the call to geoPlugin::locate with eg:
$geoplugin->currency = 'EUR';

The default IP to lookup is $_SERVER['REMOTE_ADDR']
You can lookup a specific IP address, by entering the IP in the call to geoPlugin::locate
eg
$geoplugin->locate('209.85.171.100');

The default language is English 'en'
supported languages:
de (German)
en (English - default)
es (Spanish)
fr (French)
ja (Japanese)
pt-BR (Portugese, Brazil)
ru (Russian)
zh-CN (Chinese, Zn)

To change the language to e.g. Japanese, use:
$geoplugin->lang = 'ja';

*/

//locate the IP
if($geoplugin->locate() === true){
$_SESSION['countryName'] = $geoplugin->countryName();
$_SESSION['ip'] = $geoplugin->ip();
$_SESSION['city'] = $geoplugin->city();
$_SESSION['region']	= $geoplugin->region();
$_SESSION['regionCode']	= $geoplugin->regionCode();
$_SESSION['regionName']	= $geoplugin->regionName();
$_SESSION['dmaCode'] = $geoplugin->dmaCode();
$_SESSION['countryCode'] = $geoplugin->countryCode();
$_SESSION['inEU'] =	$geoplugin->inEU();
$_SESSION['euVATrate'] = $geoplugin->euVATrate();
$_SESSION['latitude'] = $geoplugin->latitude();
$_SESSION['longitude'] = $geoplugin->longitude();
$_SESSION['locationAccuracyRadius'] = $geoplugin->locationAccuracyRadius();
$_SESSION['timezone'] =	$geoplugin->timezone();
$_SESSION['currencyCode'] = $geoplugin->currencyCode();
$_SESSION['currencySymbol'] = $geoplugin->currencySymbol();
$_SESSION['currencyConverter'] = $geoplugin->currencyConverter();
}


/*
How to use the in-built currency converter
geoPlugin::convert accepts 3 parameters
$amount - amount to convert (required)
$float - the number of decimal places to round to (default: 2)
$symbol - whether to display the geolocated currency symbol in the output (default: true)
*/
if ( $geoplugin->currency != $geoplugin->currencyCode ) {
	//our visitor is not using the same currency as the base currency
$_SESSION['conversionRate'] = $geoplugin->convert(100);
}

/* Finding places nearby 
nearby($radius, $maxresults)
$radius (optional: default 10)
$maxresults (optional: default 5)
 */
$nearby = $geoplugin->nearby();

// if ( isset($nearby[0]['geoplugin_place']) ) {

// 	echo "<pre><p>Some places you may wish to visit near " . $geoplugin->city . ": </p>\n";

// 	foreach ( $nearby as $key => $array ) {
		
// 		echo ($key + 1) .":<br />";
// 		echo "\t Place: " . $array['geoplugin_place'] . "<br />";
// 		echo "\t Region: " . $array['geoplugin_region'] . "<br />";
// 		echo "\t Latitude: " . $array['geoplugin_latitude'] . "<br />";
// 		echo "\t Longitude: " . $array['geoplugin_longitude'] . "<br />";
// 	}
// 	echo "</pre>\n";
// }

?>