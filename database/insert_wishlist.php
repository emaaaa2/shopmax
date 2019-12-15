<?php 
session_start();
include("connection.php");
$id=$_GET['id'];
$id_user=$_SESSION['id'];




$select = "SELECT * FROM wishlist WHERE id_pro ='$id' AND id_user ='$id_user'";
$result = $conn -> query($select);
$count = $result ->num_rows;


if ($count >0) {
	$row = $result -> fetch_assoc();
	$quantity=(int)$row['quantity'];
	$quantity++;

$update = "UPDATE wishlist SET `quantity` = '$quantity' WHERE id_pro ='$id' AND id_user ='$id_user'  ";
$conn -> query($update);
}


else{

$insert="INSERT INTO wishlist (id_user,id_pro) VALUES ('$id_user','$id')";
$conn -> query($insert);
}

echo $conn -> error;

header("location:../wishlist.php");




 ?>