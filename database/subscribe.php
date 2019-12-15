<?php

include'connection.php';

$email= $_POST['email'];

$insert = "INSERT INTO subcribe (`email`) VALUES ('$email')";

$conn -> query($insert);