<?php
  require_once("database.php");

  try{
    $db = new Database;
    $conn = $db->connectDB();

    //var_dump($hash);
    $sentencia = $conn->prepare("SELECT * FROM users WHERE name=:name");
    $sentencia->execute([
                       ':name' => $_POST['name'],
                     ]);
  }catch(PDOException $e){
    echo "sentence fail";
  }
  $user = $sentencia->fetchAll(PDO::FETCH_OBJ);
  $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
  if(password_verify($_POST['password'],$user[0]->password)){
    header("Location: http://localhost/webApp/code/index.php");
    die();
  }else{
    echo "<h1>Invalid user</h1>";
  }
?>
