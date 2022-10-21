<!DOCTYPE html>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">  
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>    
        <script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js" type="text/javascript"></script>

        <link href="css/estilos.css" rel="stylesheet">

        <script type="text/javascript" src="../js/funciones.js"></script>
    </head>
    <header>
        <?php
        include_once("header.php");
        ?>
    </header>

    <?php
    include("consulta1.php");
    ?>
    <div class="alert alert-success" id="alert" style="display: none;">&nbsp;</div>
    <div class="form1">
        <div class="form2">
            <form method="post" id="registro">
                <div class="app-title">
                    <h2>Ingreso de producto.</h2>
                </div>
                <div class="form-group">
                    <label for="n_prod" class="label">Nombre del producto</label>
                    <input type="text" id="n_prod" name="n_prod" class="form-control form-control-lg" placeholder="Ingrese el nombre del producto" autocomplete='off'>
                </div>
                <div class="form-group">
                    <label for="ref_prod" class="label">Referencia del producto</label>
                    <input type="text" id="ref_prod" name="ref_prod" class="form-control form-control-lg" placeholder="Ingrese la referencia del producto" autocomplete='off'>
                </div>
                <div class="form-group">
                    <label for="ref_prod" class="label">Precio del producto</label>
                    <input type="number" id="precio_prod" name="precio_prod" class="form-control form-control-lg" placeholder="Ingrese el precio del producto">
                </div>
                <div class="form-group">
                    <label for="peso_prod" class="label">Peso del producto</label>
                    <input type="number" id="peso_prod" name="peso_prod" class="form-control form-control-lg" placeholder="Ingrese el peso del producto">
                </div>
                <div class="form-group">
                    <label for="cat_prod" class="label">Categor&iacute;a del producto</label>
                    <select class="form-control" class="label" id="cat_prod" name="cat_prod">
                        <?php while ($f_cons1 = $cons_1->fetch_array()) { ?>
                            <option value="<?php echo $f_cons1['id']; ?>"><?php echo $f_cons1['nombre_cat']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="stock_prod" class="label">Stock del producto</label>
                    <input type="number" id="stock_prod" name="stock_prod" class="form-control form-control-lg" placeholder="Ingrese la cantidad del producto">
                </div>
                <div class="form-group">
                    <label for="ref_prod" class="label">Fecha de creaci&oacute;n</label>
                    <input type="date" id="fecha_prod" name="fecha_prod" class="form-control form-control-lg" value="<?php echo $fechaActual; ?>">
                </div>
                <input type="submit" class="btn btn-primary" id="guardar">

            </form>
        </div>
    </div>


</html>
