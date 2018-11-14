<?php
define("SERVER","localhost");
define("USER","lucas");
define("PASS","lucas");
define("DB","pagina");

class Database{
  function connectDB(){
    //echo "connection... ";
  try{
    $conn = new PDO("mysql:host=" . SERVER.";dbname=".DB,USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully".  "<br/>";
  }catch(PDOException $e){
    //echo "Connected fail";
  }
  return $conn;
  }

  function disconnectDB($conn){
    $conn=null;
  }

}

?>
