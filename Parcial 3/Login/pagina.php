<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!isset($_SESSION['usuario'])  empty($_SESSION['usuario'])) {
    header("Location: ./Login.html");
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pagina Principal de Aplicacion</h1>
    <button type="button"><?php echo $_SESSION['usuario'];?></button>
</body>
</html>