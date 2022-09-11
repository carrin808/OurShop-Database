<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "our_shop1";

$conn = mysqli_connect($host,$user,$password,$db);
    if (!$conn){
        die("DB connection failed");
    }
