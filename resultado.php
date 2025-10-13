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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado - <?= ucfirst($tipo) ?></title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
    <div class="container result">
        <h1 class="title">✨ Resultado del <?= ucfirst($tipo) ?></h1>
        <div class="result-card">
            <p><strong>📏 Descripción:</strong> <?= $figura->__toString() ?></p>
            <p><strong>📐 Área:</strong> <span><?= number_format($figura->calcularArea(), 2) ?></span></p>
            <p><strong>📏 Perímetro:</strong> <span><?= number_format($figura->calcularPerimetro(), 2) ?></span></p>
        </div>
        <a href="index.php" class="btn-back">← Volver al inicio</a>
    </div>
</body>
</html>
