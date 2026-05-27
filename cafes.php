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

  <title>Nossos Cafés</title>

  <link rel="stylesheet" href="css/cafes.css" />

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

  <section class="hero-cafes">

    <div class="overlay"></div>

    <div class="hero-content">

      <span>CAFÉS ESPECIAIS • SELEÇÃO PREMIUM</span>

      <h1>
        Descubra cafés
        extraordinários.
      </h1>

      <p>
        Grãos selecionados artesanalmente,
        torrados para entregar aroma,
        intensidade e experiências únicas.
      </p>

    </div>

  </section>

  <section class="categories">

    <div class="category-card active">

      <i class="fa-solid fa-fire"></i>

      <h3>Mais Vendidos</h3>

    </div>

    <div class="category-card">

      <i class="fa-solid fa-leaf"></i>

      <h3>Arábica Premium</h3>

    </div>

    <div class="category-card">

      <i class="fa-solid fa-mountain"></i>

      <h3>Origens Brasileiras</h3>

    </div>

    <div class="category-card">

      <i class="fa-solid fa-mug-hot"></i>

      <h3>Torra Especial</h3>

    </div>

  </section>

  <section class="products-section">

    <div class="section-header">

      <div>

        <span>CATÁLOGO ESPECIAL</span>

        <h2>Nossos Cafés</h2>

      </div>

    </div>

    <div class="products-grid">

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-serrano.jpg" alt="">

          <div class="product-tag">
            Bestseller
          </div>

        </div>

        <div class="product-info">

          <span>100% Arábica</span>

          <h3>Café Serrano</h3>

          <p>
            Notas de chocolate, nozes e finalização
            cremosa com torra média artesanal.
          </p>

          <div class="coffee-details">

            <div>
              <strong>Torra</strong>
              Média
            </div>

            <div>
              <strong>Origem</strong>
              Sul de Minas
            </div>

          </div>

          <div class="product-footer">

            <h4>R$ 54,90</h4>

            <button onclick="window.location.href='compra.php?name=Café Serrano&price=54.90&sub=100% Arábica'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-mantiqueira.webp" alt="">

          <div class="product-tag">
            Premium
          </div>

        </div>

        <div class="product-info">

          <span>Café Especial</span>

          <h3>Café Mantiqueira</h3>

          <p>
            Perfil sensorial cítrico e floral
            com aroma sofisticado e delicado.
          </p>

          <div class="coffee-details">

            <div>
              <strong>Torra</strong>
              Clara
            </div>

            <div>
              <strong>Origem</strong>
              Mantiqueira
            </div>

          </div>

          <div class="product-footer">

            <h4>R$ 59,90</h4>

            <button onclick="window.location.href='compra.php?name=Café Mantiqueira&price=59.90&sub=Café Especial'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-mogiana.png" alt="">

          <div class="product-tag">
            Especial
          </div>

        </div>

        <div class="product-info">

          <span>Artesanal</span>

          <h3>Café Mogiana</h3>

          <p>
            Corpo encorpado, aroma intenso
            e sabor marcante.
          </p>

          <div class="coffee-details">

            <div>
              <strong>Torra</strong>
              Média Escura
            </div>

            <div>
              <strong>Origem</strong>
              Mogiana
            </div>

          </div>

          <div class="product-footer">

            <h4>R$ 52,90</h4>

            <button onclick="window.location.href='compra.php?name=Café Mogiana&price=52.90&sub=Artesanal'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-cerradoMineiro.png" alt="">

          <div class="product-tag">
            Gourmet
          </div>

        </div>

        <div class="product-info">

          <span>Premium Coffee</span>

          <h3>Café Cerrado Mineiro</h3>

          <p>
            Notas de caramelo e castanhas
            com equilíbrio perfeito.
          </p>

          <div class="coffee-details">

            <div>
              <strong>Torra</strong>
              Média
            </div>

            <div>
              <strong>Origem</strong>
              Cerrado Mineiro
            </div>

          </div>

          <div class="product-footer">

            <h4>R$ 49,90</h4>

            <button onclick="window.location.href='compra.php?name=Café Cerrado Mineiro&price=49.90&sub=Premium Coffee'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-bourbon.jpg" alt="">

          <div class="product-tag">
            Novo
          </div>

        </div>

        <div class="product-info">

          <span>Microlote</span>

          <h3>Café Bourbon</h3>

          <p>
            Doçura elevada com notas
            caramelizadas e frutadas.
          </p>

          <div class="coffee-details">

            <div>
              <strong>Torra</strong>
              Clara
            </div>

            <div>
              <strong>Origem</strong>
              Alta Mogiana
            </div>

          </div>

          <div class="product-footer">

            <h4>R$ 64,90</h4>

            <button onclick="window.location.href='compra.php?name=Café Bourbon&price=64.90&sub=Microlote'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-reservaBlack.webp" alt="">

          <div class="product-tag">
            Exclusivo
          </div>

        </div>

        <div class="product-info">

          <span>Edição Limitada</span>

          <h3>Café Reserva Black</h3>

          <p>
            Blend sofisticado com aroma
            intenso e textura aveludada.
          </p>

          <div class="coffee-details">

            <div>
              <strong>Torra</strong>
              Escura
            </div>

            <div>
              <strong>Origem</strong>
              Blend Especial
            </div>

          </div>

          <div class="product-footer">

            <h4>R$ 79,90</h4>

            <button onclick="window.location.href='compra.php?name=Café Reserva Black&price=79.90&sub=Edição Limitada'">
              comprar
            </button>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="subscription-banner">

    <div class="banner-left">

      <span>ASSINATURA PREMIUM</span>

      <h2>
        Receba cafés exclusivos
        todos os meses.
      </h2>

      <p>
        Uma seleção premium de cafés especiais
        entregue diretamente na sua casa.
      </p>

      <button>
        ASSINAR AGORA
      </button>

    </div>

    <div class="banner-right">

      <img src="img/banner-cafe.png" alt="">

    </div>

  </section>

  <footer class="footer">

    <div class="footer-grid">

      <div>

        <img src="img/logo.png" alt="">

        <p>
          Cafés especiais, experiências únicas
          e produtos premium para apaixonados
          por café.
        </p>

      </div>

      <div>

        <h3>Navegação</h3>

        <a href="index.php">Home</a>
        <a href="cafes.php">Cafés</a>
        <a href="blog.php">Blog</a>
        <a href="cursos.php">Cursos</a>

      </div>

      <div>

        <h3>Contato</h3>

        <p>(11) 99999-9999</p>

        <p>contato@pedrolimacoffee.com</p>

        <p>São Paulo - SP</p>

      </div>

      <div>

        <h3>Redes Sociais</h3>

        <div class="socials">

          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-youtube"></i>

        </div>

      </div>

    </div>

    <div class="footer-bottom">

      <p>
        © 2026 Pedro Lima Coffee — Todos os direitos reservados.
      </p>

    </div>

  </footer>

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