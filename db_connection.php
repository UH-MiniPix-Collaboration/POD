<?php

$dbhost = "10.0.1.16";
$dbuser = "pi";
$dbpass = "darksidegroup";
$db = "rpi_test";

$conn = mysql_pconnect($dbhost, $dbuser, $dbpass);

function OpenCon()
{
    return "Connection Established";
}

$selected = mysql_select_db("rpi_test", $conn);

echo "Connection Established\n"

?>
