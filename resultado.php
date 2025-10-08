<?php  
require_once './figuras/Triangulo.php';
require_once './figuras/Rectangulo.php';
require_once './figuras/Cuadrado.php';
require_once './figuras/Circulo.php';

$figura = $_POST['figura'] ?? null;

switch($figura){
    case 'triangulo':
        $fig = new Triangulo($_POST['lado1'], $_POST['lado2'], $_POST['lado3']);
        break;
    case 'rectangulo':
        $fig = new Rectangulo($_POST['lado1'], $_POST['lado2']);
        break;
    case 'cuadrado':
        $fig = new Cuadrado($_POST['lado1']);
        break;
    case 'circulo':
        $fig = new Circulo($_POST['lado1']);
        break;
    default: die('Figura no válida');
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
    <h2>Resultados</h2>
    <p><strong>Descripción:</strong> <?= $fig->__toString() ?></p>
    <p><strong>Área:</strong> <?= number_format($fig->calcularArea(), 2) ?></p>
    <p><strong>Perímetro:</strong> <?= number_format($fig->calcularPerimetro(), 2) ?></p>
    <br>
    <a href="index.php">← Volver al inicio</a>
</div>
</body>
</html>
