<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Notas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Suma de Notas</h2>
        <form method="POST" action="">
            <div class="form-group"><label>Nota 1:</label><input type="number" step="0.01" name="nota1" required></div>
            <div class="form-group"><label>Nota 2:</label><input type="number" step="0.01" name="nota2" required></div>
            <div class="form-group"><label>Nota 3:</label><input type="number" step="0.01" name="nota3" required></div>
            <input type="submit" name="calcular_notas" class="btn btn-info" value="Calcular Total">
        </form>

        <?php
        if (isset($_POST['calcular_notas'])) {
            $nota1 = floatval($_POST['nota1']);
            $nota2 = floatval($_POST['nota2']);
            $nota3 = floatval($_POST['nota3']);
            $total = $nota1 + $nota2 + $nota3;
            echo "<div class='result-box result-notas'><h3>Total Acumulado: " . number_format($total, 2) . "</h3></div>";
        }
        ?>
        <a href="index.php" class="back-link">← Volver al inicio</a>
    </div>
</body>
</html>