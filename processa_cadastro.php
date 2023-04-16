<?php
// conecta ao banco de dados
include("conecta.php");
// recupera os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];

// verifica se as senhas digitadas são iguais
if ($senha != $confirma_senha) {
  die("As senhas digitadas não são iguais!");
}

// consulta no banco de dados se o e-mail já foi cadastrado
$query = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = mysqli_query($conexao, $query);

// verifica se o resultado da consulta retornou alguma linha
if (mysqli_num_rows($resultado) > 0) {
  die("Este e-mail já está cadastrado!");
}

// insere os dados do usuário no banco de dados
$query = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado = mysqli_query($conexao, $query);

// verifica se a inserção foi bem sucedida
if ($resultado) {
  echo "Cadastro realizado com sucesso!";
} else {
  echo "Erro ao cadastrar o usuário: " . mysqli_error($conexao);
}

// fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
