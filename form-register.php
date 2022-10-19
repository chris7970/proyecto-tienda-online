<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>clientes registrados</title>


  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <scrip src="js/main.js"></scrip>
</head>

<body>

  <!-- navbar -->
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


  <!-- formulario de registro de usuarios -->
  <form name="form-register" action="config/function-regi-user.php" method="POST">
    <div class="container register">
      <div class="row">
        <div class="col-md-3 register-left">
          <img href="images/img1.png" alt="" />
          <h2>Bienvenido</h2>
          <p>Registrandote como usuario de nuestra tienda podras acceder a comprar en linea y Descuentos</p>
          <input type="submit" name="" action="login.php" value="Login" /><br />
        </div>
        <div class="col-md-9 register-right">

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <h3 class="register-heading">Registro de Usuario</h3>
              <div class="row register-form">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="idCliente" placeholder="Rut *" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Nombres" placeholder="Nombres *" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="Apellidos" placeholder="Apellidos *" required />
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="Password" placeholder="Password *" required />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="Direccion" placeholder="Direccion *" required />
                  </div>
                  <div class="form-group">
                    <input type="Email" name="Email" class="form-control" placeholder="Correo Electronico *" required />
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" name="Telefono" placeholder="Numero de Telefono *" required />
                  </div>
                  <div class="form-group">
                    <input type="hidden" class="form-control" name="idrol" placeholder="rol*" />
                  </div>
                  <input type="submit" class="btn btn-success" value="Registrar " />
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
  </form>
</body>

</html>