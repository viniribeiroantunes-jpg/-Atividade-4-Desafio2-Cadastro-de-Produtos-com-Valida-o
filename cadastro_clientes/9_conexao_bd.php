<?php

// Parâmetros de conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "Senai@118";
$dbname = "exercicio";

try {
    // Tenta criar a conexão com o banco de dados
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        throw new Exception("Falha na conexão: " . $conn->connect_error);
    }

    // Mensagem de teste de conexão
    echo "Conexão realizada com sucesso!";

} catch (Exception $e) {
    //Exibe uma mensagem de erro "amigável"
    echo "Erro ao cenectar com o banco de dados" . $e->getMessage();
}

?>


<!-- Para criar o BD -->
<!-- CREATE DATABASE exercicio; -->

<!-- Para criar a Tabela -->
<!-- CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
); -->


