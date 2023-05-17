<?php
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$dosis = $_POST['dosis'];
$descr = $_POST['descr'];
$tomas = $_POST['tomas'];
$ppio_activo = $_POST['ppio_activo'];
$forma = $_POST['forma'];
$via = $_POST['via'];
$cnx = mysqli_connect("localhost", "root", "", "trabajofingrado");
$sql = "UPDATE pillbox set nombre='$nombre', dosis='$dosis', descripcion='$descr', tomas_diarias='$tomas', principio_activo='$ppio_activo', forma_farmaceutica='$forma', via_administracion='$via' WHERE id = '$id'";
$rta = mysqli_query($cnx, $sql);
header("Location: busqueda_db.php");
?>