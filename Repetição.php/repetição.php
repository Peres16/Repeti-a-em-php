<!DOCTYPE html>
<html>
<head>
<title>Estrutura de repetição com a linguagem PHP</title>
<style>
    body {
        text-align: left; 
        color: blue; 
    }
    input[type="submit"] {
        background-color: blue;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 5px;
    }
    input[type="submit"]:active {
        background-color: darkblue;
    }
</style>
</head>
<body>

<h2>Estrutura de repetição com a linguagem PHP</h2>
<hr>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="dia_semana">Selecione o dia da semana:</label><br>
    <select id="dia_semana" name="dia_semana">
        <option value="Segunda-feira">Segunda-feira</option>
        <option value="Terça-feira">Terça-feira</option>
        <option value="Quarta-feira">Quarta-feira</option>
        <option value="Quinta-feira">Quinta-feira</option>
        <option value="Sexta-feira">Sexta-feira</option>
        <option value="Sábado">Sábado</option>
        <option value="Domingo">Domingo</option>
    </select><br><br>

    <label for="mensagem">Mensagem referente ao dia da semana que escolheu:</label><br>
    <select id="mensagem" name="mensagem">
        <option value="Academia">Academia</option>
        <option value="Jogar Basquete">Jogar Basquete</option>
        <option value="Karatê">Karatê</option>
        <option value="Estudar">Estudar</option>
        <option value="Correr">Correr</option>
    </select><br><br>

    <label for="nome">INFORME SEU NOME:</label><br>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="quantidade">Quantas vezes a mensagem será exibida?</label><br>
    <input type="number" id="quantidade" name="quantidade" min="1"><br><br>

    <input type="submit" value="ENVIAR">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia_semana = isset($_POST['dia_semana']) ? $_POST['dia_semana'] : "";
    $mensagem = isset($_POST['mensagem']) ? $_POST['mensagem'] : "";
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";
    $quantidade = isset($_POST['quantidade']) ? $_POST['quantidade'] : "";

    for ($i = 0; $i < $quantidade; $i++) {
        echo "Dia da Semana: " . $dia_semana . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
        echo "Nome: " . $nome . "<br><br>";
    }
}
?>

</body>
</html>