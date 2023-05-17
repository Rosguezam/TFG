<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/editar.css">
    <title>Editar pastillero</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$dosis = $_GET['dosis'];
$descr = $_GET['descr'];
$tomas = $_GET['tomas'];
$ppio_activo = $_GET['ppio_activo'];
$forma = $_GET['forma'];
$via = $_GET['via'];
?>

    <div class="formEditar">
    <form action="edit_db.php" method="post">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
                <td><input type="text" name="id" style="visibility: hidden;"  value="<?=$id?>" id=""></td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" value="<?=$nombre?>" id="" ></td>
            </tr>
            <tr>
                <td>Dosis:</td>
                <td><input type="text" name="dosis" value="<?=$dosis?>" id=""></td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td><input type="text" name="descr" value="<?=$descr?>" id="" ></td>
            </tr>
            <tr>
                <td>Tomas diarias:</td>
                <td><input type="text" name="tomas" value="<?=$tomas?>" id=""></td>
            </tr>
            <tr>
                <td>Principio activo:</td>
                <td><input type="text" name="ppio_activo" value="<?=$ppio_activo?>" id="" ></td>
            </tr>
            <tr>
                <td>Forma farmaceutica:</td>
                <td><input type="text" name="forma" value="<?=$forma?>" id=""></td>
            </tr>
            <tr>
                <td>Vía administración:</td>
                <td><input type="text" name="via" value="<?=$via?>" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Actualizar"></td>
                <td><a href="busqueda_deb.php"><input type="submit" value="Volver"></td></a>
            </tr>
        
        </table>

    </form>

    </div>
</body>
</html>