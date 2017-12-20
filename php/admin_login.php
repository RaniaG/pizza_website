<?php
require('db_connect.php');
$conn=db_connect();
session_start();

$query="select * from admin_info where user_name= '".$_POST['username']."' and pass= '".$_POST['password']."'";
echo $query;	
$res= mysqli_query($conn, $query);	
if(mysqli_num_rows($res) > 0)
{
	
	$row = mysqli_fetch_assoc($res);
	$_SESSION["name"]=$row['name'];
	echo $row['name'];
	header('Location: ../admin_index.html');
}
	else{
		
		header('Location: ../admin_login.html');
	}

?>