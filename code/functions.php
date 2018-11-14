<?php

require_once 'database.php';


function traerTabla($table){

  $rowsData = ejecutarSentencia("SELECT * FROM $table");

  foreach ($rowsData as $rowdata) {
    echo '<tr>';
     foreach ($rowdata as $value) {
       echo '<td>'.$value.'</td>';
     }
     echo '</tr>';
   }
}

function traerheaders($table){

  $rowsNames = ejecutarSentencia("show columns from $table");

  echo '<tr>';
  foreach ($rowsNames as $value) {
    echo "<th>$value[0]</th>";
  }
  echo '</tr>';

}

function traerTablas(){

  $tables = ejecutarSentencia("show tables");

  foreach ($tables as $table) {
      echo '<option value='.$table[0].'> '.$table[0]. '</option>';
  }

}

function ejecutarSentencia($sentencia){
  $db = new DataBase;
  $conn = $db->connectDB();

  $sentencia = $conn->prepare($sentencia);
  $sentencia->execute();
  $data = $sentencia->fetchAll(PDO::FETCH_NUM);


  $db->disconnectDB($conn);

  return $data;

}
?>
