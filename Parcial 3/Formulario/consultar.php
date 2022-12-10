<?php
    $id=$_POST['id_jugador'];
    $server= "localhost";
    $db= "Mundial";
    $user= "root";
    $pass= "";
    $port="3306";
    $con = mysqli_connect($server,$user,$pass,$db,$port) or die("no se pudo conectar a la base de datos");
    $query= "select * from formulario_jugador where id_jugador = '$id'";
    $registros= mysqli_query($con,$query) or die("problemas en la consulta");
    $result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result)
?>