<?php
include'connection.php';

$star= $_POST['star'];
$pro =$_POST['pro'];
$user =$_POST['user'];

$insert ="INSERT INTO rate(rate,id_user,id_pro) VALUES('$star','$user','$pro') ";
$conn -> query($insert);

?>