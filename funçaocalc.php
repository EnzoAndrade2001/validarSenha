<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Área de Retângulo</title>
</head>
<body>
    <h1>Calculadora de Área de Retângulo</h1>
    <form method="post">
        <label for="largura">Largura:</label>
        <input type="number" id="largura" name="largura" required>
        <br>
        <label for="altura">Altura:</label>
        <input type="number" id="altura" name="altura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $largura = $_POST["largura"];
        $altura = $_POST["altura"];
        $area = calcularAreaRetangulo($largura, $altura);
        echo "<p>A área do retângulo é: $area</p>";
    }

    function calcularAreaRetangulo($largura, $altura) {
        return $largura * $altura;
    }
    ?>
</body>
</html>







