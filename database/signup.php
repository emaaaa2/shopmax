<?php 
include "connection.php";


$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];

$insert= "INSERT INTO user(`username`, `password`, `age`, `phone`) VALUES  ('$username','$password','$age','$phone')";
$conn -> query($insert);

// echo $conn -> error;
header("location:../index.php");




 ?>