<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>    
        <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

        <link href="css/estilos.css" rel="stylesheet">

        <script type="text/javascript" src="../js/funciones.js"></script>
    </head>
    <header>
        <?php include_once 'header.php';
        ?>
    </header>
    <?php
    include("consulta1.php");

    if (isset($_POST['c_prod1'])) {
        $c_prod1 = $_POST['c_prod1'];
        $detalle_n = detalle_prod($_POST['c_prod1']);
        $n_prod1 = $detalle_n[0];
        $ref_prod1 = $detalle_n[1];
        $precio_prod1 = $detalle_n[2];
        $peso_prod1 = $detalle_n[3];
        $cat_prod1 = $detalle_n[4];
        $stock_prod1 = $detalle_n[5];
        $fecha_prod1 = $detalle_n[6];
    } else {
        $c_prod1 = filter_input(INPUT_POST, 'c_prod1');
        $n_prod1 = filter_input(INPUT_POST, 'n_prod1');
        $ref_prod1 = filter_input(INPUT_POST, 'ref_prod1');
        $precio_prod1 = filter_input(INPUT_POST, 'precio_prod1');
        $peso_prod1 = filter_input(INPUT_POST, 'peso_prod1');
        $cat_prod1 = filter_input(INPUT_POST, 'cat_prod1');
        $stock_prod1 = filter_input(INPUT_POST, 'stock_prod1');
        $fecha_prod1 = filter_input(INPUT_POST, 'fecha_prod1');
    }
    ?>
    <div class="alert alert-info" id="alert" style="display: none;">&nbsp;</div>
    <div class="form1">
        <div class="form2">
            <form method="post" id="edicion">
                <div class="form-group"></div>
                <div class="app-title" id="t_editar">
                    <h2>Editar un producto.</h2>
                </div>

                <div class="form-group">
                    <label for="n_prod1" class="label">Producto a modificar</label>
                    <select id="c_prod1" name="c_prod1" class="form-control" placeholder="Seleccione el nombre del producto a editar" onchange='submit();'>
                        <option></option>
<?php while ($fila_2 = $cons_2->fetch_array()) { ?>

                            <option value="<?php echo $fila_2['id']; ?>" <?php if (isset($_POST['c_prod1'])) {
                            if ($_POST['c_prod1'] == $fila_2['id']) { ?>selected<?php }
                        } ?>><?php echo $fila_2['nombre']; ?></option>   
                        <?php } ?>
                    </select>
                </div>
                <label for="n_prod1" class="label">Nombre del producto</label>
                <input type="text" id="n_prod1" name="n_prod1"  value='<?php echo $n_prod1; ?>' class="form-control form-control-lg" placeholder="Ingrese el nombre del producto" autocomplete='off'>
                <div class="form-group" class="form_i">
                    <label for="ref_prod1" class="label">Referencia del producto</label>
                    <input type="text" id="ref_prod1" name="ref_prod1"  value='<?php echo $ref_prod1; ?>' class="form-control form-control-lg" placeholder="Ingrese la referencia del producto" autocomplete='off'>

                    <label for="precio_prod1" class="label">Precio del producto</label>
                    <input type="number" id="precio_prod1" name="precio_prod1" value='<?php echo $precio_prod1; ?>' class="form-control form-control-lg" placeholder="Ingrese el precio del producto">

                    <label for="peso_prod1" class="label">Peso del producto</label>
                    <input type="number" id="peso_prod1" name="peso_prod1" value='<?php echo $peso_prod1; ?>' class="form-control form-control-lg" placeholder="Ingrese el peso del producto">

                    <label for="cat_prod1" class="label">Categor&iacute;a del producto</label>
                    <select class="form-control" class="label" id="cat_prod1" name="cat_prod1">
                        <?php while ($f_cons1 = $cons_1->fetch_array()) { ?>
                            <option value="<?php echo $f_cons1['id']; ?>" <?php if($cat_prod1== $f_cons1['id']){?>selected <?php }?>><?php echo $f_cons1['nombre_cat']; ?></option>
                        <?php } ?>
                    </select>

                    <label for="stock_prod1" class="label">Stock del producto</label>
                    <input type="number" id="stock_prod1" name="stock_prod1" value='<?php echo $stock_prod1; ?>' class="form-control form-control-lg" placeholder="Ingrese la cantidad del producto">

                    <label for="fecha_prod1" class="label">Fecha de creaci&oacute;n</label>
                    <input type="date" id="fecha_prod1" name="fecha_prod1" value='<?php echo $fecha_prod1; ?>' class="form-control form-control-lg">
                </div>
                <input type="submit" class="btn btn-primary" id="guardar1" value='Guardar'>

            </form>
        </div>
    </div>



</html>
