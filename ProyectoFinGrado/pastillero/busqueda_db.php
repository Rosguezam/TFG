    <?php
    session_start();
    require '..//database.php';
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
    
    }
    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pastillero</title>
        <link rel="stylesheet" href="../assets/css/busqueda.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>


    <body>

    <titulo>
    <div class="contenedor-titulo">
       <h1 class="titulo1">Farma en casa</h1>
    </div>
    <div class="banda-color">
    <a href="../logout.php"><i class="material-icons">exit_to_app</i></a>
    <a href="../home.php"><i class="material-icons">home</i></a>
    <a class='infopasti' href="./infoPastillero.php"> ¿Dudas con el pastillero?, pulse aquí</a>
    
    </div>
  </titulo>


        <center>
            <br>
            <div class="anadirPastilla">
                    <a href="nuevo.php">Añadir Nuevo</a>
               
            </div>
            <br>
            <div class="tablaPastillero">
                    <table border="1" >
                        <tr class="tr1">
                            <td>Nombre</td>
                            <td>Dosis</td>
                            <td>Descripción</td>
                            <td>Tomas diarias</td>
                            <td>Principio activo</td>
                            <td>Forma farmaceutica</td>
                            <td>Via administración</td>
                        </tr>
                        <?php
                            $cnx = mysqli_connect("localhost", "root", "", "trabajofingrado");
                            $sql = "SELECT * FROM pillbox WHERE usuario_id = '$user_id'";
                            $rta = mysqli_query($cnx, $sql);
                            while ($mostrar = mysqli_fetch_row($rta)) {
                        ?>
                            <tr>
                                <td><?php echo $mostrar[2] ?></td>
                                <td><?php echo $mostrar[3] ?></td>
                                <td><?php echo $mostrar[4] ?></td>
                                <td><?php echo $mostrar[5] ?></td>
                                <td><?php echo $mostrar[6] ?></td>
                                <td><?php echo $mostrar[7] ?></td>
                                <td><?php echo $mostrar[8] ?></td>
                                <td>
                                    <a href="editar.php?
                                    id=<?php echo $mostrar[0] ?> &
                                    nombre=<?php echo $mostrar[2] ?> &
                                    dosis=<?php echo $mostrar[3] ?> &
                                    descr=<?php echo $mostrar[4] ?> &
                                    tomas=<?php echo $mostrar[5] ?> &
                                    ppio_activo=<?php echo $mostrar[6] ?> &
                                    forma=<?php echo $mostrar[7] ?> &
                                    via=<?php echo $mostrar[8] ?> &
                                    ">Editar</a>
                                    <a href="delete.php? id=<?php echo $mostrar[0] ?>">Eliminar</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                    </table>
                </form>
            </div>
        </center>


        <footer>
            <p class="authorInfo">Autora :Rosa Guerrero Zambruno<br>Ciclo: Desarrollo de aplicaciones Webs</p>
           
        </footer>
    </body>
</html>