<?php
// conexao banco de dados
include("conecta.php");
// consultando se o usuario existe no banco
$query = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
$resultado = mysqli_query($conexao, $query);

// verifica se a consulta retornou algo
if (mysqli_num_rows($resultado) == 1) {
  // se sim redreciona para a página principal
  header("Location: principal.php");
} else {
  // se não exibe mensagem de erro
  echo "E-mail ou senha inválidos!";
}
// fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
