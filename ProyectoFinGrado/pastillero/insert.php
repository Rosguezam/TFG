<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {

}


$nombre = $_POST['nombre'];
$dosis = $_POST['dosis'];
$descr = $_POST['descr'];
$tomas = $_POST['tomas'];
$ppio_activo = $_POST['ppio_activo'];
$forma = $_POST['forma'];
$via = $_POST['via'];
$cnx = mysqli_connect("localhost", "root", "", "trabajofingrado");
$sql = "INSERT INTO pillbox(usuario_id, nombre, dosis, descripcion, tomas_diarias, principio_activo, forma_farmaceutica, via_administracion) VALUES('$user_id', '$nombre', '$dosis', '$descr', '$tomas', '$ppio_activo', '$forma', '$via')";
$rta = mysqli_query($cnx, $sql);
header("Location: busqueda_db.php");
?>