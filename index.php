<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">


  <link rel="stylesheet" type="text/css" href="../css/estilo.css">

  <title>PostEdu</title>

</head>
<body>
    <!--Menu principal-->
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #504456">
        <a class="navbar-brand" href="./index.php">
            <img src="./imagens/logo.png" id= "logo" width="50" class="img-thumbnail rounded"  alt="Responsive image" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./index.php">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./php/eventos.php">Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./php/cadastro.php">Cadastre-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./php/cadastroevento.php">Cadastre seu evento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contate-nos</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="./php/telaLogin.php">Login</a>
                </li>
            </ul>

            
                
            
             
        </div>
    </nav>
    <!--Fim do Menu Principal-->

    <div id="carouselHome" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
        <li data-target="#carouselHome" data-slide-to="1"></li>
        <li data-target="#carouselHome" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="./imagens/corres.png" class="img-thumbnail mx-auto d-block" alt="Responsive image">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
         <div class="carousel-item">
          <img src="./imagens/poste.jpg" class="img-thumbnail mx-auto d-block" alt="Responsive image">
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
<!-- Inicio do Footer -->
  <footer class="page-footer font-small text-white-50 bg-dark">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-2" style="background-color: #504456">PostEduc © 2020 - Todos os direitos reservados</div>
        <!-- Copyright -->
    </footer>
    <!-- Fim do Footer -->
</body>
</html> 
