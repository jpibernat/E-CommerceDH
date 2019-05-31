<?php
session_start();
require_once("helpers.php");
function validar($datos, $bandera){
  $errores =[];
  if(isset($datos["nombre"])){
    $nombre = trim($datos["nombre"]);
    if(empty($nombre)){
      $errores["nombre"]="El campo nombre no puede estar vacio";
    }
  }
  if(isset($datos["apellido"])){
    $apellido = trim($datos["apellido"]);
    if(empty($apellido)){
      $errores["apellido"]="El campo apellido no puede estar vacio";
    }
  }
  if (isset($datos["email"])) {
    $email = trim($datos["email"]);
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
      $errores["email"]="El email no es valido";
    }
  }

$password = trim($datos["password"]);
  if(isset($datos["password"])){

    if (empty($password)) {
      $errores["password"]="El campo contraseña no puede estar vacio";
    }
    if (strlen($password)<6) {
        $erroeres["password"]="El contraseña debe tener minimo 6 caracteres";
    }
  }
  if (isset($datos["repassword"])){
    $repassword = trim($datos["repassword"]);
    if (empty($repassword)){
      $errores["repassword"]="El campo contraseña no puede estar vacio";
    }
    if ($password != $repassword) {
      $errores["reppassword"]="Las contraseñas deben coincidir";
    }
  }
  if (isset($_FILES) && $bandera == 'registro'){
    if ($_FILES["avatar"]["error"]!=0) {
        $errores["avatar"]="No recibi la imagen";
    }
    $avatar = $_FILES["avatar"]["name"];
    $ext = pathinfo($avatar,PATHINFO_EXTENSION);
    if($ext != "jpg" && $ext !="png"){
      $erreres["avatar"]  = "La extension del archivo debe ser PNG o JPG";
    }
  }

  return $errores;
}

function armarAvatar($imagen){
  $nombre = $imagen["avatar"]["name"];
  $ext = pathinfo($nombre,PATHINFO_EXTENSION);
  $archivoOrigen = $imagen["avatar"]["tmp_name"];
  $archivoDestino = dirname(__DIR__);
  $archivoDestino = $archivoDestino."/avatares/";
  $avatar = uniqid("");
  $archivoDestino = $archivoDestino.$avatar;
  $archivoDestino = $archivoDestino.".".$ext;
  move_uploaded_file($archivoOrigen,$archivoDestino);
  $avatar = $avatar.".".$ext;
  return $avatar;
}

function armarUsuario($datos,$avatar){
  $usuario = [
    "nombre"=>$datos["nombre"],
    "apellido"=>$datos["apellido"],
    "email"=>$datos["email"],
    "passsword"=>password_hash($datos["password"],PASSWORD_DEFAULT),
    "avatar"=>$avatar,
    "perfil"=>1
  ];
  return $usuario;
}

function guardarUsuario($usuario){
  $json = json_encode($usuario);
  file_put_contents("usuarios.json",$json.PHP_EOL,FILE_APPEND);
}

function buscarPorEmail($email){
  $usuarios = abrirBaseJSON("usuarios.json");
  foreach ($usuarios as $key => $value) {
    if($email == $value["email"]){
      return  $value;
    }
  }
  return null;
}

function abrirBaseJSON(){
  if (file_exists($archivo)){
      $json = file_get_contents($archivo);
      $json = explode(PHP_EOL, $json);
      array_pop ($json);
      foreach ($json as $key => $value) {
        $arrayUsuarios[] = json_decode($value, true);
      }
      return $arrayUsuarios;
  }
  return null;


}

function seteoUsuario($usuario, $datos){
  $_SESSION["nombre"] = $usuario["nombre"];
  $_SESSION["apellido"] = $usuario["apellido"];
  $_SESSION["email"] = $usuario["nombre"];
  $_SESSION["avatar"] = $usuario["nombre"];
  $_SESSION["perfil"] = $usuario["nombre"];
  if(isset($datos["recordar"])){
      setcookie("email", $datos["email"], time()+60*60*24);
      setcookie("password",$datos["password"], time()+3600);
      /*esta linea es para guardar la contraseña en  la cookie por un tiempo determinado(no recomendable)*/
  }
}

function validarAcceso(){
  if(issset($_SESSION["email"])){
    return true;
  }elseif (isset($_COOKIE["email"])){
    $_SESSION["email"] = $_COOKIE["email"];
    $_SESSION["password"] = $_COOKIE["password"];
  }else{
    return false;
  }
}

 ?>
