<?php
    include("config/conect_db.php");
    $db = new Database();
    $con = $db->conectar();
    session_start();
    $sql = $con->prepare("SELECT * FROM tiendamusica.usuarios");
    $sql->execute();
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
    // $sql="SELECT * FROM productos";
    // $query=mysqli_query($conexion,$sql);
    // $query=$con->$sql;
 
?>
    
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Usuario Administrador </title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
            <a class="nav-link active" href="index.html" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro-usuarios.php">Registro Cliente</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <table class="table">
            <thead class="table-success table-striped">
                <tr>
                    <th>idCliente</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Password</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>idrol</th>
                    <th></th>
                    <th></th>
                  
                </tr>
            </thead>
        </tbody>
        
                <?php
                    // .while($row = mysqli_fetch_array($query)):?> 
        <?php foreach ($resultado as $row) { ?>
                <tr>  
                    <th><?= $row["idCliente"] ?> </th>
                    <th><?= $row["Nombres"] ?> </th>
                    <th><?= $row["Apellidos"] ?> </th>
                    <th><?= $row["Password"] ?> </th>
                    <th><?= $row["Direccion"] ?> </th>
                    <th><?= $row["Email"] ?> </th>
                    <th><?= $row["Telefono"] ?> </th>
                    <th><?= $row["idrol"] ?> </th>

                    <th><a href="update_user.php?id=<?= $row['idCliente'] ?>" class="btn btn-info">Editar</a></th>
                    <th><a href="config/function_delete.php?id=<?= $row['idCliente'] ?>" class="btn btn-danger">Eliminar</a></th>
                    
                </tr>
                                          
                <?php
                  } 
                ?>
              

                </tbody>    
            </table>
       <br>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
    </body>
</html>