<?php 
include("connection.php");

$select="SELECT * FROM wishlist WHERE id =$id_user";
$conn-> query($select);
header("location:../wishlist.php")

 ?>