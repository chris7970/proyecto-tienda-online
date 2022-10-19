<?php
    include 'config/conect_db.php';
   
    $db = new Database();
    $con = $db->conectar();
    
    $sql= $con->prepare("SELECT * FROM tiendamusica2.productos");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    
  
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargar productos a base de datos</title>
    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- ----navbar---- -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tienda de Musica</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Registro de Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ayuda-user.html">Ayuda</a>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Iniciar Sesion
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="ayuda-user.html">Ayuda</a></li>
                            <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!----- form-up_product--- -->


    <div class="container overflow-hidden text-aling-left">
        <div class="row g-6">
            <div class="col-9 col-md-4">
                <div class="p-1 border bg-light">
                    <h3> Data Base Load products:</h3>
                    <form class="form" method="POST" action="config/product_register.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="" class="form-label">product_id:</label>
                            <input type="text" class="form-control form-control-lg" name="product_id" id=""
                                placeholder="ingrese numero de serie del producto" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">product_name:</label>
                            <input type="text" class="form-control form-control-lg" name="product_name" id=""
                                placeholder="ingrese el nombre del producto"required>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">product_price:</label>
                            <input type="float" class="form-control form-control-lg" name="product_price" id=""
                                placeholder=" $ingrese el precio del producto" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">product_stock:</label>
                            <input type="float" class="form-control form-control-lg " name="product_stock" id=""
                                placeholder="ingrese el stock del producto" required>
                        </div>

                        <div class="form-group">
                            <label for="" class="form-label">seleccione la imagen del producto:</label>
                            <input type="file" class="form-control form-control-lg" name="image" id="" required>
                        </div>

                        <input type="submit" class="btn btn-success" value="Load Product">

                    </form>

                </div>

            </div>
            <!-- producto en base de datos -->

            
            <div class="col-sm-6 col-md-8">
                <div class="p-1 border bg-light">
                <form class="form" method="POST" action="update_product.php" enctype="multipart/form-data">
                    <h3>Data Base Products: </h3>
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>product_id</th>
                                <th>product_name</th>
                                <th>product_price</th>
                                <th>product_stock</th>
                                <th>image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php foreach ($resultado as $row) { ?>
                        <?php $id = $row['product_id'];?>
                        
                            <tr>
                            
                                <td><?= $row["product_id"] ?></td>                            
                                <td><?= $row["product_name"] ?></td>                              
                                <td><?= $row["product_price"] ?></td>                              
                                <td><?= $row["product_stock"] ?></td>                             
                                <td><img height="60px" src="data:image/png;base64,<?php echo base64_encode($row["image"])?>"> </td>
                               
                                <th><a href="update_product.php?id=<?= $row['product_id'] ?>" class="btn btn-info">Edit</a></th>
                                <th><a href="delete.php?id=<?= $row['product_id'] ?>" class="btn btn-danger">Delete</a></th>
                                <?php } ?>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html>