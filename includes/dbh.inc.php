<?php

// used on TCTC server
//$dBServername = "localhost";
//$dBUsername = "2018Student";
//$dBPassword = "201810";
//$dBName = "php2018";

// used on laptop server
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystem";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
