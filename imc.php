<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Calculadora de IMC</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label>Peso (kg):</label>
                <input type="number" step="0.01" name="peso" placeholder="Ej: 75.5" required>
            </div>
            <div class="form-group">
                <label>Altura (m):</label>
                <input type="number" step="0.01" name="altura" placeholder="Ej: 1.75" required>
            </div>
            <input type="submit" name="calcular_imc" class="btn btn-success" value="Calcular IMC">
        </form>

        <?php
        if (isset($_POST['calcular_imc'])) {
            $peso = floatval($_POST['peso']);
            $altura = floatval($_POST['altura']);
            if ($altura > 0) {
                $imc = $peso / ($altura * $altura);
                echo "<div class='result-box result-imc'><h3>Resultado IMC: " . number_format($imc, 2) . "</h3></div>";
            } else {
                echo "<div class='result-box result-error'><p>La altura debe ser mayor a 0.</p></div>";
            }
        }
        ?>
        <a href="index.php" class="back-link">← Volver al inicio</a>
    </div>
</body>
</html>