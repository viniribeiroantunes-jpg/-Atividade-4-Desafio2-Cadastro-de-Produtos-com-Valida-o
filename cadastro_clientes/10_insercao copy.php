<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <form action="" method="post">
    <label for="nome">Nome: </label>
    <input type="text" name="nome" required> <br>

    <label for="email">e-mail: </label>
    <input type="email" name="email" required> <br>

    <button type="submit">Cadastrar</button>
    </form>

<?php 
//Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Recebe os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    //Cpmecta com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password,$dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Falha na conexão: ". $conn->connect_error);
    }

    // Insere dados no banco de dados
    $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome','$email')";

    // VErifica se os dados foram cadastrados no Banco de Dados
    if ($conn->query($sql) == TRUE) {
        echo "<p style='color: darkgreen;'>Cliente cadastrado com sucesso<?p>";
    }else{
        echo "<p style='color: red;'> Erro ao cadastrar!</p>";
    }
}

// Ocultar a mensagem após 5 segundos com a função setTimeout do JavaScript
echo "
<script>
    setTimeout(function() {
        document.getElementById('msg').style.display = 'none';
    }, 5000);
</script>
";

// Fecha a conexão
$conn->close();

?>
</body>
</html>
