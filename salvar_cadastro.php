<?php
  session_start();
  require_once 'conexao.php';

  if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT id FROM usuarios WHERE email ='$email'";
    $resultado = $pdo->query($sql);

    if ($resultado->rowCount() > 0) {
        echo "<script>alert('Este e-mail já está cadastrado!'); window.history.back();</script>";
        header("Location: login.php");
        exit;
    }

     // Criptografa a senha
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nome, email, senha)
      VALUES ('$nome', '$email', '$senhaHash')";

    if ($pdo->query($sql)) {
      $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
      header("Location: login.php");
    } else {
      echo "<script>alert('Erro ao cadastrar!'); window.history.back();</script>";
    }
  }
?>