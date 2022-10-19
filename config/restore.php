<?php
$conn = new mysqli('localhost', 'root', 'root', 'tiendamusica2');
session_start();
 
	//include our function
include 'function-restore.php';
 
	if(isset($_POST['restore'])){
		
		//get post data
    $name = $_POST['name'];	
	
		//moving the uploaded sql file
		$filename = $_FILES['sql']['name'];
		move_uploaded_file($_FILES['sql']['tmp_name'],'upload/' . $filename);
		$file_location = 'upload/' . $filename;
 
		//restore database using our function
		$restore = restore($name, $file_location);
 
		if($restore['error']){
			$_SESSION['error'] = $restore['message'];
		}
		else{
			$_SESSION['success'] = $restore['message'];
		}
 
	}
	else{
		$_SESSION['error'] = 'Completa las credenciales de la base de datos primero';
	}
 
	header('backup_restore.php');
 
?>