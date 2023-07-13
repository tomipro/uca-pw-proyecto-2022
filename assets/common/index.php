<?php

include('config.php');

$contenido = <<<HTML
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/index.css">
        <link rel="stylesheet" href="../styles/blobs.css">
        <link rel="icon" type="image/x-icon" href="/assets/imgs/misc/favicon.ico">
        <title>Bienvenidos</title>
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar">
            <a href="#" class="logo"></a>
            <a href="/" class="activar-boton">
                <span class="barra"></span>
                <span class="barra"></span>
                <span class="barra"></span>
            </a>
            <div class="links-nav">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#galeria-container">Colecciones</a></li>
                    <li><a href="#about">Quienes somos</a></li>
                    <!-- <li><a href="#">FAQ</a></li> -->
                </ul>
            </div>
        </nav>

        <button class="scrollToTopBtn" onclick="topFunction()" id="myBtn" title="Go to top"><img src="../imgs/icons/arrow-up.svg" alt="" class="iconos"></button>

        <!-- Inicio -->
        <section id="home-container">
            <div class="inner-width">

                <div class="blob">
                    <span class="blob1"></span>
                    <span class="blob2"></span>
                    <span class="blob3"></span>
                    <span class="blob4"></span>
                    <span class="blob5"></span>
                    <span class="blob6"></span>
                    <span class="blob7"></span>
                    <span class="blob8"></span>
                    <span class="blob9"></span>
                </div>
                <div class="content">
                    <h1 class="title" id="titulo">¡Hola!</h1>
                    <img src="../imgs/nft-art/10.jpeg" alt="" class="home-pic">
                    <a href="login.php" class="home-btn">Iniciar sesión/Registro</a>
                </div>
            </div>

        </section>



        <!-- Galeria -->
        <section id="galeria-container">
            <div class="inner-width">
                <h1 class="galeria">Arte Destacada</h1>
                <div class="refresh-btn">
                    <button href="" id="refresh-button">
                        <img src="../imgs/icons/arrow-rotate-right.svg" alt="" class="iconos" style="float: left;"><label for="refresh">Refrescar</label>
                    </button>
                </div>
                <div class="fotos-galeria">
                    <img src="../imgs/nft-art/0.jpeg" alt="" id="gallery0">
                    <img src="../imgs/nft-art/1.jpeg" alt="" id="gallery1">
                    <img src="../imgs/nft-art/2.jpeg" alt="" id="gallery2">
                    <img src="../imgs/nft-art/3.jpeg" alt="" id="gallery3">
                    <img src="../imgs/nft-art/4.jpeg" alt="" id="gallery4">
                    <img src="../imgs/nft-art/5.jpeg" alt="" id="gallery5">
                    <img src="../imgs/nft-art/6.jpeg" alt="" id="gallery6">
                    <img src="../imgs/nft-art/7.jpeg" alt="" id="gallery7">
                    <img src="../imgs/nft-art/8.jpeg" alt="" id="gallery8">
                    <img src="../imgs/nft-art/9.jpeg" alt="" id="gallery9">
                </div>
        </section>

        <!-- About section -->

        <div class="about">
            <div class="Quienes-somos">
                <h1 class="titulo-about" style="text-align: center;">Quienes somos</h1>
            </div>
            <div class="fila">
                <div class="columna">
                    <div class="card">
                        <img src="../imgs/misc/lucas-deb.JPG" alt="lucas" width="100%">
                        <div class="container">
                            <h2>Lucas Debarbieri</h2>
                            <p class="titulo">Integrante</p>
                            <p>Ingenieria Informatica</p>
                            <p>lucasdeb@uca.edu.ar</p>
                        </div>
                    </div>
                </div>
                <div class="columna">
                    <div class="card">
                        <img src="../imgs/misc/tomas-prodan.jpeg" alt="tomas" width="100%">
                        <div class="container">
                            <h2>Tomas Prodan</h2>
                            <p class="titulo">Integrante</p>
                            <p>Ingenieria Informatica</p>
                            <p>tprodan@uca.edu.ar</p>
                        </div>
                    </div>
                </div>
                <div class="columna">
                    <div class="card">
                        <img src="../imgs/misc/Picture1.jpg" alt="joaquin" width="100%">
                        <div class="container">
                            <h2>Joaquin Judez Rivas</h2>
                            <p class="titulo">Integrante</p>
                            <p>Ingenieria Informatica</p>
                            <p>joaquinjudezrivas@uca.edu.ar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../scripts/app.js"></script>
    </body>

    </html>
HTML;

echo $contenido;

?>
