<?php
//si hay un envio del furmulario imprimelo, si no, no hagas nada.
if($_POST){

//Se recibe la informacion del formulario html (metodo-post.php)
    $nombre=$_POST['txtNombre'];
    echo "Hola ".$nombre;
}
?>
<!--Esqueleto html en un archivo php-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo psot</title>
</head>
<body>
, soy el esqueleto de un documento html, en un archivo php
<!--Formulario para enviar la informacion, con el metodo post y un submit-->
    <form action="metodo-post.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br/>
    <input type="submit" value="Enviar">

    </form>
</body>
</html>