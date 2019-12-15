<?php
include "connection.php";
$fn=$_POST['fn'];
$ln=$_POST['ln'];
$cn=$_POST['cn'];
$address=$_POST['address'];
$postal=$_POST['postal'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$order=$_POST['order'];

 $id_user=$_SESSION['id'];


$update = "UPDATE user SET `fn` = '$fn' `ln` = '$ln' `cn` = '$cn' `address` = '$address' `postal` = '$postal'`email` = '$email'`phone` = '$phone'`order` = '$order' WHERE id ='$id_user'  ";
$conn -> query($update);


?>