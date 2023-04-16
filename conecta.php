<?php
$host = "localhost";
$usuario = "usuario";
$senha = "senha";
$banco = "nome_banco_de_dados";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// verifica se a conexao deu certo
if (mysqli_connect_errno()) {
  die("Falha ao conectar com o banco de dados: " . mysqli_connect_error());
}
