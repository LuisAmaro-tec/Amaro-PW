<?php

$servidor = "localhost";
$basedatos = "mundial";
$usuario = "root";
$password = "";
$port = "3306";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die("No se pudo llegar al localhost");
$consulta = "select * from formulario_jugador";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

$result = mysqli_fetch_all($registros,MYSQLI_ASSOC);

mysqli_close($con);
echo json_encode($result);

?>