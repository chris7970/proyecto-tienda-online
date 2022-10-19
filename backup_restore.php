<?php
include 'config/conect_db.php';
$db = new Database();
$con = $db->conectar();

?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backup y Restore Data base</title>
	<!-- bootstrap -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tienda de Musica</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <!--  Backup Data Base  -->
    <div class="container">
	      <h2 class="text-center" style="margin-top:30px;">Respaldar base de datos</h2>
	      <hr>
        <div class="row justify-content-center">
		      <div class="col-sm-6">
            <div class="card">
				      <div class="card-body">
	              <h2>Ingrese el nombre de la base de datos</h2>
	            <br>
				<form method="POST" action="config/backup.php">
					<div class="form-group row">
					  <label for="dbname" class="col-sm-3 col-form-label">Base de datos</label>
					    <div class="col-sm-9">
					      <input type="text" class="form-control" id="dbname" name="dbname" placeholder="Nombre de la base de datos a respaldar"required>
					    </div>
					</div>
					<button type="submit" class="btn btn-success" name="backup">Generar Respaldo</button>
        </form>
      <br>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
    
    <!-- Restore data base -->

    <div class="container">
	      <h2 class="text-center" style="margin-top:30px;">Restaurar base de datos</h2>
	    <hr>
	      <div class="row justify-content-center">
		      <div class="col-sm-6">
			      <?php
				      if(isset($_SESSION['error'])){
					  ?>
			<div class="alert alert-danger text-center">
				<?php echo $_SESSION['error']; ?>
			</div>
					<?php
 
					unset($_SESSION['error']);
				}
 
				if(isset($_SESSION['success'])){
					?>
					<div class="alert alert-success text-center">
						<?php echo $_SESSION['success']; ?>
					</div>
					<?php
 
					unset($_SESSION['success']);
				}
			?>
			<div class="card">
				<div class="card-body">
					<h2>Seleccione el archivo de respaldo</h2>
					<br>
					<form method="POST" action="config/restore.php" enctype="multipart/form-data">
					    
					    <div class="form-group row">
					      	<label for="dbname" class="col-sm-3 col-form-label">Base de datos</label>
					      	<div class="col-sm-9">
					        	<input type="text" class="form-control" id="name" name="name" placeholder="base de datos que deseas restaurar" required>
					      	</div>
					    </div>
					    <div class="form-group row">
					      	<label for="sql" class="col-sm-3 col-form-label">Archivo</label>
					      	<div class="col-sm-9">
					        	<input type="file" class="form-control-file" id="sql" name="sql" placeholder="base de datos que deseas restaurar" required>
					      	</div>
					    </div>
					    <button type="submit" class="btn btn-warning" name="restore">Restaurar base de datos</button>
					</form>
				  </div>
			  </div>
      </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>        
</body>
</html>    
</body>
</html>

