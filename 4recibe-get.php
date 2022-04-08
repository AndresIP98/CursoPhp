<?php
//Recibe la info de metodo-get.html y la muestra en url
if($_GET){
    $nombre=$_GET['nombre'];
    echo "Hola ".$nombre;
}
?>