<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

if(isset($_COOKIE['ultimaVisita'])){

    printf("Su ultimaVisita fue : %s",$_COOKIE['ultimaVisita']);

    $fechahoy = date('Y/m/d H:i:s');
    setcookie("ultimaVisita",$fechahoy,time()+(7*24*60*60));
}

else{
    printf("No se encontro cookie de ultima visita<br>");

    $fechahoy = date('Y/m/d H:i:s');
    $siguienteSemana = time()+(7*24*60*60);
    $fechaExpira = date('Y/m/d H:i:s', $siguienteSemana)."<br>";

    echo'<br>Fecha de Creacion de Cookie: </b>'.$fechahoy.'<br>';
    echo'<br>Fecha de Vencimiento de Cookie: </b>'.$fechaExpira.'<br>';

    setcookie("ultimaVisita",$fechahoy,time()+(7*24*60*60));
}
?>
    
</body>
</html>

