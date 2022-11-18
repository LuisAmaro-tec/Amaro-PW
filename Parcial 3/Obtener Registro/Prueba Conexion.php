<?php

$servidor = "localhost";
$basedatos = "Mundial";
$usuario = "root";
$password =" ";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo llegar al localhost");
$consulta = "select * from formulario_jugador";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

//Resultado como array asociativo
while ($result=mysqli_fetch_array($registros,MSQLI_ASSOC)) {
    printf($result['idJugador'].''.['nombre'].'<br>');
}

?>