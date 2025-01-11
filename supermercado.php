<style>
        hr.punteo {
            border-top: 1px dashed;
        }
    </style>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Factura Supermercado</title>

    <style>
        /* Estilos CSS para el formulario */
        *{
            background-color: #181A1B;
        }
        p{
            color: white;
        }

        h1 {
            color: white;
            text-align: center;
        }

        .form1 {
            max-width: 500px;
            margin: 0 auto;
            background-color: #2D3032;
        }
        .form1 label {
            display: block;
            margin-bottom: 4px;
            text-align: center;
            font-family: candara;
            background-color: #2D3032;
            color: white;
        }
        .form1 input[type="text"],
        .form1 input[type="email"],
        .form1 input[type="date"],
        .form1 input[type="number"] {
            width: 60%;
            padding: 4px;
            margin-bottom: 5px;
            margin-left: 100px;
            color: white;
        }

        input.sf::-webkit-inner-spin-button,
        input.sf::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input.sf {
            -moz-appearance: textfield;
        }
    
        input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: 42%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .tituloprod{
            font-family: candara;
            margin-left: 38%;
            font-size: 30px;
            color: white;
        }
        .form2 input{
            width: 130px;
        }
        .form2{
            margin-left: 4%;
        }
        .tablafac th{
            width: 140px;
        }
        .tablafac td{
            text-align: center;
        }
        .tablafac{
            color:white;
        }

        .tabla1{
            color: white;
        }
        .tabla1 input[type="text"],
        .tabla1 input[type="email"],
        .tabla1 input[type="date"],
        .tabla1 input[type="number"] {
            color: white;
        }
    </style>

