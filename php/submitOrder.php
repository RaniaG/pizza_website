<?php
require('db_connect.php');
	$conn=db_connect();
	$query="update orders set user_name='".$_POST['name']."', user_phone='".$_POST['phone']."', user_address='".$_POST['address']."',status=0 where ID=".$_POST['ID'];
	echo $query;
	mysqli_query($conn, $query);
	header('Location: ../menu.html');
?>