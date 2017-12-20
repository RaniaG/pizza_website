<?php

require('db_connect.php');
	$conn=db_connect();
		
	$sql="insert into suggestions ( subject, suggestion, Name, Email) values('".$_POST['subject']."','".$_POST['message']."','".$_POST['name']."','".$_POST['email']."')";



	if ($GLOBALS['conn']->query($sql) === TRUE) {
		    
		} else {
		    echo "Error updating record: " . $GLOBALS['conn']->error;
		}
		header('Location: ../index.html');
	
?>