</head>
<body>
    <h1>SUPERMERCADO D&A</h1>
    <form class="form1" method="post" action=""><br>
        <label>Número de factura:</label>
        <input type="text" name="numero_factura" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required><br><br>

        <label>Fecha de venta:</label>
        <input type="date" name="fecha_venta" required><br><br>

        <label>Nombre del Cliente:</label>
        <input type="text" name="nombre_cliente" required><br><br>

        <label>Cédula:</label>
        <input type="text" name="cedula" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required><br><br>

        <label>Dirección:</label>
        <input type="text" name="direccion" required><br><br>

        <label>Teléfono:</label>
        <input type="text" name="telefono" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required><br><br>

        <label>Correo electrónico:</label>
        <input type="email" name="correo" required><br><br>

        <label>Cantidad de productos a registrar:</label>
        <input type="number" name="cantidad_productos" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required><br><br>

        <input type="submit" value="Generar" name="generar"><br><br>
    </form>

    <?php
    if ($_SERVER && isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['generar'])) {
            // Procesar el formulario de generación
            $cantidad_productos = isset($_POST['cantidad_productos']) ? $_POST['cantidad_productos'] : 0;
            ?>

            <br><br><form class="form2" method="post" action="">
                <input type="hidden" name="numero_factura" value="<?php echo isset($_POST['numero_factura']) ? $_POST['numero_factura'] : ''; ?>">
                <input type="hidden" name="fecha_venta" value="<?php echo isset($_POST['fecha_venta']) ? $_POST['fecha_venta'] : ''; ?>">
                <input type="hidden" name="nombre_cliente" value="<?php echo isset($_POST['nombre_cliente']) ? $_POST['nombre_cliente'] : ''; ?>">
                <input type="hidden" name="cedula" value="<?php echo isset($_POST['cedula']) ? $_POST['cedula'] : ''; ?>">
                <input type="hidden" name="direccion" value="<?php echo isset($_POST['direccion']) ? $_POST['direccion'] : ''; ?>">
                <input type="hidden" name="telefono" value="<?php echo isset($_POST['telefono']) ? $_POST['telefono'] : ''; ?>">
                <input type="hidden" name="correo" value="<?php echo isset($_POST['correo']) ? $_POST['correo'] : ''; ?>">

                <label class="tituloprod">Productos a registrar:</label><br>
                <input type="hidden" name="cantidad_productos" value="<?php echo $cantidad_productos; ?>">
                <br>

                <table class="tabla1" border="1">
                    <tr>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>CANTIDAD</th>
                        <th>VR. UNIT</th>
                        <th>IVA</th>
                        <th>VR IVA (%)</th>
                        <th>DESCUENTO</th>
                        <th>VR DESCUENTO(%)</th>
                        <th>VR. NETO</th>
                    </tr>

                    <?php
                    for ($i = 1; $i <= $cantidad_productos; $i++) {
                        echo '<tr>';
                        echo '<td><input type="text" name="codigo[]" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required></td>';
                        echo '<td><input type="text" name="nombre[]" required></td>';
                        echo '<td><input type="number" name="cantidad[]" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required></td>';
                        echo '<td><input type="number" name="valor_unitario[]"   class="sf" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required></td>';
                        echo '<td><input type="text" name="tiene_iva[]" placeholder="S/N" required></td>';
                        echo '<td><input type="number" name="valor_iva[]" onkeypress="return event.charCode >= 48 && event.charCode <= 57" class="sf"></td>';
                        echo '<td><input type="text" name="tiene_descuento[]" placeholder="S/N" required></td>';
                        echo '<td><input type="number" name="valor_descuento[]"  onkeypress="return event.charCode >= 48 && event.charCode <= 57"class="sf"></td>';
                        echo '<td><input type="text" name="valor_neto[]" readonly></td>';
                        echo '</tr>';
                    }
                    ?>
                </table>

                <br>
                <input type="submit" value="Calcular" name="calcular">
            </form>

        <?php
        } elseif (isset($_POST['calcular'])) {
            // Obtiene los datos del formulario
            $numero_factura = isset($_POST['numero_factura']) ? $_POST['numero_factura'] : '';
            $fecha_venta = isset($_POST['fecha_venta']) ? $_POST['fecha_venta'] : '';
            $nombre_cliente = isset($_POST['nombre_cliente']) ? $_POST['nombre_cliente'] : '';
            $cedula = isset($_POST['cedula']) ? $_POST['cedula'] : '';
            $direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
            $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
            $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
            $cantidad_productos = isset($_POST['cantidad_productos']) ? $_POST['cantidad_productos'] : 0;
            $codigos = $_POST['codigo'];
            $nombres = $_POST['nombre'];
            $cantidades = $_POST['cantidad'];
            $valores_unitarios = $_POST['valor_unitario'];
            $tiene_iva = $_POST['tiene_iva'];
            $valores_iva = $_POST['valor_iva'];
            $tiene_descuento = $_POST['tiene_descuento'];
            $valores_descuento = $_POST['valor_descuento'];
            $valores_neto = $_POST['valor_neto'];

            // Inicializa los totales
            $total_productos = 0;
            $total_iva = 0;
            $total_descuentos = 0;
            $total_neto = 0;

            // Inicializa los valores para encontrar el producto de mayor y menor valor
            $max_valor_unitario = 0;
            $min_valor_unitario = PHP_INT_MAX;
            $producto_max_valor = '';
            $producto_min_valor = '';
            $iva_producto = [];
            $descuento = [];
             //  Itera sobre los datos de los productos
            for ($i = 0; $i < $cantidad_productos; $i++) {
                //  Calcula el valor neto de cada producto
                $valor_neto = intval($cantidades[$i]) * floatval($valores_unitarios[$i]);
                $iva_producto[$i] = 0;
                $descuento[$i] = 0;

                // Considerar IVA
                $tiene_iva[$i] = strtoupper($tiene_iva[$i]);
                if ($tiene_iva[$i] === 'S' || $tiene_iva[$i] === 's') {
                    $valores_iva[$i] = floatval($valores_iva[$i]);
                    if ($valores_iva[$i] < 0 || $valores_iva[$i] > 19) {
                        // Valida que el porcentaje de IVA esté dentro del rango permitido
                        $valores_iva[$i] = 0; 
                    }
                    $iva_producto[$i] = $valor_neto * ($valores_iva[$i] / 100);
                } else {
                    $valores_iva[$i] = 0;
                }

                // Considerar descuento
                $tiene_descuento[$i] = strtoupper($tiene_descuento[$i]);
                if ($tiene_descuento[$i] === 'S' || $tiene_descuento[$i] === 's') {
                    $valores_descuento[$i] = floatval($valores_descuento[$i]);
                    if ($valores_descuento[$i] < 0 || $valores_descuento[$i] > 90) {
                        // Valida que el porcentaje de descuento esté dentro del rango permitido
                        $valores_descuento[$i] = 0; 
                    }
                    $descuento[$i] = $valor_neto * ($valores_descuento[$i] / 100);
                } else {
                    $valores_descuento[$i] = 0;
                }

                //  Acumula los totales
                $total_productos += $cantidades[$i];
                $total_iva += $iva_producto[$i];
                $total_descuentos += $descuento[$i];
                $total_neto += $valor_neto;

                // Encontra el producto de mayor y menor valor
                if ($valores_unitarios[$i] > $max_valor_unitario) {
                    $max_valor_unitario = $valores_unitarios[$i];
                    $producto_max_valor = $nombres[$i];
                }
                if ($valores_unitarios[$i] < $min_valor_unitario) {
                    $min_valor_unitario = $valores_unitarios[$i];
                    $producto_min_valor = $nombres[$i];
                }

                // Actualiza el valor neto en el array para imprimirlo en la tabla
                $valores_neto[$i] = $valor_neto - $descuento[$i] + $iva_producto[$i];

            }

            echo '<br><br><br><br>';
            echo '<hr>'; // Línea divisora
            echo '<hr>'; 
            echo '<br>';
            echo '<h2 style="margin-left: 40%; margin-right: 20px;color:white;">SUPERMERCADO D&A</h2>';
            echo '<br>';
            echo '<p> <span style="margin-left: 10%;margin-right: 2%;">Numero de factura:</span>' .$numero_factura . '<span style="margin-left: 637px;"> <span style="margin-right: 30px;">Fecha: </span>' . $fecha_venta . '</span></p>';
            echo '<p> <span style="margin-left: 10%;margin-right: 7%;">Nombre: </span>' .$nombre_cliente . '</p>';
            echo '<p> <span style="margin-left: 10%;margin-right: 6%;">Dirección: </span>' . $direccion . '<span style="margin-left: 510px;"><span style="margin-right: 30px;">Cédula: </span>' . $cedula . '<span style="margin-left: 150px;"><span style="margin-right: 30px;">Teléfono: </span>' . $telefono . '</span></span></p>';
            echo '<br>';
            echo '<hr class = "punteo">'; 
            echo '<hr class = "punteo">';

            echo '<h4 style="margin-left: 10%;color:white;font-size:23px;">Detalle de productos:</h4>';
            echo '<table class="tablafac" border="0" cellspacing="10">';
            echo '<tr>';
            echo '<th>CODIGO</th>';
            echo '<th>NOMBRE</th>';
            echo '<th>CANTIDAD</th>';
            echo '<th>VR. UNIT</th>';
            echo '<th>IVA</th>';
            echo '<th>VR IVA</th>';
            echo '<th>DESCUENTO</th>';
            echo '<th>VR DESCUENTO</th>';
            echo '<th>VR. NETO</th>';
            echo '</tr>';

            // Muestra datos de productos
            for ($i = 0; $i < $cantidad_productos; $i++) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($codigos[$i]) . '</td>';
                echo '<td>' . htmlspecialchars($nombres[$i]) . '</td>';
                echo '<td>' . htmlspecialchars($cantidades[$i]) . '</td>';
                echo '<td>'. "$" . htmlspecialchars($valores_unitarios[$i]) . '</td>';
                echo '<td>' . htmlspecialchars($valores_iva[$i]) . "%" .'</td>';
                echo '<td>'. "$" . htmlspecialchars($iva_producto[$i]) . '</td>';
                echo '<td>' . htmlspecialchars($valores_descuento[$i]) . "%" .'</td>';
                echo '<td>'. "$" . htmlspecialchars($descuento[$i]) . '</td>';
                echo '<td>'. "$" . htmlspecialchars($valores_neto[$i]) . '</td>';
                echo '</tr>';
            }
                
            // Fila de totales
            echo '<tr>';
            echo '<td colspan="2"><b>Totales:</b></td>';
            echo '<td>' . array_sum($cantidades) . '</td>';
            echo '<td></td>'; 
            echo '<td colspan="1">IVA</td>';
            echo '<td>'. "$" . $total_iva . '</td>';
            echo '<td colspan="1">DESCUENTO</td>';
            echo '<td>' . "$" . $total_descuentos . '</td>';
            echo '<td>' . "$". ($total_neto - $total_descuentos + $total_iva) . '</td>';
            echo '</tr>';

            echo '</table>';
            echo '<hr class = "punteo">';
            echo '<hr class = "punteo">';

            if ($total_productos > 0) {
                echo '<p>Valor promedio de los productos vendidos: $' . intval($total_neto / $total_productos) . '</p>';
            } else {
                echo '<p>Valor promedio de los productos vendidos: No se puede calcular (división por cero)</p>';
            }

            echo '<p>Producto de mayor valor: ' . $producto_max_valor . '</p>';
            echo '<p>Producto de menor valor: ' . $producto_min_valor . '</p>';
            echo '<hr>';
            echo '<hr>';
        }
    }
    ?>

</body>
</html>