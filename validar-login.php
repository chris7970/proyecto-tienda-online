<?php

include("config/conect_db.php");
    $db = new Database();
    $con = $db->conectar();
    


if(isset($_GET['cerrar sesion'])){
    session_unset();
    session_destroy();
    header("location: login.php");
}

if(isset($_POST['Email']) && isset($_POST['Password']) && isset($_POST['idrol'])){
    session_start();
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $idrol = $_POST['idrol'];
    
    
    $sql = $con->prepare("SELECT * FROM tiendamusica.usuarios WHERE Email = '$Email' and Password = '$Password' and idrol = '$idrol'");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    print json_encode($resultado);

    while($row = current($resultado)){

    if($idrol == 1){ //administrador
        echo key($resultado);
        header("location: up_product.php");
    } 
    else{
        if($idrol == 2){
            echo key($resultado); // Usuario
            header("location: index.php");
        }    
    }next ($resultado);
}
}
//mysqli_free_result($out);

