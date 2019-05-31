<?php
require_once("helpers.php");
require_once("secciones_php/funciones.php");
if ($_POST) {
  $errores = validar($_POST, "registro");
  if(count($errores)==0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST,$avatar);
    guardarUsuario($usuario);
    header("location: ingreso.php");
    exit;
  }
}
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Norican&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="css/master.css?v=<?php echo time(); ?>">
    <title>Fer Swimwear</title>
  </head>
  <body>
    <div class="flex-container">
    <?php include_once ("secciones_php/menu.php")?>
    <div class="main">
    <section class="sin-carousel">
        <article class="registro">
          <?php if (isset($errores)):?>
            <ul class="alert alert-danger">
              <?php foreach ($errores as $key => $value) :?>
              <li><?=$value;?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif;?>
          <h1>Registrate acá</h1>
          <!--Este formulario ya valida con php, pero se reemplazo el nombre de usuario por nombre de la persona y se agrego el campo de apellido. El login se haria por email. Tambien falta ajustar el responsive del mismo (se ve mal en dispositivo movil), falta corregir los errores que muestra debajo de cada campo -->
          <form action="" method="POST" enctype= "multipart/form-data"  >
             <label>Nombre</label>
             <br>
             <input name="nombre" type="text" id="nombre"  value="<?=isset($errores["nombre"])? "": persistir("nombre")?>" placeholder="Nombre" />
             <!--aca deberia ir el php donde se muestra el error en caso de existir alguno -->
             <br>
             <label>Apellido</label>
             <br>
             <input name="apellido" type="text" id="apellido"  value="<?=isset($errores["apellido"])? "": persistir("apellido")?>" placeholder="Apellido" />
             <br>
             <label>Email</label>
             <br>
             <input name="email" type="text" id="email" value="<?=isset($errores["email"])? "": persistir("email")?>" placeholder="Correo electrónico"/>
             <br>
             <label>Contraseña</label>
             <br>
             <input name="password" type="password" id="password" value="<?=isset($errores["password"])? "": persistir("password")?>" placeholder="Contraseña" />
             <br>
             <label>Confirmar contraseña</label>
             <br>
             <input name="repassword" type="password" id="repassword" value="<?=isset($errores["repassword"])? "": persistir("repassword")?>" placeholder="Repita su contraseña" />
             <br>
             <br>
             <input  type="file" name="avatar" value=""/>
             <br>
             <br>
             <button class="btn-buttom btn-primary" type="submit">Enviar</button>
             <button  class="btn-buttom btn-success" type="reset">Restablecer</button>
           </form>
        </article>
    </section>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
