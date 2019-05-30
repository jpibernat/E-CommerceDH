<?php
  if($_POST){
    $errores = validar($_POST);
    if($errores == 0){
      $usuario = buscarPorMail($_POST["email"]);
      if($usuario == null){
        $errores["email"]= "Email y/o contraseña invalidos";
      }
      else {
        if(password_verify($_POST["password"],$usuario["password"])==false){
          $errores["password"]="Email y/o contraseña invalidos";
        }
        else {
          seteoUsuario($usuario,$_POST["recordar"]);
          if (validarAcceso()){
            header("location: perfil.php");
            exit;
          }
          else {
            header("location: ingreso.php");
            exit;
          }
        }
      }
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
  <article class="ingreso">
    <h1>Ingreso</h1>
<!--Este formulario se debe reemplazar por otro como el del ejemplo de la clase, pero se debe conservar el ingreso por email y no por nombre de usuario -->
    <form>
    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresá tu email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recueeerdame ♫</label>
  </div>
  <button type="submit" class="btn btn-primary">mUKIaTe</button>
  <p><a href="mailto:recupero@ferswimwear.com.ar">Olvidé mi contraseña</a>
  </p>
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
