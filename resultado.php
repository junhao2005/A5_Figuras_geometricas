<?php  
require_once './figuras/Triangulo.php';
require_once './figuras/Rectangulo.php';
require_once './figuras/Cuadrado.php';
require_once './figuras/Circulo.php';

$tipo = $_POST['figura'] ?? null;

switch($tipo){
    case 'triangulo':
        $figura = new Triangulo($tipo, $_POST['lado1'], $_POST['lado2'], $_POST['lado3']);
        break;
    case 'rectangulo':
        $figura = new Rectangulo($tipo, $_POST['lado1'], $_POST['lado2']);
        break;
    case 'cuadrado':
        $figura = new Cuadrado($tipo, $_POST['lado1']);
        break;
    case 'circulo':
        $figura = new Circulo($tipo, $_POST['lado1']);
        break;
    default:
        die('Figura no válida');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<div class="container">
    <h2>Resultados del <?= ucfirst($tipo) ?></h2>
    <p><strong>Descripción:</strong> <?= $figura->__toString() ?></p>
    <p><strong>Área:</strong> <?= number_format($figura->calcularArea(), 2) ?></p>
    <p><strong>Perímetro:</strong> <?= number_format($figura->calcularPerimetro(), 2) ?></p>
    <br>
    <a href="index.php">← Volver al inicio</a>
</div>
</body>
</html>
