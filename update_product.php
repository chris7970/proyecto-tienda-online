<?php
include("config/db.php");
$db = new Database();
$con = $db->conectar();

  
$id = $_GET['id'];

$sql = $con->prepare("SELECT * FROM tiendamusica2.productos WHERE product_id='$id'");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="estilos.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Tienda Musica Vinilos</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Registro Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Administrador</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        
  
<?php foreach ($resultado as $row) { ?>
        
    <div class="container overflow-hidden text-aling-left">
      <div class="row g-3">
        <div class="col-6 col-md-4">
          <div class="p-1 border bg-light">
            <h3> Data Base Edit products:</h3>
              <form class="form" method="POST" action="update_register.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="" class="form-label">product_id:</label>
                  <input type="text" class="form-control form-control-lg" name="product_id"  value="<?php echo $row['product_id'] ?>">                 
                </div>
                <div class="form-group">
                  <label for="" class="form-label">product_name:</label>
                  <input type="text" class="form-control form-control-lg" name="product_name"  value="<?php echo $row['product_name'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">product_price:</label>
                  <input type="float" class="form-control form-control-lg" name="product_price"  value="<?php echo $row['product_price'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">product_stock:</label>
                  <input type="float" class="form-control form-control-lg " name="product_stock"  value="<?php echo $row['product_stock'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">seleccione la imagen del producto:</label>
                  <input type="file" class="form-control form-control-lg" name="image">
                  <img height="150px" src="data:image/png;base64,<?php echo base64_encode($row["image"]) ?>"> <br>
                </div>
                <br>
                  <input type="submit" class="btn btn-warning btn-block" value="Guardar"> 
                        
                    </form>
<?php } ?>
                </div>

            </div>
                    
                    
                    
                                                
                    
              
                  
        </div>
</body>
</html>