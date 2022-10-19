<?php 
    
    include 'conect_db.php';
   
    $db = new Database();
    $con = $db->conectar();

    $idCliente=$_POST["idCliente"];
    $Nombres=$_POST["Nombres"];
    $Apellidos=$_POST["Apellidos"];
    $Password=$_POST["Password"];
    $Direccion=$_POST["Direccion"];
    $Email=$_POST["Email"];
    $Telefono=$_POST["Telefono"];
    $idrol= 2;
    $datos=array();
    

    // validar IdCliente        
    if($idCliente==""){
        array_push($datos, "Rut no puede estar vacio");
    }
    if(strlen($idCliente) >9){
        array_push($datos, "El Rut es muy largo, no mas de 9 digitos");
    }
    if(!is_numeric($idCliente)){
        array_push($datos, "Debe ingresar solo digitos en el rut");
    }
    
    // validar Nombres  
    if($Nombres==""){
        array_push($datos, "Nombres no puede estar vacio");
    }
    if(strlen($Nombres) >20){
        array_push($datos, "Los nombres son muy largos");
    }
    if(is_numeric($Nombres)){
        array_push($datos, "Solo debe ingresar letras en los nombres");
    }

    // validar apellidos
    if($Apellidos==""){
        array_push($datos, "Apellidos no puede estar vacio");
    }
    if(is_numeric($Apellidos)){
        array_push($datos, "Solo debe ingresar letras en los Apellidos");
    }
    if(strlen($Apellidos) > 20){
        array_push($datos, "Los apellidos son muy largos");
    }
    //validar password
    if($Password==""){
        array_push($datos, "Password no puede estar vacio");
    }
    if(strlen($Password) > 6 ){
        array_push($datos, "Solo 6 caracteres para el password");
    }
    if(!is_numeric($Password)){
        array_push($datos, "Contraseña de 6 digitos, solo numeros");
    }
    // validar Direccion
    if($Direccion==""){
        array_push($datos, "Direccion no puede estar vacio");
    }
    if(strlen($Direccion) > 40){
        array_push($datos, "La direccion es muy larga");
    }

    if($Email==""|| strpos($Email, "@") === false){
        array_push($datos, "Debes ingresar tu correo electronico");
    }

    if($Telefono==""){
        array_push($datos, "Debes ingresar tu telefono de contacto");
    }
    if(!is_numeric($Telefono)){
        array_push($datos, "Ingrese solo digitos en numero de contacto");
    }

    if
        (empty($_POST['idCliente']) || empty($_POST['Nombres'])|| empty($_POST['Apellidos'])|| empty($_POST['Password'])){
            echo "debe ingresar todos los campos solicitados";
    }
        
    else{
        
        $sql = "INSERT INTO tiendamusica.usuarios  VALUES ('$idCliente', '$Nombres', '$Apellidos','$Password','$Direccion', '$Email', '$Telefono','$idrol')";
        
        $result = $con->query($sql);

        if($result){
            echo "<script> alert ('!Registrado exitosamente¡');
            window.location = '../form-register.php' </script>";
        }else{
            echo "<script> alert ('error al Registrar usuario');
            window.location = '../login.php' </script>";
        }
    }
        