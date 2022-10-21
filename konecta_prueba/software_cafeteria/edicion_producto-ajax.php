<?php

include ("conexion.php");
$c_prod1 = $_POST['c_prod1'];
$n_prod1 = $_POST['n_prod1'];
$ref_prod1 = $_POST['ref_prod1'];
$precio_prod1 = $_POST['precio_prod1'];
$peso_prod1 = $_POST['peso_prod1'];
$cat_prod1 = $_POST['cat_prod1'];
$stock_prod1 = $_POST['stock_prod1'];
$fecha_prod1 = $_POST['fecha_prod1'];

$insert = $bd->query("UPDATE cafeteria.`productos` SET `nombre`='$n_prod1',`referencia`='$ref_prod1',`precio`='$precio_prod1',`peso`='$peso_prod1',"
        . "`categoria`='$cat_prod1',`stock`='$stock_prod1',`fecha_creacion`='$fecha_prod1' WHERE id='$c_prod1'");

echo "Se ha actualizado el registro.";
