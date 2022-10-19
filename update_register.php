<?php
    include("config/db.php");
    $db = new Database();
    $con = $db->conectar();

    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $stock = $_POST['product_stock'];
    $image = $_files['image'];
    
    $sql= $con->prepare("UPDATE tiendamusica2.productos SET product_id='$id', product_name='$name', product_price='$price', product_stock='$stock', image='$image' WHERE product_id='product_id'");
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC); 

    if($result){
        echo "<script> alert ('Se actualizo el producto exitosamente');
        window.location = 'up_product.php' </script>";
    }else{
        echo "<script> alert ('error al actualizar producto');
        window.location = 'up_product.php' </script>";
    }
