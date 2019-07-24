<?php  ?>
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
    <div class="bd-example">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg-1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bg-2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bg-3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      <!--<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/bg-1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>#1#</h5>
          <p>Primer ejemplo.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg-2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>#2#</h5>
          <p>Segundo ejemplo.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bg-3.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>#3#</h5>
          <p>Tercer ejemplo.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>-->
</div>
<div class="main">
<section>
  <article>
    <p>Articulos Destacados</p>
  </article>
<section class="articulos">
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 1</p>
    <p class="precio">$$$</p>
  </article>
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 2</p>
    <p class="precio">$$$</p>
  </article>
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 3</p>
    <p class="precio">$$$</p>
  </article>
  <article class="destacado">
    <img src="img/Originales/articulo1.jpg" alt="">
    <p class="descripcion">Articulo 4</p>
    <p class="precio">$$$</p>
  </article>
</section>
</section>
</div>
</div>

<!-- whatsapp -->
<div class="btn-whatsapp">
<a href="whatsapp://send?text= http://localhost/E-CommerceDH-master/" data-action="share/whatsapp/share"><img border="0" src="avatares/whatsapp33.jpg" width="50px" height="50px"></a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- <script>$(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll < 30){
            $('.fixed-top').css('background', 'transparent');
            } else{
            $('.fixed-top').css('background', 'rgba(250, 229, 211, 0.9)');
            }
    });</script> -->
  </body>
  <!-- Footer -->
  <footer>
  <div class="container">
    <div class="row">
        <div class="col-xs-5 col-md-5">
            <h5 class="text-muted lead">CONTACTO:</h5>
            <h5 class="text-muted">
            Evergreen Street<br>
            Springfield, EEUU<br>
            (011) 4356-6645.<br>
          </h5>
        </div>
        <div class="col-xs-12 col-md-6">
        <div class="pull-right">
        <h6 class="text-muted lead">EN LAS REDES
              <div class="redes-footer">
                  <a href="https://www.facebook.com/"><img src="avatares/face_logo.png" width="30" alt=""></a>
                  <a href="https://twitter.com/"><img src= "avatares/twitter_logo_azul.jpg" width="30" alt=""></a>
                  <a href="https://www.instagram.com/"><img src="avatares/instagram_logo.jpg" width="48" alt=""></a></h6>
              </div>
        </div>

    </div>
    <center><div class="row"> <p class="text-muted small text-right">Mukineros.com @2019. | Todos los derechos reservados. |</p></div></center>
  </div>
</div>
</footer>
</html>
