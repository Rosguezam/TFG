<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Incluir nuevo elemento </title>
    <link rel="stylesheet" href="../assets/css/anadir.css">
</head>
<body>
    <div class="formAnadir">
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>Ingresar Datos:</td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" id="" ></td>
            </tr>
            <tr>
                <td>Dosis:</td>
                <td><input type="text" name="dosis" id=""></td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td><input type="text" name="descr" id="" ></td>
            </tr>
            <tr>
                <td>Tomas diarias:</td>
                <td><input type="text" name="tomas" id=""></td>
            </tr>
            <tr>
                <td>Principio activo:</td>
                <td><input type="text" name="ppio_activo" id="" ></td>
            </tr>
            <tr>
                <td>Forma farmaceutica:</td>
                <td><input type="text" name="forma" id=""></td>
            </tr>
            <tr>
                <td>Vía administración:</td>
                <td><input type="text" name="via" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Guardar"></td>
                
            </tr>
        </table>

    </form>

    </div>
</body>
</html>