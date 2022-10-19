<?php
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = $_POST['dbname'];

include 'function-backup.php';
 
if(isset($_POST['backup'])){
    
    $host = $host;
    $user = $user;
    $pass = $pass;
    $dbname = $dbname;

    backDb($host, $user, $pass, $dbname);

    exit();
    
}


?>