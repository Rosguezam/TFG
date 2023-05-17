<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (is_countable($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Farma en casa</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
    
</head>
<body>
    <?php require 'partials/header.php' ?>


    <div class='cuadroBlanco'>
    <?php if(!empty($user)): ?>
        <br><p> Bienvenido, <?= $user['email']; ?>
      . Ahora podrá disfrutar de la aplicación</p>
      <a href="home.php">Para ello pinche aquí</a>
      <?php else: ?>
    <h1>Por favor acceda a su cuenta o regístrese</h1>
    <a href="login.php">Acceda</a> o 
    <a href="signup.php">Regístrese</a>
    <?php endif; ?>
    </div>
  


</body>
</html>