<?php
	require('db_connect.php');
	$conn=db_connect();
	

    $totalprice=0;
	foreach( $_POST['checked'] as $itemID ) {
        //get price
		$q1="select Price from item where ID=".$itemID;
		$res1=mysqli_query($conn, $q1);
		$row1=mysqli_fetch_array($res1);
		$totalprice+=$row1['Price'];

        }
    $q="insert into orders (total_price) values (".$totalprice.")";
	mysqli_query($conn, $q);
    $order_id = mysqli_insert_id($conn);
    echo $totalprice."  ";
    echo $order_id."  ";
    
    foreach( $_POST['checked'] as $itemID ) {
    	$q3="insert into order_items (ItemID,OrderID) values(".$itemID.", ".$order_id.")";
        echo $q3."  ";
    	
        if (mysqli_query($conn, $q3)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $q3 . "<br>" . mysqli_error($conn);
        }
    }
    header('Location: ../checkout.html?id='.$order_id);
?>