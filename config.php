<?php 
$servername="localhost";
$username = "root";
$password ="";
$dbname="sunnydb";
//connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn, 'UTF8');
//chack connection
if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}

?>