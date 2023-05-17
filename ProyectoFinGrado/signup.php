<?php
    require'database.php';

//Ultimo paso pero lo ponermos aqui arriba, creamos variable 
//global llamada message y le damos un dato vacio que sera llenado segun
//los datos que se le estan mandando y almacenando en la base de datos
$message = '';





//Si los campos que recibimos del metodo post no estan vacios
//puede continuar agregandolo en la base de datos

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        //llamada sql e insercion de los datos
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        //creamos variable para decir que prepare una llamada sql
        $stmt = $conn->prepare($sql);
        //vinculamos los parametros y lo reemplazamos por lo obtenidos en el post
        $stmt->bindParam(':email', $_POST['email']);
        //ciframos las password en la base de datos
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);
        //ya tenemos nuestros datos almacenados

        //comprobamos que se almacenan los datos
        if ($stmt->execute()) {
            $message = 'Ha creado su cuenta correctamente';
        } else {
            $message = 'Ups =( Algo ha fallado';
        }
    }
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrese</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/signup.css">
    <title>Regístrese</title>
</head>
<body>
    <?php require 'partials/header.php' ?>

    



    <div class="container"> 
            <div class="login">
               <div class="container">
                <h1>Regístrate</h1>
                    <?php if(!empty($message)): ?>
                    <p> <?= $message ?></p>
                    <?php endif; ?>
                <span> <a href="login.php">¿Ya tiene cuenta?Acceda desde aquí</a></span>
                <form action="signup.php" method="POST">
                <input name="email" type="text" placeholder="Introduzca su email">
                <input name="password" type="password" placeholder="Introduzca su contraseña">
                <input type="submit" value="Regístrate">
                </form>
                <div class="clearfix"></div>
                </div>
            </div>
                <div class="register">
                <img class ='imgLogin' src="imagenes\manos.png">
                </div>  
     </div>

</body>
</html>




