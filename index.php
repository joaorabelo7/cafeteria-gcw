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

  <title>Pedro Lima Coffee</title>

  <link rel="stylesheet" href="css/style.css" />

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

  <section class="hero">

    <div class="hero-overlay"></div>

    <div class="hero-content">

      <span>CAFÉS ESPECIAIS • EXPERIÊNCIA PREMIUM</span>

      <h1>
        Mais que café,
        uma experiência
        sensorial.
      </h1>

      <p>
        Descubra cafés especiais, acessórios premium
        e workshops criados para transformar sua relação
        com o café.
      </p>

      <div class="hero-buttons">

        <a href="cafes.php">
          <button class="primary-btn">
            EXPLORAR CAFÉS
          </button>
        </a>

        <a href="cursos.php">
          <button class="secondary-btn">
            VER CURSOS
          </button>
        </a>

      </div>

    </div>

    <div class="hero-scroll">

      <span>SCROLL</span>

      <div class="scroll-line"></div>

    </div>

  </section>

  <section class="benefits">

    <div class="benefit-box">

      <i class="fa-solid fa-seedling"></i>

      <div>

        <h3>Grãos Selecionados</h3>

        <p>
          Cafés especiais de origem premium
        </p>

      </div>

    </div>

    <div class="benefit-box">

      <i class="fa-solid fa-truck"></i>

      <div>

        <h3>Entrega Expressa</h3>

        <p>
          Envio rápido para todo o Brasil
        </p>

      </div>

    </div>

    <div class="benefit-box">

      <i class="fa-solid fa-lock"></i>

      <div>

        <h3>Compra Protegida</h3>

        <p>
          Pagamento seguro e criptografado
        </p>

      </div>

    </div>

    <div class="benefit-box">

      <i class="fa-solid fa-headset"></i>

      <div>

        <h3>Suporte Especializado</h3>

        <p>
          Atendimento humanizado e eficiente
        </p>

      </div>

    </div>

  </section>

  <section class="about-coffee">

    <div class="about-left">

      <span>O UNIVERSO DO CAFÉ</span>

      <h2>
        Cafés especiais
        para pessoas que
        valorizam experiências.
      </h2>

      <p>
        Pedro Lima seleciona cafés artesanais
        das melhores regiões cafeeiras do Brasil
        e do mundo, proporcionando aromas,
        sabores e sensações únicas em cada xícara.
      </p>

      <a href="cafes.php">

        <button>
          CONHECER CAFÉS
        </button>

      </a>

    </div>

    <div class="about-right">

      <img src="img/about1.png" alt="">
      <img src="img/about2.png" alt="">
      <img src="img/about3.png" alt="">

    </div>

  </section>

  <section class="featured-products">

    <div class="section-title">

      <div>

        <span>SELEÇÃO ESPECIAL</span>

        <h2>Nossos Cafés</h2>

      </div>

      <a href="cafes.php">

        Ver todos

        <i class="fa-solid fa-arrow-right"></i>

      </a>

    </div>

    <div class="products-grid">

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-serrano.jpg" alt="">

        </div>

        <div class="product-info">

          <span>100% Arábica</span>

          <h3>Café Serrano</h3>

          <p>
            Notas de chocolate e nozes
            com torra média artesanal.
          </p>

          <div class="product-footer">

            <h4>R$ 54,90</h4>

            <button class="buy-btn" onclick="window.location.href='compra.php?name=Café Serrano&price=54.90&sub=100% Arábica'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-mantiqueira.webp" alt="">

        </div>

        <div class="product-info">

          <span>Premium</span>

          <h3>Café Mantiqueira</h3>

          <p>
            Perfil cítrico e floral
            com aroma sofisticado.
          </p>

          <div class="product-footer">

            <h4>R$ 59,90</h4>

            <button class="buy-btn" onclick="window.location.href='compra.php?name=Café Serrano&price=54.90&sub=100% Arábica'">
              comprar
            </button>

          </div>

        </div>

      </div>

      <div class="product-card">

        <div class="product-image">

          <img src="img/cafe-mogiana.png" alt="">

        </div>

        <div class="product-info">

          <span>Especial</span>

          <h3>Café Mogiana</h3>

          <p>
            Corpo encorpado e sabor
            intenso e marcante.
          </p>

          <div class="product-footer">

            <h4>R$ 52,90</h4>

            <button class="buy-btn" class="buy-btn" onclick="window.location.href='compra.php?name=Café Serrano&price=54.90&sub=100% Arábica'">
              comprar
            </button>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="courses-section">

    <div class="courses-left">

      <span>WORKSHOPS & CURSOS</span>

      <h2>
        Aprenda técnicas
        profissionais
        de preparo.
      </h2>

      <p>
        Cursos online e presenciais criados
        para apaixonados por cafés especiais,
        desde iniciantes até futuros baristas.
      </p>

      <a href="cursos.php">

        <button>
          EXPLORAR CURSOS
        </button>

      </a>

    </div>

    <div class="courses-right">

      <div class="course-card">

        <span>ONLINE</span>

        <h3>Latte Art</h3>

        <p>
          Técnicas de vaporização
          e desenhos profissionais.
        </p>

      </div>

      <div class="course-card">

        <span>PRESENCIAL</span>

        <h3>Métodos Filtrados</h3>

        <p>
          Aprenda V60, Chemex
          e preparo artesanal.
        </p>

      </div>

      <div class="course-card">

        <span>MASTERCLASS</span>

        <h3>Degustação Sensorial</h3>

        <p>
          Descubra aromas,
          notas e harmonizações.
        </p>

      </div>

    </div>

  </section>

  <section class="subscription-section">

    <div class="subscription-content">

      <span>ASSINATURA MENSAL</span>

      <h2>
        Receba cafés especiais
        todos os meses.
      </h2>

      <p>
        Uma curadoria exclusiva de cafés premium
        selecionados por Pedro Lima.
      </p>

      <div class="plans">

        <div class="plan">

          <h3>Básico</h3>

          <p>250g por mês</p>

        </div>

        <div class="plan featured-plan">

          <h3>Premium</h3>

          <p>500g + brindes exclusivos</p>

        </div>

        <div class="plan">

          <h3>Barista</h3>

          <p>Kits especiais e edições raras</p>

        </div>

      </div>

      <button>
        ASSINAR AGORA
      </button>

    </div>

  </section>

  <section class="blog-section">

    <div class="section-title">

      <div>

        <span>CONTEÚDO & EXPERIÊNCIA</span>

        <h2>Últimos Artigos</h2>

      </div>

      <a href="blog.php">

        Ver blog

        <i class="fa-solid fa-arrow-right"></i>

      </a>

    </div>

    <div class="blog-grid">

      <div class="blog-card">

        <img src="img/blog1-index.png" alt="">

        <div class="blog-info">

          <span>PREPARO</span>

          <h3>
            Como preparar o café perfeito em casa
          </h3>

        </div>

      </div>

      <div class="blog-card">

        <img src="img/blog2-index.png" alt="">

        <div class="blog-info">

          <span>GUIA</span>

          <h3>
            Diferenças entre Arábica e Robusta
          </h3>

        </div>

      </div>

      <div class="blog-card">

        <img src="img/blog3-index.png" alt="">

        <div class="blog-info">

          <span>MÉTODOS</span>

          <h3>
            Os melhores métodos filtrados
          </h3>

        </div>

      </div>

    </div>

  </section>

  <footer class="footer">

    <div class="footer-grid">

      <div>

        <img src="img/logo.png" alt="">

        <p>
          Cafés especiais, acessórios premium
          e experiências criadas para transformar
          sua rotina.
        </p>

      </div>

      <div>

        <h3>Navegação</h3>

        <a href="index.php">Home</a>
        <a href="cafes.php">Cafés</a>
        <a href="cursos.php">Cursos</a>
        <a href="blog.php">Blog</a>

      </div>

      <div>

        <h3>Contato</h3>

        <p>(11) 99999-9999</p>

        <p>contato@pedrolimacoffee.com</p>

        <p>São Paulo - SP</p>

      </div>

      <div>

        <h3>Instagram</h3>

        <p>@pedrolimacoffee</p>

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