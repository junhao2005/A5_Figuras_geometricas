<?php
$figura = $_POST['figura'] ?? $_GET['figura'] ?? null;

if (!$figura) {
    echo "<p>Error: no se ha seleccionado ninguna figura.</p>";
    echo '<a href="index.php">Volver</a>';
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de la figura</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="container form-container">
        <h1 class="title">📏 Datos del <?= ucfirst($figura) ?></h1>
        <p class="subtitle">Introduce las medidas necesarias</p>

        <form action="resultado.php" method="post" class="form-inputs">
            <input type="hidden" name="figura" value="<?= htmlspecialchars($figura); ?>">

            <?php
            switch ($figura) {
                case 'triangulo':
                    echo '<input type="number" step="any" name="lado1" placeholder="Lado 1" required>';
                    echo '<input type="number" step="any" name="lado2" placeholder="Lado 2" required>';
                    echo '<input type="number" step="any" name="lado3" placeholder="Lado 3" required>';
                    break;
                case 'rectangulo':
                    echo '<input type="number" step="any" name="lado1" placeholder="Lado 1" required>';
                    echo '<input type="number" step="any" name="lado2" placeholder="Lado 2" required>';
                    break;
                case 'cuadrado':
                    echo '<input type="number" step="any" name="lado1" placeholder="Lado" required>';
                    break;
                case 'circulo':
                    echo '<input type="number" step="any" name="lado1" placeholder="Radio" required>';
                    break;
                default:
                    echo '<p>Figura no válida</p>';
                    exit;
            }
            ?>
            <br><br>
            <input type="submit" value="✨ Calcular">
        </form>

        <a href="index.php" class="btn-back">← Volver</a>
    </div>
</body>
</html>
