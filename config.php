<?php


$host="localhost";
$user="root";
$passwd="";
$database="helping_hands";

$conn=mysqli_connect($host,$user,$passwd,$database);

/*if(!$conn){
echo "<script>alert('Connection Failed.')</script>";
}*/
if(mysqli_connect_errno()){
    die("Failed to connect with MySQL:".mysqli_connect_error());
}

?>
