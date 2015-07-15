<?php
require 'inc/common.php';
session_start();
//dd($_SESSION);
?>

<html>
    <head>
        <title>Speed veiculos</title>
        <style>

        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="css/docs.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <style>
            .carousel-inner img{
                margin: auto

            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">Home</a>
            </div>
            <nav id="bs-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../getting-started/"></a>
                    </li>
                    <li>

                    </li>
                    <li>
                        <a href="ofertas.php">Ofertas</a>
                    </li>
                    <li class="active">
                        <a href="_user-form.php"> Cadastrar-se</a>
                    </li>
                    <li>
                        <a href="FaleConosco.php">Fale conosco</a>
                    </li>
                </ul>

            </nav>


        </div>
        <div class="bs-docs-header" id="content" tabindex="-1">
            <div class="container">
                <h1>Speed Veículos</h1>
                <p>A loja com maior número de vendas da região,os melhores preços e as maiores ofertas!</p>
                <div ><div><div id="azcarbon"></div><script>var z = document.createElement("script");
                    z.async = true;
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(z, s);</script></div></div>


                <center>   <input type="text" id="txtBusca" placeholder="Pesquisar"/> </center>
            </div>
        </div>
        <!--<div class="wrapper">-->
        <div class="header">
        </div>
        <div class="container">

            <?php include('header.php'); ?>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Img/chev.jpg" alt="...">
                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    <div class="item">
                        <img src="Img/camaro.jpg" alt="650">

                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>

                    <div class="item">
                        <img src="Img/porsche.jpg" alt="650">

                        <div class="carousel-caption">
                            ...
                        </div>
                    </div>
                    ...
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <center><h1>Tracker 2015</h1></center>
            <CENTER><a href="ofertas.php"><img src="Img/tracker.pg.jpg"  alt="800"></a> </CENTER>
            <br>
            <br>
            <br>
            <center> <h1>Cobalt 2015</h1></center>
            <CENTER> <a href="ofertas.php"><img src="Img/cobalt.pg.jpg" alt="800"></a></CENTER>
            <br>
            <div>

            </div>
            <br>
            <br>

            <CENTER> <img src="Img/hhh.jpg" alt="800"></CENTER>
            <br>
            <br>
            <br>
            <center> <h1> Camaro</h1> </center>
            <CENTER> <img src="Img/2013.jpg" alt="800"></CENTER>
        </div>
        <div class="container">
            <h3>  Senac Informática</h3>
        </div>
    </body>
</html>
