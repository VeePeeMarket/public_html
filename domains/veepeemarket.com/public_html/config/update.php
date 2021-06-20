<?php 
include 'private.php';
$mysqli->query("UPDATE curr SET currency_symbol = '&#8364;' WHERE currency_code = 'EUR'");
?>