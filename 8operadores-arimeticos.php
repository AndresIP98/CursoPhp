<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores arimeticos</title>
</head>
<body>
    <?php
    echo "CALCULADORA BASICA". "<br/>";
    echo "Se calculara inmediatamente la suma, resta, multiplicacion, division y promedio";
    ?>

    <!--Formulario para calcular los valores-->
    <form action="8operadores-arimeticos.php" method="post">
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
#llamado de datos y operaciones
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $multiplicacion=$valorA*$valorB;
    $division=$valorA/$valorB;
    $promedio=($valorA+$valorB)/2;

    echo "Suma: ".$suma."<br/>";
    echo "Resta: ".$resta."<br/>";
    echo "Multiplicacion: ".$multiplicacion."<br/>";
    echo "Division: ".$division."<br/>";
    echo "Promedio: ".$promedio."<br/>";
}

?>
