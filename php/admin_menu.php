<?php
	require('db_connect.php');
	$conn=db_connect();

	if(isset($_POST['edit']))
		{
			edit();
		}
	else if(isset($_POST['delete']))
		{
			delete();
		}
	else if(isset($_POST['add']))
		{
			add();
		}
	
	function edit(){
		
	$sql = "update item set Name='".$_POST['Name']."', Price= ".$_POST['Price'].", Description= '".$_POST['Description']."' where ID= ".$_POST['ID'];
	//echo $sql;

	if ($GLOBALS['conn']->query($sql) === TRUE) {
		    
		} else {
		    echo "Error updating record: " . $GLOBALS['conn']->error;
		}
		header('Location: ../admin_menu.html');
	}
	function delete(){
		$sql="delete from item where ID=".$_POST['ID'];
		//echo $sql;
		if ($GLOBALS['conn']->query($sql) === TRUE) {
		    
		} else {
		    echo "Error updating record: " . $GLOBALS['conn']->error;
		}
		header('Location: ../admin_menu.html');
	}
	function add(){
		$sql="insert into item (Name,Price,Description,rate) values('".$_POST['Name']."',".$_POST['Price'].",'".$_POST['Description']."',0)";
		//echo $sql;
		if ($GLOBALS['conn']->query($sql) === TRUE) {
		    
		} else {
		    echo "Error updating record: " . $GLOBALS['conn']->error;
		}
		header('Location: ../admin_menu.html');
	}


?>