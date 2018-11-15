<?php
require_once "config.php";

class Database{
  function connectDB(){
    //echo "connection... ";
  try{
    $conn = new PDO("mysql:host=".SERVER.";dbname=".DB,USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully".  "<br/>";
  }catch(PDOException $e){
    echo '<script>alert("Connection fail");</script>';
  }
  return $conn;
  }

  function disconnectDB($conn){
    $conn=null;
  }

}

?>
