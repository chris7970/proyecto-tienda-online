<?php

include 'conect_db.php';
$db = new Database();
$con = $db->conectar();
session_start();
$id = $_GET['id'];
$idCliente = $_POST["idCliente"];
$Nombres = $_POST["Nombres"];
$Apellidos = $_POST["Apellidos"];
$Password = $_POST["Password"];
$Direccion = $_POST["Direccion"];
$Email = $_POST["Email"];
$Telefono = $_POST["Telefono"];
$idrol= $_POST["idrol"];

$sql=$con->prepare("UPDATE tiendamusica.usuarios SET Nombres='$Nombres', Apellidos='$Apellidos', Password='$Password', Direccion='$Direccion', Email='$Email', Telefono='$Telefono', idrol='$idrol' WHERE idCliente='$idCliente'");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

if($sql){
    echo "<script> alert ('Se actualizo usuario exitosamente');
        window.location = '../user_db.php' </script>";
    }else{
        echo "<script> alert ('error al actualizar producto');
        window.location = '../user_db' </script>";
    }
    
?>

