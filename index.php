<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Elegir Figura</title>
     <!-- Enlace al archivo CSS -->
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>

    <div class="container">
        <h2>Selecciona una figura geométrica</h2>
        <form action="datos.php" method="post">
            <select name="figura" required>
                <option value="">-- Selecciona --</option>
                <option value="triangulo">Triángulo</option>
                <option value="rectangulo">Rectángulo</option>
                <option value="cuadrado">Cuadrado</option>
                <option value="circulo">Círculo</option>
            </select>
            <br>
            <input type="submit" value="Continuar">
        </form>
    </div>
    
</body>
</html>
