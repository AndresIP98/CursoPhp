<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores logicos</title>
</head>
<body>
    <!--Formulario para calcular los valores-->
    <form action="10operadores-logicos.php" method="post">
    Valor A:
    <input type="text" name="valorA" placeholder="Ingresa numeros" id=""required>
    <br/>
    valor B:
    <input type="text" name="valorB" placeholder="Ingresa numeros" id=""required>
    <br/>
    <input type="submit" value="Calcular">

    </form>

</body>
</html>

<?php
if ($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

if ( ($valorA > $valorB) || ($valorA != $valorB) ) {
    #&& Se tienen que cumplir ambas para imprimir el mensaje
    #|| (alt+124) para que se cumpla cualquiera
    echo "El valor de A es mayor que el valor de B y tambien es diferente";
}    
}

?>