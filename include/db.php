<?php

// DataBase Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";

$conn = new mysqli($servername,$username,$password, $dbname);

if($conn->connect_error){
    die("Connection Failed :" . $conn->connect_error);
}else{
    // echo "Connected Successfully";
}

?>