<?php
require_once("helpers.php");
function validar($datos){
  $errores =[];
  if(isset($datos["nombre"])){
    $nombre = trim($datos["nombre"]);
    if(empty($nombre)){
      $errores["nombre"]="El campo nombre no puede estar vacio";
    }
  }
  if(isset($datos["apellido"])){
    $nombre = trim($datos["apellido"]);
    if(empty($nombre)){
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
  if (isset($_FILES)){
    if ($_FILES["avatar"]["error"]!=0) {
        $errores["avatar"]="No recibi la imagen";// code...
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

 ?>
