# Cadastro de Produtos com Validação

Projeto desenvolvido durante o curso Técnico em Desenvolvimento de Sistemas do SENAI.

## 📋 Sobre o Projeto

Esta atividade tem como objetivo desenvolver um sistema de cadastro de produtos utilizando HTML, PHP e MySQL.

O sistema permite informar o nome e o preço de um produto por meio de um formulário. Antes do cadastro, os dados são validados para garantir que apenas informações válidas sejam inseridas no banco de dados.

## 🚀 Funcionalidades

- Cadastro de produtos
- Campo para nome do produto
- Campo para preço
- Validação do nome do produto
- Validação do preço
- Verificação se o preço é maior que zero
- Conexão com banco de dados MySQL
- Inserção dos produtos no banco de dados
- Mensagem de sucesso ou erro
- Mensagem desaparece automaticamente após 5 segundos

## 🛠️ Tecnologias Utilizadas

- HTML5
- PHP
- MySQL
- JavaScript

## 💾 Banco de Dados

Banco utilizado:

`exercicio`

Tabela utilizada:

`produtos`

Estrutura da tabela:

```sql
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);
