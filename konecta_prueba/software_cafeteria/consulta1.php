<?php

include("conexion.php");

date_default_timezone_set('America/Bogota');

$cons_1 = $bd->query("SELECT * FROM cafeteria.categoria_prod ORDER BY nombre_cat");

$fechaActual = date('Y-m-d');

$cons_2 = $bd->query("SELECT * FROM cafeteria.productos ORDER BY nombre");

function detalle_prod($id) {
    include("conexion.php");
    $cons_p = $bd->query("SELECT * FROM cafeteria.productos WHERE id='$id'");
    $fila_p = $cons_p->fetch_array();
    $d_prod[0] = $fila_p['nombre'];
    $d_prod[1] = $fila_p['referencia'];
    $d_prod[2] = $fila_p['precio'];
    $d_prod[3] = $fila_p['peso'];
    $d_prod[4] = $fila_p['categoria'];
    $d_prod[5] = $fila_p['stock'];
    $d_prod[6] = $fila_p['fecha_creacion'];
    return $d_prod;
}

function n_categoria($id_c) {
    include("conexion.php");
    $cons_c = $bd->query("SELECT nombre_cat FROM cafeteria.categoria_prod WHERE id='$id_c'");
    $n_r=$cons_c->num_rows;
    if ($n_r>0){
    $fila_c = $cons_c->fetch_array();
    $n_cat = $fila_c['nombre_cat'];
    return $n_cat;
    }
}
