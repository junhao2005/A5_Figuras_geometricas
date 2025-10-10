<?php
    $figura = $_POST['figura'] ?? $_GET['figura'] ?? null;

    if (!$figura) {
        echo "<p>Error: no se ha seleccionado ninguna figura.</p>";
        echo '<a href="index.php">Volver</a>';
        exit;
    }
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
        <input type="hidden" name="figura" value="<?php echo htmlspecialchars($figura); ?>">

        <?php
        switch ($figura) {
            case 'triangulo':
                echo '<input type="number" step="any" name="lado1" placeholder="Lado 1" required><br>';
                echo '<input type="number" step="any" name="lado2" placeholder="Lado 2" required><br>';
                echo '<input type="number" step="any" name="lado3" placeholder="Lado 3" required><br>';
                break;
            case 'rectangulo':
                echo '<input type="number" step="any" name="lado1" placeholder="Lado 1" required><br>';
                echo '<input type="number" step="any" name="lado2" placeholder="Lado 2" required><br>';
                break;
            case 'cuadrado':
                echo '<input type="number" step="any" name="lado1" placeholder="Lado" required><br>';
                break;
            case 'circulo':
                echo '<input type="number" step="any" name="lado1" placeholder="Radio" required><br>';
                break;
            default:
                echo '<p>Figura no válida</p>';
                exit;
        }
        ?>
        <input type="submit" value="Calcular">
    </form>
    <br><a href="index.php">← Volver</a>
</div>
</body>
</html>
