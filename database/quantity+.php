<?php
session_start();
include "connection.php";
$plus = $_POST['plus'];
$id_pro=$_POST['id_pro'];
$id_user=$_SESSION['id'];

$update = "UPDATE cart SET quantity ='$plus' WHERE id_pro ='$id_pro' AND id_user ='$id_user' ";
$conn->query($update);
?>