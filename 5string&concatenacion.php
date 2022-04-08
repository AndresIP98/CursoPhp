<!--cuerpo html-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String y concatenacion</title>
</head>
<!--Creamos el formulario-->
<body>
<form action="string&concatenacion.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br/>
    Apellido:
    <input type="text" name="txtApellido" id="">
    <br/>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
//se recibe la informacion del formulario y se muestra
if($_POST){
    $txtNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];
    echo "Hola ".$txtNombre." ".$txtApellido;
}
?>