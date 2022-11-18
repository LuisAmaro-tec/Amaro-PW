<?php

$servidor = "localhost";
$basedatos = "Mundial";
$usuario = "root";
$password = "";
$port = "3306";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die("No se pudo llegar al localhost");
$consulta = "select * from formulario_jugador";
$registros = mysqli_query($con,$consulta) or die("Problemas en el select");

//Resultado como array asociativo
while ($result=mysqli_fetch_array($registros,MYSQLI_ASSOC)) {
    printf($result['seleccion_nacional'].''.$result['nombre'].''.$result['apellidoP'].''.$result['apellidoM'].''.$result['posicion'].''.$result['num_camisa'].''.$result['faltas'].''.$result['tarjetasA'].''.$result['tarjetasR'].'<br>');
}

?>