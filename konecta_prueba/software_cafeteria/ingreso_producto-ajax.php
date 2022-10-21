<?php

include ("conexion.php");
$n_prod = $_POST['n_prod'];
$ref_prod = $_POST['ref_prod'];
$precio_prod = $_POST['precio_prod'];
$peso_prod = $_POST['peso_prod'];
$cat_prod = $_POST['cat_prod'];
$stock_prod = $_POST['stock_prod'];
$fecha_prod = $_POST['fecha_prod'];

$insert = $bd->query("INSERT INTO cafeteria.`productos`(`nombre`,`referencia`,`precio`,`peso`,`categoria`,`stock`,`fecha_creacion`)"
        . "VALUES('$n_prod','$ref_prod','$precio_prod','$peso_prod','$cat_prod','$stock_prod','$fecha_prod')");

echo "Se ha ingresado correctamente.";
