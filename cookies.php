<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php


if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == "ar") {
	?>
	<a href="en.php">english</a>
	<?php
}else{
	?>
	<a href="ar.php">عربي</a>
	<?php
}

?>

<br>
<a href="del.php">del</a> 
<?php

if (isset($_COOKIE['lang']) && $_COOKIE['lang'] == "ar") {
	include 'ar_array.php';
}else{
	include 'en_array.php';

}

?>

	<ul>
		<li><?php echo $lang['home']; ?></li>
		<li><?php echo $lang['about']; ?></li>
		<li><?php echo $lang['contact']; ?></li>
		<li><?php echo $lang['users']; ?></li>
	</ul>

</body>
</html>