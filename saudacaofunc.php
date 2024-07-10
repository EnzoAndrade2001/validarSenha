<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação Personalizada</title>
</head>
<body>
    <h1>Gerar Saudação Personalizada</h1>
    <form method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <label for="hora">Hora (0-23):</label>
        <input type="number" id="hora" name="hora" min="0" max="23" required>
        <br>
        <input type="submit" value="Gerar Saudação">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $hora = $_POST["hora"];
        $mensagem = saudacaoPersonalizada($nome, $hora);
        echo "<p>$mensagem</p>";
    }

    function saudacaoPersonalizada($nome, $hora) {
        if ($hora >= 0 && $hora < 12) {
            $saudacao = "Bom dia";
        } elseif ($hora >= 12 && $hora < 18) {
            $saudacao = "Boa tarde";
        } elseif ($hora >= 18 && $hora < 24) {
            $saudacao = "Boa noite";
        } else {
            return "Hora inválida";
        }

        return "$saudacao, $nome!";
    }
    ?>
</body>
</html>