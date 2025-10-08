<?php
    $figura = $_POST['figura'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Datos de la figura</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="container">
        <h2>Introduce los datos para el <?php echo ucfirst($figura); ?></h2>

        <form action="resultado.php" method="post">
            <input type="hidden" name="figura" value="<?php echo $figura; ?>">

            <?php
            switch ($figura) {
                case 'triangulo':
                    echo '<label>Base:</label><input type="number" step="any" name="base" required><br>';
                    echo '<label>Altura:</label><input type="number" step="any" name="altura" required><br>';
                    echo '<label>Lado:</label><input type="number" step="any" name="lado" required><br>';
                    break;
                case 'rectangulo':
                    echo '<label>Base:</label><input type="number" step="any" name="base" required><br>';
                    echo '<label>Altura:</label><input type="number" step="any" name="altura" required><br>';
                    break;
                case 'cuadrado':
                    echo '<label>Lado:</label><input type="number" step="any" name="lado" required><br>';
                    break;
                case 'circulo':
                    echo '<label>Radio:</label><input type="number" step="any" name="radio" required><br>';
                    break;
                default:
                    echo '<p>Figura no válida.</p>';
                    exit;
            }
            ?>

            <br>
            <input type="submit" value="Calcular">
        </form>

        <br>
        <a href="index.php">← Volver</a>
    </div>
</body>
</html>
