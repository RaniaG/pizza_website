<?php

	require('db_connect.php');
	$conn=db_connect();
	$q="update item set rate=rate+".$_POST['rating'].", ratecount=ratecount+1 where ID=".$_POST['id'];
	mysqli_query($conn,$q);
	header('Location: ../menu.html');
?>