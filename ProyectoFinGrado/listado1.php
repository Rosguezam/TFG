<?php
  session_start();
  require 'database.php';
  ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Fármaco-Farma en Casa</title>
    <link rel="stylesheet" href="assets/css/listado1.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <titulo>
    <div class="contenedor-titulo">
       <h1 class="titulo1">Farma en casa</h1>
    </div>
    <div class="banda-color">
    <a href="logout.php"><i class="material-icons">exit_to_app</i></a>
    <a href="home.php"><i class="material-icons">home</i></a>
    
    </div>
  </titulo>
   
  <div class="cuadroNaranja">
      <img src="imagenes\farmacoB.png" style="max-width: 14vw; float: left; margin-left:2.2vw; margin-top:2.2vw">
          <div class="buscador">
              <table class="elementosBusqueda">
                  <tr>
                      <td>
                          <input type="text" id= "input" placeholder="  Escriba nombre del fármaco" class="search">
                      </td>
                      <td>
                      <button id="btn">Buscar</button>
                      </td>
                      <td>
                    <a href="listado1.php"><button id="resetBtn">Borrar búsqueda</button></a>
                    </td>
                    </tr>
              </table>
              </div>
</div>


            
<div id = "apiData"></div>

    <script src="javascript\listado1.js"></script>
  
</body>
</html>