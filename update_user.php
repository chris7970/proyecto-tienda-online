<?php
include("config/conect_db.php");
$db = new Database();
$con = $db->conectar();

    session_start();
  
$id = $_GET['id'];

$sql = $con->prepare("SELECT * FROM tiendamusica.usuarios WHERE idCliente='$id'");
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
              <form class="form" method="POST" action="config/function-edit-user.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="" class="form-label">iCliente:</label>
                  <input type="text" class="form-control form-control-lg" name="idCliente"  value="<?php echo $row['idCliente'] ?>">                 
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Nombres:</label>
                  <input type="text" class="form-control form-control-lg" name="Nombres"  value="<?php echo $row['Nombres'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Apellidos:</label>
                  <input type="float" class="form-control form-control-lg" name="Apellidos"  value="<?php echo $row['Apellidos'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Password:</label>
                  <input type="float" class="form-control form-control-lg " name="Password"  value="<?php echo $row['Password'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Direccion:</label>
                  <input type="float" class="form-control form-control-lg " name="Direccion"  value="<?php echo $row['Direccion'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Email:</label>
                  <input type="float" class="form-control form-control-lg " name="Email"  value="<?php echo $row['Email'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Telefono</label>
                  <input type="float" class="form-control form-control-lg " name="Telefono"  value="<?php echo $row['Telefono'] ?>">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">idrol</label>
                  <input type="float" class="form-control form-control-lg " name="idrol"  value="<?php echo $row['idrol'] ?>">
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