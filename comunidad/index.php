<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Reforest</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../css/bootstrap.css">
        <link rel="stylesheet" href="./../css/principal.css">

        <meta name="description" content="Reforest es una asociación sin fines de lucro que proporciona un medio masivo a la comunidad para que se integre en ayudar al medio ambiente reforestando diversas zonas del estado.">
        <meta name="keywords" content="Reforest, reforestacion,campañas,comunidad,donaciones">
        <meta name="author" content="">


    </head>
    <body>

        <?php
        require_once './includes/navbar_comunidad.php';
        ?>

        <br>
        <!--Slide-->
        <div class="container-fluid">
            <div id="control-principal" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./../img/arboles-1.jpg" class="d-block w-100" alt="reforest-baner">
                        <div class="carousel-caption d-none d-md-block align-items-center-">
                            <h1>REFORESTA CON NOSOTROS</h1>
                            <h2>¿QUIÉNES SOMOS?</h2>
                            <p>Reforest es una asociación sin fines de lucro que proporciona un medio masivo a la comunidad para que se integre en ayudar al medio ambiente reforestando diversas zonas del estado.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./../img/arboles-2.jpg" class="d-block w-100" alt="reforest-baner">
                    </div>
                    <div class="carousel-item">
                        <img src="./../img/arboles-3.jpg" class="d-block w-100" alt="reforest-baner">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#control-principal" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#control-principal" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!--Fin Slide-->

        <br>
        <h2 class="text-center">Noticias</h2>
        <br>

        <!--Noticias-->
        <div class="container ">
            <div id="control-noticas" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./../img/noticia/noticia-1.jpg" class="d-block w-100" alt="reforest-baner">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./../img/noticia/noticia-2.jpg" class="d-block w-100" alt="reforest-baner">
                    </div>
                    <div class="carousel-item">
                        <img src="./../img/noticia/noticia-3.jpg" class="d-block w-100" alt="reforest-baner">
                    </div>
                </div>

                <a class="carousel-control-prev" href="#control-noticas" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#control-noticas" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div><!--Fin noticias-->



        <div class="container">
            <br>
            <h2 class="text-center">¿Como funciona?</h2>
            <p>
                Por medio de la comunidad formada por la asociacion REFOREST, en la cual puedes participar de distintas formas por medio de nuestro sitio web, apoyamos a reforestar el medio ambiente de la comunidad de Chihuahua por medio de campañas o donaciones.
            </p>
            <br>
            <br>
            <h2 class="text-center">Nuestos socios</h2>
            <p>
                Reforest ya trabaja con diversos socios. Estamos orgullosos de contar con numerosos socios integrados en nuestra plataforma con el fin de aportar mucho al medio ambiente.Conozca, a continuación, solo algunos de los socios con los que trabajamos actualmente:
            </p>
        </div><!--Fin Container-->



        <?php
        require_once './includes/footer_comunidad.php';
        ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
