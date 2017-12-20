<?php

require('db_connect.php');
	$conn=db_connect();
		
	$sql="SELECT `status` FROM `order` WHERE `ID`=".$_POST['order_number'];
	$result = mysqli_query($conn, $sql);
	
	$i=0;
	$Result;
	if (mysqli_num_rows($result) > 0) {

	   	while($row = mysqli_fetch_array($result)){

			$Result=$rows['status'];
		}
	}
	if ($Result==1)
		$i="pending";
	elseif ($Result==2)
		$i="processed";
	if ($Result==3)
		$i="On the way";
	else
		$i="delivered";
	
	alert("Your Order is ".$i);	
	
?>
