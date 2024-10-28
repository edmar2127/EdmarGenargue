<?php

$hostname = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "edmardb";
$conn = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);

if(!$conn)
{
    die("Something went wrong");
}
echo "Hello Coding";

?>