<?php 
$hostname = "http://localhost/everydayNews";

$localhost = 'localhost';
$dbname = 'everyday-news';
$username = 'root';
$password = '';
$conn = mysqli_connect($localhost,$username,$password,$dbname) or die("connetion failed: " . mysqli_connect_error());
?>