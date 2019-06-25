<?php

$servername = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "bookseeker";

$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
if (!$conn) {
	die("Database Conncetion Failed ".mysql_connect_error());
}