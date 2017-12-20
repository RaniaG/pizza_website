<?php

require('db_connect.php');
	$conn=db_connect();
		
	$sql="SELECT `status` FROM `orders` WHERE `ID`=".$_POST['order_number'];
	$result = mysqli_query($conn, $sql);
	
	$i=0;
	$Result;
	if (mysqli_num_rows($result) > 0) {

	   	$row = mysqli_fetch_array($result);

			$Result=$row['status'];
		
	
	if ($Result==0)
		$i="pending";
	elseif ($Result==1)
		$i="processed";
	if ($Result==2)
		$i="On the way";
	else if ($Result==3)
		$i="delivered";
		
	header('Location: ../order_status.html?st='.$i.'&orn='.$_POST['order_number']);
	}
	else 
	header('Location: ../order_status.html');
?>
