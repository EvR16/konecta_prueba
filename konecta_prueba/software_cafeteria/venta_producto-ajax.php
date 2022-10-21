<?php

include ("conexion.php");
$n_prod2 = $_POST['n_prod2'];
$cant_v = $_POST['cant_v'];

$cons_3 = $bd->query("SELECT stock FROM cafeteria.`productos` WHERE id='$n_prod2'");
$fila_cons3 = $cons_3->fetch_array();
$cant_stock = $fila_cons3['stock'];

if ($cant_stock == '0') {
    echo "No hay stock del producto seleccionado.";
} elseif ($cant_v > $cant_stock and $cant_stock !== '0') {
    echo "No hay suficiente stock. Actualmente solo hay ", $cant_stock, " unidad(es).";
} else {
    $cant_actualizada = $cant_stock - $cant_v;
    $act = $bd->query("UPDATE cafeteria.`productos` SET `stock`='$cant_actualizada' WHERE id='$n_prod2'");
    $act2 = $bd->query("INSERT INTO cafeteria.`ventas_prod`(`id_prod`,`cant`) VALUES('$n_prod2','$cant_v')");
    echo "<b>Venta realizada.</b>";
}
