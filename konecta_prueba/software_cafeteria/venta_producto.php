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

    if (isset($_POST['c_prod3'])) {
        $c_prod3 = $_POST['c_prod3'];
    } else {
        $c_prod3 = filter_input(INPUT_POST, 'c_prod3');
    }
    ?>
    <div class="alert alert-info" id="alert" style="display: none;">&nbsp;</div>
    <div class="form1">
        <div class="form2">
            <form method="post" id="venta">
                <div class="form-group"></div>
                <div class="app-title" id="t_editar">
                    <h2>Editar un producto.</h2>
                </div>

                <div class="form-group">
                    <label for="n_prod2" class="label">Producto a modificar</label>
                    <select id="n_prod2" name="n_prod2" class="form-control" placeholder="Seleccione el nombre del producto a vender"'>
                        <option></option>
<?php while ($fila_2 = $cons_2->fetch_array()) { ?>

                            <option value='<?php echo $fila_2['id']; ?>'><?php echo $fila_2['nombre']; ?></option>   
<?php } ?>
                    </select>
                </div>

                <div class="form-group" class="form_i">


                    <label for="cant_v" class="label">Cantidad a vender</label>
                    <input type="number" id="cant_v" name="cant_v" class="form-control form-control-lg" placeholder="Ingrese la cantidad a vender">

                </div>
                <input type="submit" class="btn btn-primary" id="ventab" value='Guardar'>

            </form>
        </div>
    </div>



</html>
