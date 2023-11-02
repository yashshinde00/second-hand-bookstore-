<?php

$dbhost ="localhost";
$dbemail = "root";
$dbusern = "root";
$dbpass ="";
$dbname ="login";

if(!$con= mysqli_connect($dbhost,$dbemail,$dbpass,$dbname))
{
    die("failed to connect");
}
?>