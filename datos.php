<?php
$figura = $_POST['figura'] ?? null;
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
        <input type="hidden" name="figura" value="<?php echo $figura; ?>">

        <?php
        switch ($figura){
            case 'triangulo':
                echo '<input type="number" step="any" name="lado1" placeholder="Lado 1" required>'. '<br>';
                echo '<input type="number" step="any" name="lado2" placeholder="Lado 2" required>' . '<br>';
                echo '<input type="number" step="any" name="lado3" placeholder="Lado 3" required>'. '<br>';
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
            default: echo '<p>Figura no válida</p>'; exit;
        }
        ?>
        <input type="submit" value="Calcular">
    </form>
    <br><a href="index.php">← Volver</a>
</div>
</body>
</html>
