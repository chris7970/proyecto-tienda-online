<?php
	class Database {

      private $hostname = "localhost";
      private $database = "tiendamusica2";
      private $username = "root";
      private $password = "root";
      

   function conectar(){
   try{
	   $conexion = "mysql:host=" . $this->hostname .";dbname=" .$this->database .";username=" . $this->username .";password=" .$this->password;

   $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => FALSE
   ];

      $pdo = new PDO($conexion, $this->username, $this->password, $options);

      return $pdo;
         }catch(PDOException $e){
            echo 'error conexion: ' . $e->getMessage();
            exit;
         }
      }
   }
?>