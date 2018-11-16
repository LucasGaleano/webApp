<?php
  require_once("php/database.php");

  try{
    $db = new Database;
    $conn = $db->connectDB();

    $sentencia = $conn->prepare("SELECT * FROM users WHERE name=:name");
    $sentencia->execute([':name' => $_POST['name'],]);
  }catch(PDOException $e){
    echo "Login fail";
  }
  //$db->disconnectDB();
  $user = $sentencia->fetchAll(PDO::FETCH_OBJ);

  if(password_verify($_POST['password'],$user[0]->password)){
    session_start();
    $_SESSION['username'] = $user[0]->name;
    $_SESSION['role'] = $user[0]->role;
    header("Location: index.php");
    die();
  }else{
    echo "<h1>Invalid user</h1>";
  }
?>
