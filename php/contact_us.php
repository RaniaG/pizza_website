<?php

require('db_connect.php');
	$conn=db_connect();
		
	$sql="INSERT INTO `suggestions`(`ID`, `subject`, `suggestion`, `Name`, `Email`) VALUES ('','".$_POST['subject']."','".$_POST['message']."','".$_POST['name']."','".$_POST['email']"')";


	if ($GLOBALS['conn']->query($sql) === TRUE) {
		    
		} else {
		    echo "Error updating record: " . $GLOBALS['conn']->error;
		}
		header('Location: ../index.html');
	}
?>