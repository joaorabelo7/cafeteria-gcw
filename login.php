<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <meta charset="UTF-8">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >

  <title>Login</title>

  <link rel="stylesheet" href="css/login.css">

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  >

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet"
  >

</head>

<body>

  <header class="navbar">

    <div class="logo">
      <img src="img/logo.png" alt="Logo">
    </div>

    <nav class="menu">
      <a href="index.php">home</a>
      <a href="cafes.php">cafés</a>
      <a href="acessorios.php">acessórios</a>
      <a href="blog.php">blog</a>
      <a href="cursos.php">cursos</a>
    </nav>

    <div class="icons">

      <?php if(isset($_SESSION['id'])): ?>

        <div class="user-menu">

          <div class="user-box" id="userToggle">

            <div class="user-avatar">
              <?php echo strtoupper(substr($_SESSION['nome'], 0, 1)); ?>
            </div>

            <div class="user-info">

              <span>Bem-vindo</span>

              <h4>

                <?php

                $nomes = explode(' ', $_SESSION['nome']);

                echo $nomes[0];

                if(isset($nomes[1])){
                  echo ' ' . $nomes[1];
                }

                ?>

              </h4>

            </div>

            <i class="fa-solid fa-chevron-down"></i>

          </div>

          <div class="dropdown-menu" id="dropdownMenu">

            <a href="cadastro.php">
              <i class="fa-solid fa-user-plus"></i>
              Criar nova conta
            </a>

            <a href="logout.php">
              <i class="fa-solid fa-right-from-bracket"></i>
              Sair da conta
            </a>

          </div>

        </div>

      <?php else: ?>

        <a href="login.php" class="login-icon">
          <i class="fa-solid fa-user"></i>
        </a>

      <?php endif; ?>

      <i class="fa-solid fa-magnifying-glass"></i>
      <i class="fa-solid fa-cart-shopping"></i>

    </div>

    <div class="menu-toggle">
      <i class="fa-solid fa-bars"></i>
    </div>

  </header>

  <section class="login-section">

    <div class="overlay"></div>

    <div class="login-container">

      <div class="login-left">

        <span>ÁREA DO CLIENTE</span>

        <h1>
          Entre na sua
          conta premium.
        </h1>

        <p>
          Acesse seus pedidos, cursos,
          conteúdos exclusivos e muito mais.
        </p>

      </div>

      <div class="login-box">

        <h2>Login</h2>

        <form action="processa_login.php" method="POST">

          <div class="input-box">

            <i class="fa-solid fa-envelope"></i>

            <input
              type="email"
              name="email"
              placeholder="Digite seu e-mail"
              required
            >

          </div>

          <div class="input-box">

            <i class="fa-solid fa-lock"></i>

            <input
              type="password"
              name="senha"
              placeholder="Digite sua senha"
              required
            >

          </div>

          <button type="submit">
            ENTRAR
          </button>

          <p class="register-link">
            Não possui conta?
            <a href="cadastro.php">
              Criar conta
            </a>
          </p>

        </form>

      </div>

    </div>

  </section>

  <script>

    document.addEventListener('DOMContentLoaded', () => {

      const menuToggle = document.querySelector('.menu-toggle');
      const menu = document.querySelector('.menu');

      menuToggle.addEventListener('click', () => {
        menu.classList.toggle('active');
      });

    });

  </script>

</body>
</html>