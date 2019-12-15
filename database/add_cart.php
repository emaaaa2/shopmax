<?php 
include("connection.php");

$select="SELECT * FROM cart WHERE id =$id_user";
$conn-> query($select);
header("location:../cart.php")

 ?>