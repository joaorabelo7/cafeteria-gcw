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

  <title>Blog</title>

  <link rel="stylesheet" href="css/blog.css" />

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

  <section class="hero-blog">

    <div class="overlay"></div>

    <div class="hero-content">

      <span>CONTEÚDO & EXPERIÊNCIA</span>

      <h1>
        O universo
        do café
        especial.
      </h1>

      <p>
        Descubra receitas, métodos de preparo,
        curiosidades e conteúdos criados para
        apaixonados por cafés especiais.
      </p>

    </div>

  </section>

  <section class="featured-post">

    <div class="featured-image">

      <img src="img/blog-destaque.jpg" alt="">

    </div>

    <div class="featured-content">

      <span>DESTAQUE DA SEMANA</span>

      <h2>
        Como preparar o café perfeito
        em casa como um verdadeiro barista.
      </h2>

      <p>
        Aprenda técnicas profissionais,
        moagem ideal, temperatura correta
        e segredos para extrair o máximo
        sabor dos grãos especiais.
      </p>

      <div class="post-info">

        <div>
          <i class="fa-regular fa-clock"></i>
          8 min de leitura
        </div>

        <div>
          <i class="fa-regular fa-calendar"></i>
          25 Maio 2026
        </div>

      </div>

      <a href="https://www.pressca.com.br/blog/como-fazer-um-cafe-de-barista-profissional-em-casa/">
        <button>
          LER ARTIGO
        </button>
      </a>

    </div>

  </section>

  <section class="blog-section">

    <div class="section-title">

      <span>ÚLTIMOS ARTIGOS</span>

      <h2>Explore nosso blog</h2>

    </div>

    <div class="blog-grid">

      <article class="blog-card">

        <div class="blog-image">

          <img src="img/blog1.jpg" alt="">

        </div>

        <div class="blog-content">

          <span>Métodos</span>

          <h3>
            French Press:
            guia completo
            para iniciantes.
          </h3>

          <p>
            Descubra como extrair cafés
            intensos e aromáticos utilizando
            a prensa francesa.
          </p>

          <a href="https://bluebottlecoffee.com/us/eng/brew-guides/french-press">
            Ler mais
            <i class="fa-solid fa-arrow-right"></i>
          </a>

        </div>

      </article>

      <article class="blog-card">

        <div class="blog-image">

          <img src="img/blog2.jpg" alt="">

        </div>

        <div class="blog-content">

          <span>Grãos Especiais</span>

          <h3>
            Diferenças entre
            cafés arábica
            e robusta.
          </h3>

          <p>
            Conheça características,
            aromas e sabores de cada
            tipo de grão.
          </p>

          <a href="https://cornercoffeestore.com/arabica-vs-robusta-coffee-beans/">
            Ler mais
            <i class="fa-solid fa-arrow-right"></i>
          </a>

        </div>

      </article>

      <article class="blog-card">

        <div class="blog-image">

          <img src="img/blog3-index.png" alt="">

        </div>

        <div class="blog-content">

          <span>Receitas</span>

          <h3>
            5 receitas incríveis
            para amantes
            de café gelado.
          </h3>

          <p>
            Drinks refrescantes e sofisticados
            para transformar seu café em
            uma experiência premium.
          </p>

          <a href="https://blog.ucoffee.com.br/cafe-gelado/">
            Ler mais
            <i class="fa-solid fa-arrow-right"></i>
          </a>

        </div>

      </article>

      <article class="blog-card">

        <div class="blog-image">

          <img src="img/blog4.png" alt="">

        </div>

        <div class="blog-content">

          <span>Barista</span>

          <h3>
            Latte Art:
            técnicas para
            criar desenhos.
          </h3>

          <p>
            Aprenda os movimentos essenciais
            para criar artes incríveis
            no leite vaporizado.
          </p>

          <a href="https://blog.grancoffee.com.br/latte-art-conheca-a-tecnica-para-fazer-desenhos-no-cafe/">
            Ler mais
            <i class="fa-solid fa-arrow-right"></i>
          </a>

        </div>

      </article>

      <article class="blog-card">

        <div class="blog-image">

          <img src="img/blog5.png" alt="">

        </div>

        <div class="blog-content">

          <span>Cafeterias</span>

          <h3>
            Tendências do
            mercado de cafés
            especiais.
          </h3>

          <p>
            Conheça novidades e tendências
            do universo das cafeterias
            premium.
          </p>

          <a href="https://www.foodconnection.com.br/foodservice/tendencias-mercado-de-cafes/">
            Ler mais
            <i class="fa-solid fa-arrow-right"></i>
          </a>

        </div>

      </article>

      <article class="blog-card">

        <div class="blog-image">

          <img src="img/blog6.png" alt="">

        </div>

        <div class="blog-content">

          <span>Equipamentos</span>

          <h3>
            Os melhores
            acessórios para
            café em casa.
          </h3>

          <p>
            Descubra equipamentos essenciais
            para elevar sua experiência
            no preparo.
          </p>

          <a href="https://blog.ucoffee.com.br/acessorios-para-cafes/">
            Ler mais
            <i class="fa-solid fa-arrow-right"></i>
          </a>

        </div>

      </article>

    </div>

  </section>

  <section class="newsletter">

    <div class="newsletter-content">

      <span>NEWSLETTER</span>

      <h2>
        Receba conteúdos
        exclusivos sobre café.
      </h2>

      <p>
        Dicas, receitas, promoções
        e novidades diretamente
        no seu e-mail.
      </p>

      <form>

        <input
          type="email"
          placeholder="Digite seu e-mail"
        >

        <button>
          INSCREVER-SE
        </button>

      </form>

    </div>

  </section>

  <footer class="footer">

    <div class="footer-grid">

      <div>

        <img src="img/logo.png" alt="">

        <p>
          Cafés especiais, experiências
          únicas e conteúdo premium
          para apaixonados por café.
        </p>

      </div>

      <div>

        <h3>Navegação</h3>

        <a href="index.php">Home</a>
        <a href="cafes.php">Cafés</a>
        <a href="acessorios.php">Acessórios</a>
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