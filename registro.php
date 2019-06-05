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
          <!--<?php if (isset($errores)):?>
            <ul class="alert alert-danger">
              <?php foreach ($errores as $key => $value) :?>
              <li><?=$value;?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif;?>
-->
        </article>
    </section>
          <section class="row text-center">
          <article class="col-12">
            <h2>Registrate acá</h2>
          <!--Este formulario ya valida con php, pero se reemplazo el nombre de usuario por nombre de la persona y se agrego el campo de apellido. El login se haria por email. Tambien falta ajustar el responsive del mismo (se ve mal en dispositivo movil), falta corregir los errores que muestra debajo de cada campo -->
          <form action="" method="POST" enctype= "multipart/form-data"  >
            <div class="form-group">
             <label>Nombre</label>
             <input class="form-control" name="nombre" type="text" id="nombre"  value="<?=isset($errores["nombre"])? "": persistir("nombre")?>" placeholder="Nombre" />
             <span><?= (isset($errores['nombre'])) ? $errores["nombre"] : "" ?></span>
             </div>

             <!--aca deberia ir el php donde se muestra el error en caso de existir alguno -->
             <div class="form-group">
             <label>Apellido</label>
             <input class="form-control" name="apellido" type="text" id="apellido"  value="<?=isset($errores["apellido"])? "": persistir("apellido")?>" placeholder="Apellido" />
             <span><?= (isset($errores['apellido'])) ? $errores["apellido"] : "" ?></span>
           </div>

           <div class="form-group">
             <label>Email</label>
             <br>
             <input class="form-control" name="email" type="text" id="email" value="<?=isset($errores["email"])? "": persistir("email")?>" placeholder="Correo electrónico"/>
             <span><?= (isset($errores['email'])) ? $errores["email"] : "" ?></span>
           </div>

           <div class="form-group">
             <label>Contraseña</label>
             <input class="form-control" name="password" type="password" id="password" value="<?=isset($errores["password"])? "": persistir("password")?>" placeholder="Contraseña" />
             <span><?= (isset($errores['password'])) ? $errores["password"] : "" ?></span>
           </div>

           <div class="form-group">
             <label>Confirmar contraseña</label>
             <input class="form-control" name="repassword" type="password" id="repassword" value="<?=isset($errores["repassword"])? "": persistir("repassword")?>" placeholder="Repita su contraseña" />
             <span><?= (isset($errores['repassword'])) ? $errores["repassword"] : "" ?></span>
           </div>

          <!--<div class="form-group">
             <input class="form-control" type="file" name="avatar" value=""/>
           </div>-->
           <div class="custom-file">
             <input type="file" name="avatar" class="custom-file-input" value="" />
             <label class="custom-file-label" for="validatedCustomFile" style="text-align: left;">Seleccione un avatar</label>
           <div class="invalid-feedback">Example invalid custom file feedback</div>

           <span><?= (isset($errores['avatar'])) ? $errores["avatar"] : "" ?></span>
           </div>
           <br>
           <br>
           <div class="form-group text-center mb-3 col-md-12">
             <button class= "btn btn-success btn-block btn-rounded z-depth-1" type="submit">Enviar</button>
             <button  class="btn btn-secondary btn-block btn-rounded z-depth-1" type="reset">Restablecer</button>
           </div>
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
