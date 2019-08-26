<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./../css/bootstrap.css">
        <link rel="stylesheet" href="./../css/principal.css">
        <link rel="stylesheet" href="comunidad.css">
    </head>
    <body>

        <?php
        require_once 'includes/navbar_comunidad.php';
        ?>

        <div style="padding-top:105px;">
        </div>

        <div class="container">
            <div id="perfil-usuario"class="row">
                <div class="col-md-4 col-12">
                    <div id="tarjeta-perfil"class="row shadow-sm">
                        <div id="banner-perfil" class="col-12"></div>
                        <div class="col-12">
                            <div class="row">
                                <div id="imagen-perfil"class="col-3 text-center">
                                    <img src="./../img/perfil_1.jpg" width="70px" alt="imagen" class="rounded-circle" style=" border: 2.5px #ffffff solid">
                                </div>
                                <div id="datos-perfil" class="col-9">
                                    <span class="usuario">Angel Alcudia</span>
                                    <span class="nivel" style="">Nivel 5</span>
                                    <div class="estadisticas">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <span class="puntos" style="">30,00 puntos</span>
                                </div>
                            </div>
                        </div>
                        
                        <!--div class="col-12 text-center" style="">
                            <div class="row">
                                <div class="col">
                                    <p class="" style="
                                       margin-block-start: 0px;
                                       margin-block-end: 0px;
                                       ">Arboles</p>
                                    <p class=""style="
                                       margin-block-start: 0px;
                                       margin-block-end: 0px;
                                       ">5</p>
                                </div>
                                <div class="col">
                                    <p class=""style="
                                       margin-block-start: 0px;
                                       margin-block-end: 0px;
                                       ">Donaciones</p>
                                    <p class=""style="
                                       margin-block-start: 0px;
                                       margin-block-end: 0px;
                                       ">1</p>
                                </div>
                                <div class="col" style="
                                     margin-bottom: 10px">
                                    <p class=""style="
                                       margin-block-start: 0px;
                                       margin-block-end: 0px;
                                       ">Campañas</p>
                                    <p class=""style="
                                       margin-block-start: 0px;
                                       margin-block-end: 0px;
                                       ">1</p>
                                </div>
                            </div>
                        </div-->
                    </div>
                </div>

                <div class="col-md-8 col-12" style="border: solid;">
                    Estadisticas de avance
                    <p>Aqui estaran estadisticas de la persona</p>
                </div>
            </div>
        </div>






        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>