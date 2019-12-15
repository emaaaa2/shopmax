<?php 
	session_start();

include "connection.php";

if (isset($_POST["submit"])) {
$username = $_POST['username'];
$password = $_POST['password'];



$select="SELECT * from user WHERE  username = '$username' AND password = '$password'";
$result=$conn -> query("$select");
foreach ($result as $row) {
	$id=$row["id"];
}

$count = $result ->num_rows;

	if($count > 0){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $id;

	header("location:../index.php");

}
else{
	header("location:../signin.php");


}}


 ?>