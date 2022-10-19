<?php
include 'conect_db.php';
$db = new Database();
$con = $db->conectar();
session_start();
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $stock = $_POST['product_stock'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    if(empty($_POST['product_id']) || empty($_POST['product_name'])|| empty($_POST['product_price'])|| empty($_POST['product_stock'])){
        echo "debe ingresar todos los campos solicitados";
    }else{
        $sql = "INSERT INTO tiendamusica2.productos(product_id, product_name, product_price, product_stock, image) VALUES ('$id', '$name', '$price', '$stock', '$image')";
        
        $result = $con->query($sql);

        if($result){
            echo "<script> alert ('Se ingreso el producto exitosamente');
            window.location = '../up_product.php' </script>";
        }else{
            echo "<script> alert ('error al ingresar producto');
            window.location = 'up_product.php' </script>";
        }
    }



?>
