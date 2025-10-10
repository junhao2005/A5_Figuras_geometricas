<?php
// Evita error por variable indefinida
$figura = $_POST['figura'] ?? null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Elegir Figura</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<div class="container">
    <h2>Selecciona una figura geométrica</h2>
    <form action="datos.php" method="post">
        <select name="figura" required>
            <option value="">-- Selecciona --</option>
            <option value="triangulo" <?php if($figura=="triangulo") echo "selected"; ?>>Triángulo</option>
            <option value="rectangulo" <?php if($figura=="rectangulo") echo "selected"; ?>>Rectángulo</option>
            <option value="cuadrado" <?php if($figura=="cuadrado") echo "selected"; ?>>Cuadrado</option>
            <option value="circulo" <?php if($figura=="circulo") echo "selected"; ?>>Círculo</option>
        </select>
        <input type="submit" value="Continuar">
    </form>
</div>
</body>
</html>
