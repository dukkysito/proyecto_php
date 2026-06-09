<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Divisas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Conversión de Moneda</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label>Cantidad de dinero:</label>
                <input type="number" step="0.01" name="cantidad" required>
            </div>
            <div class="form-group">
                <label>Tasa de cambio (X):</label>
                <input type="number" step="0.0001" name="tasa" required>
            </div>
            <input type="submit" name="calcular_moneda" class="btn btn-warning" value="Calcular Conversión">
        </form>

        <?php
        if (isset($_POST['calcular_moneda'])) {
            $cantidad = floatval($_POST['cantidad']);
            $tasa = floatval($_POST['tasa']);
            $total = $cantidad * $tasa;
            echo "<div class='result-box result-moneda'><h3>Valor Total: " . number_format($total, 2) . "</h3></div>";
        }
        ?>
        <a href="index.php" class="back-link">← Volver al inicio</a>
    </div>
</body>
</html>