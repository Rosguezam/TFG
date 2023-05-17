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
    <title>Principio activo-Farma en Casa</title>
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
   
   <img src="imagenes\farmacoA.png" style="max-width: 14vw; float: left; margin-left:2.2vw; margin-top:2.2vw">
       <div class="buscador">
           <table class="elementosBusqueda">
               <tr>
                   <td>
                   <input type="text" id= "buscarpA" placeholder="  Escriba nombre del principio activo" class="search">
                   </td>
                   <td>
                   <button id="botonPrincipioA" class ="boton">Buscar</button>
                   </td>
                   <td>
                    <a href="principioActivo.php"><button id="resetBtn">Borrar búsqueda</button></a>
                    </td>
                 </tr>
           </table>
           </div>
   
</div>


   <p id = 'principioActData'></p>



<script src="javascript/principioActivo.js"></script>
</body>
</html>