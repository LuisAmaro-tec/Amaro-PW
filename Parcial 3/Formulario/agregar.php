<?php
    $id_jugador=$_POST['idJugador'];
    $seleccion_nacional=$_POST['Equipo'];
    $nombre=$_POST['Nombre'];
    $apellidoP=$_POST['ApellidoP'];
    $apellidoM=$_POST['ApellidoM'];
    $posicion=$_POST['Posicion'];
    $num_camisa=$_POST['NumCamisa'];
    $faltas=$_POST['Faltas'];
    $tarjetasA=$_POST['TarjetasA'];
    $tarjetasR=$_POST['TarjetasR'];

    $server= "localhost";
    $db= "Mundial";
    $user= "root";
    $pass= "";
    $port="3306";
    $con = mysqli_connect($server,$user,$pass,$db,$port) or die("no se pudo conectar a la base de datos");
    $query= "insert into formulario_jugador VALUES ('$id_jugador','$seleccion_nacional','$nombre','$apellidoP','$apellidoM','$posicion','$num_camisa','$faltas','$tarjetasA','$tarjetasR') ";
    $registros= mysqli_query($con,$query) or die("problemas en la consulta");
    $result= mysqli_fetch_array($registros,MYSQLI_ASSOC);
    mysqli_close($con);
    echo json_encode($result)

?>