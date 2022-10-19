<?php
include 'conect_db.php';
$db = new Database();
$con = $db->conectar();
session_start();

$id= $_GET['id'];


$sql = $con->prepare("DELETE FROM tiendamusica.usuarios WHERE idCliente='$id'");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    if($sql){
        if($sql){
            echo "<script> alert ('Se elimino el usuario exitosamente');
                window.location = '../user_db.php' </script>";
            }else{
                echo "<script> alert ('error al actualizar producto');
                window.location = '../user_db' </script>";
            }
        
    }
?>