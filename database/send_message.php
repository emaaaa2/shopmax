<?php

include '../../training/database/connection.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (empty($fname)) {
echo "please Enter your name";
}
elseif (empty($lname)) {
echo "please Enter your last name";
}
elseif (empty($email)) {
echo "please Enter your email";
}
elseif (empty($subject)) {
echo "please Enter your subject";
}
elseif (empty($message)) {
echo "please Enter your message";
}
else{

$insert = "INSERT INTO message (`name`, `subject`, `mesage`) VALUES ('$fname', '$subject', '$message')";

$conn -> query($insert);
echo "Done";
}