<?php
// Captura la figura enviada por POST o GET, si no hay queda null
$figura = $_POST['figura'] ?? $_GET['figura'] ?? null;

// Si no se recibió ninguna figura, muestra error y link de regreso
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
    <!-- CSS de la página -->
    <link rel="stylesheet" href="./css/estilo.css">
    <!-- JS para validar inputs antes de enviar -->
    <script src="./js/validar.js"></script>
</head>
<body>
    <div class="container form-container">
        <!-- Título dinámico según figura -->
        <h1 class="title">📏 Datos del <?= ucfirst($figura) ?></h1>
        <p class="subtitle">Introduce las medidas necesarias</p>

        <!-- Imagen correspondiente a la figura seleccionada -->
        <div class="figura-imagen">
            <?php
            switch ($figura) {
                case 'triangulo':
                    echo '<img src="./img/triangulo.png" alt="Triángulo" width="200">';
                    break;
                case 'rectangulo':
                    echo '<img src="./img/rectangulo.png" alt="Rectángulo" width="200">';
                    break;
                case 'cuadrado':
                    echo '<img src="./img/cuadrado.png" alt="Cuadrado" width="200">';
                    break;
                case 'circulo':
                    echo '<img src="./img/circulo.png" alt="Círculo" width="200">';
                    break;
            }
            ?>
        </div>

        <!-- Formulario para introducir medidas según la figura -->
        <form action="resultado.php" method="post" class="form-inputs" onsubmit="return validarDatos();">
            <!-- Enviamos la figura seleccionada como campo oculto -->
            <input type="hidden" name="figura" value="<?= htmlspecialchars($figura); ?>">

            <?php
            // Genera inputs según la figura
            switch ($figura) {
                case 'triangulo':
                    echo '<input type="number" name="lado1" placeholder="Lado 1">';
                    echo '<input type="number" name="lado2" placeholder="Lado 2">';
                    echo '<input type="number" name="lado3" placeholder="Lado 3">';
                    break;
                case 'rectangulo':
                    echo '<input type="number" name="lado1" placeholder="Lado 1">';
                    echo '<input type="number" name="lado2" placeholder="Lado 2">';
                    break;
                case 'cuadrado':
                    echo '<input type="number" name="lado1" placeholder="Lado">';
                    break;
                case 'circulo':
                    echo '<input type="number" name="lado1" placeholder="Radio">';
                    break;
            }
            ?>
            <br><br>
            <!-- Botón para enviar los datos -->
            <input type="submit" value="✨ Calcular">
        </form>

        <!-- Enlace para volver a index.php -->
        <a href="index.php" class="btn-back">← Volver</a>
    </div>
</body>
</html>
