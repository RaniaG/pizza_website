<?php
	require("db_connect.php");
	$conn=db_connect();
	$q1="select ID from orders";
	$res1=mysqli_query($conn,$q1);
	if(mysqli_num_rows($res1) > 0)
		{
			$i=0;
			while($row1 = mysqli_fetch_array($res1))
			{
				echo $_POST['status'][$i];
				$q2="update orders set status= ".$_POST['status'][$i]." where ID= ".$row1['ID'];
				
				$r2=mysqli_query($conn,$q2);
				if($_POST['status'][$i]==4) //served
				{//delete from db
					$q4="delete from orders where ID=".$row1['ID'];
					$q3="delete from order_items where OrderID=".$row1['ID'];
					mysqli_query($conn,$q3);
					mysqli_query($conn,$q4);
				}
				$i=$i+1;
			}
		}
	header('Location: ../admin_orders.html');
?>