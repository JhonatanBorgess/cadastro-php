<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro Simples</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
    }

    .container {
      max-width: 400px;
      margin: 50px auto;
      background: white;
      padding: 20px;
      border-radius: 8px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin: 10px 0;
    }

    button {
      padding: 8px;
      width: 100%;
      cursor: pointer;
    }
  </style>
</head>

<body>

<div class="container">

<h2>Cadastro de Usuário</h2>

<form method="POST">

  <input type="text" name="nome" placeholder="Nome" required>

  <input type="email" name="email" placeholder="E-mail" required>

  <button type="submit">Cadastrar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $nome = $_POST["nome"];
  $email = $_POST["email"];

  $arquivo = "dados.txt";

  $dados = $nome . " | " . $email . "\n";

  file_put_contents($arquivo, $dados, FILE_APPEND);

  echo "<p>Cadastro realizado com sucesso!</p>";
}

?>

</div>

</body>
</html>
