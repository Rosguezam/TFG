<?php
//con esto se conecta a la base de datos
require 'database.php';



session_start();

//para comprobar que los campos no estan vacios
if (!empty($_POST['email']) && !empty($_POST['password'])) {
//aqui vamos a realizar una consulta mediante el objeto conn, select toma los valores de la tabla 
//de datos que se dice que lo tome de la tabla users
$records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
$records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';



  
    //Este ciclo verifica si el usuario es correcto y si es asi lo almacena en una variable de sesion,
    // para eso se necesita lo de arriba session
    if (is_countable($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        $_SESSION['user_id'] = $results['id'];
        //redireccionamos a la cabecera del proyecto
        header("Location: /ProyectoFinGrado");
      } else {
        $message = 'Los datos no coinciden';
      }

}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Acceda a su cuenta</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    
    
</head>
<body>
<?php require 'partials/header.php'?>
    

   

    <div class="container">
            <div class="login">
               <div class="container">
               <h1>Acceda a su cuenta</h1>
                <?php if(!empty($message)): ?>
                <p> <?= $message ?></p>
                <?php endif; ?>
    <span> <a href="signup.php">¿No tiene cuenta?Regístrate</a></span>
<form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Introduzca su email">
      <input name="password" type="password" placeholder="Introduzca su contraseña">
      <input  class ='bAcceda' type="submit" value="Acceda">
    </form>
    <div class="clearfix"></div>                    
               </div>
            </div>
            <div class="register">
            <img class ='imgLogin' src="imagenes\sin título.png">
            </div>  
          </div>

</body>
</html>

