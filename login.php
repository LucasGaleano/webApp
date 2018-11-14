<?php
  require_once("config.php");
  echo "connection... ";
  try{
    $conn = new PDO("mysql:host=" . SERVER.";dbname=".DB,USER,PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully".  "<br/>";
  }catch(PDOException $e){
    echo "Connected fail";
  }
  try{
    $sentencia = $conn->prepare("SELECT * FROM users WHERE name=:name and password= :pass");
    $sentencia->execute([
                       ':name' => $_POST['name'],
                       ':pass' => $_POST['password'],
                     ]);
  }catch(PDOException $e){
    echo "sentence fail";
  }
  $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
  if (count($users)==1){
    header("Location: http://localhost/pagina/admin.php");
    die();
  }else{
    echo "<h1>Invalid user</h1>";
  }
  // echo("First name: " .  . "<br/>");
  // echo("Last name: " . $_POST['password'] . "<br/>");


?>
