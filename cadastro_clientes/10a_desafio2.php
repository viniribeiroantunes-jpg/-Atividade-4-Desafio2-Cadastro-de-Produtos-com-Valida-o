<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>

<body>

    <h2>Cadastro de Produtos</h2>

    <form action="" method="post">

        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required><br><br>

        <label for="preco">Preço:</label>
        <input type="number" name="preco" step="0.01" required><br><br>

        <button type="submit">Cadastrar</button>

    </form>

<?php

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Recebe os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    // Validação dos dados
    if (empty($nome)) {

        echo "<p id='msg' style='color: red;'>
        Erro: O nome do produto não pode estar vazio.
        </p>";

    } elseif (!is_numeric($preco) || $preco <= 0) {

        echo "<p id='msg' style='color: red;'>
        Erro: O preço deve ser um número positivo.
        </p>";

    } else {

        // Conecta com o banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Insere os dados no Banco de Dados
        $sql = "INSERT INTO produtos (nome, preco)
                VALUES ('$nome', '$preco')";

        // Verifica se o produto foi cadastrado
        if ($conn->query($sql) === TRUE) {

            echo "<p id='msg' style='color: green;'>
            Produto cadastrado com sucesso!
            </p>";

        } else {

            echo "<p id='msg' style='color: red;'>
            Erro ao cadastrar produto.
            </p>";
        }

        // Fecha a conexão
        $conn->close();
    }

    // Oculta a mensagem após 5 segundos
    echo "
    <script>
        setTimeout(function() {
            document.getElementById('msg').style.display = 'none';
        }, 5000);
    </script>
    ";
}

?>
</body>
</html>