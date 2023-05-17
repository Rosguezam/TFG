<?php
$id = $_GET['id'];

$cnx = mysqli_connect("localhost", "root", "", "trabajofingrado");
$sql = "DELETE FROM pillbox WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: busqueda_db.php");
?>