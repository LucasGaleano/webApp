<?php

require_once 'database.php';


function traerTabla($table){

  $db = new Database;
  $rowsData = $db->ejecutarSentencia("SELECT * FROM $table");

  foreach ($rowsData as $rowdata) {
    echo '<tr>';
     foreach ($rowdata as $value) {
       echo '<td>'.$value.'</td>';
     }
     echo '</tr>';
   }
}

function traerheaders($table){
  $db = new Database;
  $rowsNames = $db->ejecutarSentencia("show columns from $table");

  echo '<tr>';
  foreach ($rowsNames as $value) {
    echo "<th>$value[0]</th>";
  }
  echo '</tr>';

}

function traerTablas(){
  $db = new Database;
  $tables = $db->ejecutarSentencia("show tables");

  foreach ($tables as $table) {
      echo '<option value='.$table[0].'> '.$table[0]. '</option>';
  }

}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}

?>
