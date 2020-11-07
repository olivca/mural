<?php include_once('../inserts/head.php');?>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="../css/estilo.css">

      <title>PostEdu</title>

  <?php include_once('../inserts/menu.php');?>
    <div id="carouselHome" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHome" data-slide-to="1"></li>
        <li data-target="#carouselHome" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="../imagens/corres.png" class="img-thumbnail mx-auto d-block" alt="Responsive image">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
         <div class="carousel-item">
          <img src="../imagens/poste.jpg" class="img-thumbnail mx-auto d-block" alt="Responsive image">
            <div class="carousel-caption d-none d-md-block">
              <h1 font style="color:blue; font-size:75px; font-display: auto; font-family:cambra; text-shadow: white 40px 40px 40px"><b>Divulgue educação acessível e de qualidade conosco.</b></h1>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselHome" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselHome" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Proximo</span>
      </a>
    </div>
  </body>
    <footer>
        <?php include_once('../inserts/footer.php');?>
    </footer>
</html>
