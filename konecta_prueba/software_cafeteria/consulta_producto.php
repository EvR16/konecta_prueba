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
    <body>
        <header>
            <?php
            include_once("header.php");
            ?>
        </header>

        <?php
        include("consulta1.php");
        ?>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categor&iacute;a</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Fecha de creaci&oacute;n</th>

                </tr>
            </thead>
            <tbody>
<?php
$cons_p2 = $cons_2->num_rows;
if ($cons_p2 > 0) {
    while ($cons_p = $cons_2->fetch_array()) {
        ?>
                        <tr>
                            <td><?php echo $cons_p['nombre']; ?></td>
                            <td><?php echo $cons_p['referencia']; ?></td>
                            <td><?php echo $cons_p['precio']; ?></td>
                            <td><?php echo $cons_p['peso']; ?></td>
                            <td><?php echo n_categoria($cons_p['categoria']); ?></td>
                            <td><?php echo $cons_p['stock']; ?></td>
                            <td><?php echo $cons_p['fecha_creacion']; ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <th colspan="7" style="text-align: center;">No se encuentran resultados</th>
                    </tr>
                <?php } ?>

            </tbody>
        </table>

    </body>
</html>
