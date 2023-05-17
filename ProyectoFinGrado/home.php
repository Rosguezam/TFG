<?php
  session_start();
  require 'database.php';
  ?>

<!DOCTYPE html>

<html>

    <head>
      <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/home.css">
        <Title>Farma en Casa</Title>
    </head>
    

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
        
        <titulo>
            <div class="contenedor-titulo">
              <h1 class="titulo1">Farma en casa</h1>
            </div>
          <div class="banda-color">
            </div>
        </titulo>

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
             
              
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active d-item">
                <img src="imagenes\imagenSlide1.png" class="d-block w-100 d-img" alt="slider1">
              </div>
              <div class="carousel-item d-item">
                <img src="imagenes\imgenSlide2.png" class="d-block w-100 d-img" alt="slider2">
              </div>
              <div class="carousel-item d-item">
                <img src="imagenes\imagenSlide3.png" class="d-block w-100 d-img" alt=".slider3">
              </div>
              <div class="carousel-item d-item">
                <img src="imagenes\imgenSlide5.png" class="d-block w-100 d-img" alt=".slider5">
              </div>

              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="banda-color">
            </div>


          <div class="iconos">
        
            <img src="imagenes\seccion1.png" >
            <span class='espacio'></span>
            <a href="listado1.php"><img src="imagenes\home22.png"></a>
            <span class='espacio2'></span>
            <a href="principioActivo.php"><img src="imagenes\home32.png"></a>
            <span class='espacio'></span>
            <a href="./pastillero/busqueda_db.php"><img src="imagenes\home42.png"></a>
          </div>
        <footer>
        <a href="logout.php"><img  class='puerta' src="imagenes\puerta.png"></a>
            <p class="authorInfo">Autora :Rosa Guerrero Zambruno<br>Ciclo: Desarrollo de aplicaciones Webs</p>
           
        </footer>
    </body>


</html>