<?php
session_start();
if(!isset($_SESSION['role']) && $_SESSION['role'] != 'admin'){
  redirect("login.html");
}

function destruirSesion(){
  $_SESSION = array();
  session_destroy();
}

?>
