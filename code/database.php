<?php
require_once "config.php";

class Database{
  function connectDB(){
    //echo "connection... ";
    //echo '<script>alert("connection...");</script>';
  try{
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DB,USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully".  "<br/>";
    //echo '<script>alert("Connected successfully");</script>';
  }catch(PDOException $e){
    //echo '<script>alert("Connection fail");</script>';
  }
  return $conn;
  }

  function disconnectDB($conn){
    $conn=null;
  }

  function ejecutarSentencia($sentencia){

    //echo '<script>alert("Sentencia");</script>';
    $conn = $this->connectDB();

    $sentencia = $conn->prepare($sentencia);
    $sentencia->execute();
    $data = $sentencia->fetchAll(PDO::FETCH_NUM);

    $this->disconnectDB($conn);

    return $data;
  }
}
?>
