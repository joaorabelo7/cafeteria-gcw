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

  <title>Acessórios</title>

  <link rel="stylesheet" href="css/acessorios.css" />

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

  <section class="hero-accessories">

    <div class="overlay"></div>

    <div class="hero-content">

      <span>ACESSÓRIOS PREMIUM</span>

      <h1>
        Tudo para elevar
        sua experiência.
      </h1>

      <p>
        Equipamentos profissionais, kits exclusivos
        e acessórios premium para transformar
        cada preparo em um ritual especial.
      </p>

    </div>

  </section>

  <section class="top-benefits">

    <div class="benefit-card">

      <i class="fa-solid fa-award"></i>

      <h3>Qualidade Premium</h3>

      <p>
        Produtos selecionados para amantes de café.
      </p>

    </div>

    <div class="benefit-card">

      <i class="fa-solid fa-truck-fast"></i>

      <h3>Entrega Rápida</h3>

      <p>
        Envio seguro para todo o Brasil.
      </p>

    </div>

    <div class="benefit-card">

      <i class="fa-solid fa-shield"></i>

      <h3>Compra Segura</h3>

      <p>
        Pagamento protegido e confiável.
      </p>

    </div>

  </section>

  <section class="products-section">

    <div class="section-header">

      <div>

        <span>CATÁLOGO ESPECIAL</span>

        <h2>Acessórios</h2>

      </div>

    </div>

    <div class="products-grid">

      <div class="product-card">

        <div class="product-image">

          <img src="img/kit-premium.png" alt="">

          <div class="tag">
            Bestseller
          </div>

        </div>

        <div class="product-info">

          <span>Kit Barista</span>

          <h3>Kit Premium Coffee</h3>

          <p>
            Kit completo com acessórios essenciais
            para cafés especiais.
          </p>

          <div class="product-footer">

            <h4>R$ 189,90</h4>

            <button onclick="window.location.href='compra.php?name=Kit Premium Coffee&price=189.9&sub=Kit Barista'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/grinder-black.png" alt="">

          <div class="tag">
            Premium
          </div>

        </div>

        <div class="product-info">

          <span>Moedor Profissional</span>

          <h3>Grinder Black Edition</h3>

          <p>
            Precisão e moagem uniforme
            para extrações perfeitas.
          </p>

          <div class="product-footer">

            <h4>R$ 329,90</h4>

            <button onclick="window.location.href='compra.php?name=Grinder Black Edition&price=329.9&sub=Moedor Profissional'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/kitTools.png" alt="">

          <div class="tag">
            Exclusivo
          </div>

        </div>

        <div class="product-info">

          <span>Barista Tools</span>

          <h3>Kit Latte Art</h3>

          <p>
            Ferramentas profissionais
            para latte art e finalização.
          </p>

          <div class="product-footer">

            <h4>R$ 149,90</h4>

            <button onclick="window.location.href='compra.php?name=Kit Latte Art&price=149.9&sub=Barista Tools'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafeteira.png" alt="">

          <div class="tag">
            Novo
          </div>

        </div>

        <div class="product-info">

          <span>Cafeteira Premium</span>

          <h3>French Press Gold</h3>

          <p>
            Extração sofisticada com design
            moderno e acabamento premium.
          </p>

          <div class="product-footer">

            <h4>R$ 219,90</h4>

            <button onclick="window.location.href='compra.php?name=French Press Gold&price=219.9&sub=Cafeteira Premium'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/balanca.png" alt="">

          <div class="tag">
            Gourmet
          </div>

        </div>

        <div class="product-info">

          <span>Barista Collection</span>

          <h3>Balança Precision</h3>

          <p>
            Controle total na preparação
            dos seus cafés especiais.
          </p>

          <div class="product-footer">

            <h4>R$ 119,90</h4>

            <button onclick="window.location.href='compra.php?name=Balança Precision&price=119.9&sub=Barista Collection'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/xicara.png" alt="">

          <div class="tag">
            Especial
          </div>

        </div>

        <div class="product-info">

          <span>Premium Mug</span>

          <h3>Xícara Artisan</h3>

          <p>
            Design minimalista com acabamento
            sofisticado e elegante.
          </p>

          <div class="product-footer">

            <h4>R$ 79,90</h4>

            <button onclick="window.location.href='compra.php?name=Xícara Artisan&price=79.90&sub=Premium Mug'">
              comprar
            </button>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="banner-section">

    <div class="banner-content">

      <span>EXPERIÊNCIA COMPLETA</span>

      <h2>
        Monte seu setup
        perfeito de café.
      </h2>

      <p>
        Descubra acessórios premium e transforme
        cada preparo em uma experiência única.
      </p>

    </div>

    <div class="banner-image">

      <img src="img/banner-acessorios.png" alt="">

    </div>

  </section>

  <footer class="footer">

    <div class="footer-grid">

      <div>

        <img src="img/logo.png" alt="">

        <p>
          Produtos premium e experiências
          únicas para apaixonados por café.
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