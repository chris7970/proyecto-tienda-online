<?php
include 'config/conect_db.php';
$db = new Database();
$con = $db->conectar();


$sql = $con->prepare("SELECT * FROM tiendamusica2.productos");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Proyecto numero 2</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">   
    
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-3 border bottom border-success">    

    
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Musica Quilpue</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                    <li class="nav-item"><a class="nav-link active" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="form-register.php">Registro de Usuario</a></li>    
                    <li class="nav-item"><a class="nav-link active" href="ayuda-user.html">Ayuda</a></li>
                    <li class="nav-item"><a class="nav-link active" href="login.php">Iniciar Sesion</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"aria-expanded="false">
                            Opciones
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="ayuda-user.html">Ayuda</a></li>                                  
                        </ul>
                    </li>                               
                </ul>
            </div>
        </div>       
                        
    </nav>                
    
    
<div class="page-content">
        <?php foreach ($resultado as $row) { ?>
            <div class="product-container">
                <?php             
                    $id = $row['product_id'];
                    $image = $row['image'];
                    if (!file_exists($image)) {
                        $image = "images/no-photo.png";
                  
                    }
                ?>
                <h6><?php echo $row['product_name']; ?></h6>
                <img src="data:image/png;base64,<?php echo base64_encode($row['image']);?>">
                

                <h6><?php echo '$'.number_format($row['product_price'],0); ?></h6>
                <button class="button-add">Agregar al carrito</button>
            </div>
        <?php } ?>
    </div>      
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>