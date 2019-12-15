<?php
session_start();

include "connection.php";
$min = $_POST['min'];
$id_pro=$_POST['id_pro'];
$id_user=$_SESSION['id'];

$update = "UPDATE cart SET quantity ='$min' WHERE id_pro ='$id_pro' AND id_user ='$id_user' ";
$conn->query($update);

?>