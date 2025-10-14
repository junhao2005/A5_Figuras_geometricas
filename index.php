<?php
$figura = $_POST['figura'] ?? null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Elegir Figura</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <script src="./js/validar.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="title">🌌 Figuras Geométricas</h1>
        <p class="subtitle">Elige tu forma favorita</p>

        <form action="datos.php" method="post" class="form" onsubmit="return validarFigura();">
            <select name="figura" id="figura">
                <option value="">-- Selecciona --</option>
                <option value="triangulo" <?php if($figura=="triangulo") echo "selected"; ?>>🔺 Triángulo</option>
                <option value="rectangulo" <?php if($figura=="rectangulo") echo "selected"; ?>>⬛ Rectángulo</option>
                <option value="cuadrado" <?php if($figura=="cuadrado") echo "selected"; ?>>🟪 Cuadrado</option>
                <option value="circulo" <?php if($figura=="circulo") echo "selected"; ?>>🌀 Círculo</option>
            </select>
            <input type="submit" value="✨ Continuar">
        </form>
    </div>
</body>
</html>
