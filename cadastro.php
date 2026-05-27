<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <meta charset="UTF-8" />

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  />

  <title>Cadastro | Pedro Lima Coffee</title>

  <link rel="stylesheet" href="css/cadastro.css" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
  />

  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet"
  />

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

  <section class="cadastro-page">

    <div class="overlay"></div>

    <div class="cadastro-container">

      <div class="cadastro-left">

        <span>MEMBER AREA</span>

        <h1>
          Crie sua conta
          premium coffee.
        </h1>

        <p>
          Cadastre-se para acessar conteúdos exclusivos,
          cursos, benefícios e experiências únicas
          no universo do café especial.
        </p>

        <div class="cadastro-benefits">

          <div class="benefit">

            <i class="fa-solid fa-mug-hot"></i>

            <div>
              <h3>Cafés Exclusivos</h3>
              <p>Acesso antecipado a lançamentos.</p>
            </div>

          </div>

          <div class="benefit">

            <i class="fa-solid fa-graduation-cap"></i>

            <div>
              <h3>Cursos Premium</h3>
              <p>Aprenda com especialistas.</p>
            </div>

          </div>

          <div class="benefit">

            <i class="fa-solid fa-star"></i>

            <div>
              <h3>Experiência VIP</h3>
              <p>Benefícios exclusivos para membros.</p>
            </div>

          </div>

        </div>

      </div>

      <div class="cadastro-right">

        <form class="cadastro-form" action="salvar_cadastro.php" method="POST">

          <h2>Criar Conta</h2>

          <div class="input-group">

            <label>Nome completo</label>

            <input
              type="text"
              name="nome"
              placeholder="Digite seu nome"
              required
            >

          </div>

          <div class="input-group">

            <label>E-mail</label>

            <input
              type="email"
              name="email"
              placeholder="Digite seu e-mail"
              required
            >

          </div>

          <div class="input-group">

            <label>Senha</label>

            <input
              type="password"
              name="senha"
              placeholder="Digite sua senha"
              required minlength="3" maxlength="15"
            >

          </div>

          <div class="input-group">

            <label>Confirmar senha</label>

            <input
              type="password"
              name="confirmar_senha"
              placeholder="Confirme sua senha"
              required minlength="3" maxlength="15"
            >

          </div>

          <button type="submit" value="cadastrar">
            CRIAR CONTA
          </button>

          <p class="login-link">
            Já possui conta?
            <a href="login.php">Entrar</a>
          </p>

        </form>

      </div>

    </div>

  </section>

<script>

  const menuToggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.menu');

  menuToggle.addEventListener('click', () => {
    menu.classList.toggle('active');
  });

    const userToggle = document.getElementById('userToggle');
    const dropdownMenu = document.getElementById('dropdownMenu');

    userToggle.addEventListener('click', () => {
      dropdownMenu.classList.toggle('active');
    });

    document.addEventListener('click', (e) => {

      if(
        !userToggle.contains(e.target) &&
        !dropdownMenu.contains(e.target)
      ){
        dropdownMenu.classList.remove('active');
      }

  });

</script>

</body>
</html>