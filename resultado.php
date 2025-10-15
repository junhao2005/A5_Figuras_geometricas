<?php  

require_once './figuras/Triangulo.php';
require_once './figuras/Rectangulo.php';
require_once './figuras/Cuadrado.php';
require_once './figuras/Circulo.php';

// Se obtiene el tipo de figura enviada desde el formulario por metodo POST.
// Si no se envía ningún valor, se asigna null.
$tipo = $_POST['figura'] ?? null;

// Según el tipo de figura seleccionada, se crea el objeto correspondiente
switch($tipo){
    case 'triangulo':
        // Se crea un triángulo con los tres lados recibidos por POST
        $figura = new Triangulo($tipo, $_POST['lado1'], $_POST['lado2'], $_POST['lado3']);
        break;
    case 'rectangulo':
        // Se crea un rectángulo con sus dos lados
        $figura = new Rectangulo($tipo, $_POST['lado1'], $_POST['lado2']);
        break;
    case 'cuadrado':
        // Se crea un cuadrado (solo necesita un lado)
        $figura = new Cuadrado($tipo, $_POST['lado1']);
        break;
    case 'circulo':
        // Se crea un círculo (solo necesita el radio)
        $figura = new Circulo($tipo, $_POST['lado1']);
        break;
    default:
        // Si el tipo de figura no es válido, se muesa un mensaje de error
        die('Figura no válida');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- El título de la página muestra el tipo de figura con la primera letra en mayúscula -->
    <title>Resultado - <?= ucfirst($tipo) ?></title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="container result">
        <!-- Encabezado que indica el tipo de figura procesada -->
        <h1 class="title">Resultado del <?= ucfirst($tipo) ?></h1>
        <div class="result-card">
            <!-- Se muestra la descripción de la figura (mediante el método __toString) -->
            <p><strong>📏 Descripción:</strong> <?= $figura->__toString() ?></p>

            <!-- Se muestra el área calculada con dos decimales -->
            <p><strong>📐 Área:</strong> <span><?= number_format($figura->calcularArea(), 2) ?></span></p>

            <!-- Se muestra el perímetro calculado con dos decimales -->
            <p><strong>📏 Perímetro:</strong> <span><?= number_format($figura->calcularPerimetro(), 2) ?></span></p>
        </div>

        
        <a href="index.php" class="btn-back">🏠 Volver al inicio</a>
    </div>
</body>
</html>
