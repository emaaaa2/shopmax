<?php

include'connection.php';

$search= $_POST['search'];

$select ="SELECT * from product where name like '%$search%'";
$result = $conn ->query($select);

foreach ($result as $row) {
?>

<li><a href="shop-single.php?id=<?php echo $row['id']?>"><?php echo $row['name'];?></a></li>


<?php
}

?>