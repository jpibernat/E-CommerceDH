<?php
function dd($valor){
  echo "<pre>";
  var_dump($valor);
  echo "</pre>";
  exit;
}
/*para que persistan los datos de los formularios a medida que se cargan si hay errores en otros campos */
function persistir ($input){
  if(isset($_POST[$input])){
    return $_POST[$input];
  }
}
 ?>
