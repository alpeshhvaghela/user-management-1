<?php
ini_set("display_errors", true);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host ="localhost";
$user="root";
$password="root";
$database="user_management";

$conn = mysqli_connect($host,$user,$password,$database);
