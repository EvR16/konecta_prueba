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
    if (isset($_POST['c_prod3'])) {
        $c_prod3 = $_POST['c_prod3'];
        $detalle_n = detalle_prod($_POST['c_prod3']);
        $n_prod3 = $detalle_n[0];
        $ref_prod3 = $detalle_n[1];
        $precio_prod3 = $detalle_n[2];
        $peso_prod3 = $detalle_n[3];
        $cat_prod3 = $detalle_n[4];
        $stock_prod3 = $detalle_n[5];
        $fecha_prod3 = $detalle_n[6];
    } else {
        $c_prod3 = filter_input(INPUT_POST, 'c_prod3');
        $n_prod3 = filter_input(INPUT_POST, 'n_prod3');
        $ref_prod3 = filter_input(INPUT_POST, 'ref_prod3');
        $precio_prod3 = filter_input(INPUT_POST, 'precio_prod3');
        $peso_prod3 = filter_input(INPUT_POST, 'peso_prod3');
        $cat_prod3 = filter_input(INPUT_POST, 'cat_prod3');
        $stock_prod3 = filter_input(INPUT_POST, 'stock_prod3');
        $fecha_prod3 = filter_input(INPUT_POST, 'fecha_prod3');
    }
    ?>
    <div class="alert alert-danger" id="alert" style="display: none;">&nbsp;</div>
    <div class="form1">
        <div class="form2">
            <form method="post" id="eliminar">
                <div class="app-title">
                    <h2>Eliminar producto.</h2>
                </div>
                <div class="form-group">
                    <p>A continuaci&oacute;n encontrar&aacute la informaci&oacute;n del producto a eliminar. Una vez d&eacute; clic en el bot&oacute;n
                        de "Eliminar", se eliminar&aacute; y no podr&aacute; revertir la acci&oacute;n.</p>
                    <label for="n_prod1" class="label">Producto a eliminar</label>
                    <select id="c_prod3" name="c_prod3" class="form-control" placeholder="Seleccione el nombre del producto a eliminar" onchange='submit();'>
                        <option></option>
<?php while ($fila_2 = $cons_2->fetch_array()) { ?>

                            <option value="<?php echo $fila_2['id']; ?>" <?php if (isset($_POST['c_prod3'])) {
        if ($_POST['c_prod3'] == $fila_2['id']) { ?>selected<?php }
                } ?>><?php echo $fila_2['nombre']; ?></option>   
                        <?php } ?>
                    </select>
                </div><br>
                <table class="table table-striped table-hover"> 
                    <tbody>   
                        <tr>
                            <th scope="col">Nombre</th><td><?php echo $n_prod3; ?></td>
                        </tr><tr>
                            <th scope="col">Referencia</th><td><?php echo $ref_prod3; ?></td>
                        </tr><tr>
                            <th scope="col">Precio</th><td><?php echo $precio_prod3; ?></td>
                        </tr><tr>
                            <th scope="col">Peso</th><td><?php echo $peso_prod3; ?></td>
                        </tr><tr>
                            <th scope="col">Categor&iacute;a</th><td><?php echo n_categoria($cat_prod3); ?></td>
                        </tr><tr>
                            <th scope="col">Stock</th><td><?php echo $stock_prod3; ?></td>
                        </tr><tr>
                            <th scope="col">Fecha de creaci&oacute;n</th><td><?php echo $fecha_prod3; ?></td>



                    </tbody>
                </table>
                <input type="submit" class="btn btn-danger" id="eliminab" value='Eliminar'>
            </form>
        </div>
    </div>


</html>
