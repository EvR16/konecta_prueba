<?php

include ("conexion.php");
$c_prod3 = $_POST['c_prod3'];

$insert = $bd->query("DELETE FROM cafeteria.`productos` WHERE id='$c_prod3'");

echo "Se ha eliminado el producto.";
