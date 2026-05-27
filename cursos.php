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

  <title>Cursos</title>

  <link rel="stylesheet" href="css/cursos.css" />

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

  <section class="hero-courses">

    <div class="overlay"></div>

    <div class="hero-content">

      <span>CURSOS & WORKSHOPS</span>

      <h1>
        Transforme paixão
        por café em
        experiência.
      </h1>

      <p>
        Aprenda técnicas profissionais de preparo,
        latte art e métodos especiais com cursos
        desenvolvidos para iniciantes e amantes do café.
      </p>

      <a href="#cursos">
        <button>
          EXPLORAR CURSOS
        </button>
      </a>

    </div>

  </section>

  <section class="stats-section">

    <div class="stat-card">

      <h2>+2.500</h2>

      <p>Alunos formados</p>

    </div>

    <div class="stat-card">

      <h2>12</h2>

      <p>Cursos disponíveis</p>

    </div>

    <div class="stat-card">

      <h2>98%</h2>

      <p>Aprovação dos alunos</p>

    </div>

    <div class="stat-card">

      <h2>Online</h2>

      <p>Aulas em qualquer lugar</p>

    </div>

  </section>

  <section class="courses-section" id="cursos">

    <div class="section-title">

      <span>NOSSOS CURSOS</span>

      <h2>Aprenda com especialistas</h2>

    </div>

    <div class="courses-grid">

      <div class="course-card">

        <div class="course-image">

          <img src="img/curso1.jpg" alt="">

          <div class="course-tag">
            Bestseller
          </div>

        </div>

        <div class="course-content">

          <span>Barista Profissional</span>

          <h3>
            Curso Completo
            de Barista
          </h3>

          <p>
            Aprenda moagem, extração,
            vaporização de leite e técnicas
            utilizadas nas melhores cafeterias.
          </p>

          <div class="course-info">

            <div>
              <i class="fa-regular fa-clock"></i>
              24 horas
            </div>

            <div>
              <i class="fa-solid fa-location-dot"></i>
              Presencial
            </div>

          </div>

          <div class="course-footer">

            <h4>R$ 3.494,00</h4>

            <a href="https://loja.coffeelab.com.br/pd-1600f7-barista-completo-curso-de-barista-junior-senior.html?ct=&p=1&s=1">
              <button>
                VER MAIS
              </button>
            </a>

          </div>

        </div>

      </div>

      <div class="course-card">

        <div class="course-image">

          <img src="img/curso2.jpg" alt="">

          <div class="course-tag">
            Premium
          </div>

        </div>

        <div class="course-content">

          <span>Latte Art</span>

          <h3>
            Técnicas de
            Latte Art
          </h3>

          <p>
            Aprenda a criar desenhos incríveis
            utilizando leite vaporizado
            e espresso perfeito.
          </p>

          <div class="course-info">

            <div>
              <i class="fa-regular fa-clock"></i>
              12 horas
            </div>

            <div>
              <i class="fa-solid fa-location-dot"></i>
              Presencial
            </div>

          </div>

          <div class="course-footer" >

            <h4>R$ 1.859,00</h4>

            <a href="https://loja.coffeelab.com.br/pd-15929f-curso-de-barista-junior.html?ct=&p=1&s=1">
              <button>
                VER MAIS
              </button>
            </a>

          </div>

        </div>

      </div>

      <div class="course-card">

        <div class="course-image">

          <img src="img/curso3.jpg" alt="">

          <div class="course-tag">
            Workshop
          </div>

        </div>

        <div class="course-content">

          <span>Café em casa</span>

          <h3>
            Café em casa

          </h3>

          <p>
            Faça café da melhor forma do conforto da sua casa
          </p>

          <div class="course-info">

            <div>
              <i class="fa-regular fa-clock"></i>
              5 horas
            </div>

            <div>
              <i class="fa-solid fa-location-dot"></i>
              Presencial
            </div>

          </div>

          <div class="course-footer">

            <h4>R$ 450</h4>

            <a href="https://loja.coffeelab.com.br/pd-13b1c1-cafe-em-casa.html?ct=&p=1&s=1">
              <button>
                VER MAIS
              </button>
            </a>

          </div>

        </div>

      </div>

    </div>

  </section>

  <section class="benefits-section">

    <div class="benefits-content">

      <span>POR QUE ESCOLHER</span>

      <h2>
        Uma experiência completa
        para amantes do café.
      </h2>

      <p>
        Cursos desenvolvidos para transformar
        conhecimento em prática, com acesso
        a materiais exclusivos e suporte especializado.
      </p>

      <div class="benefits-grid">

        <div class="benefit-box">

          <i class="fa-solid fa-certificate"></i>

          <div>

            <h3>Certificado</h3>

            <p>Em todos os cursos</p>

          </div>

        </div>

        <div class="benefit-box">

          <i class="fa-solid fa-headset"></i>

          <div>

            <h3>Suporte</h3>

            <p>Equipe especializada</p>

          </div>

        </div>

        <div class="benefit-box">

          <i class="fa-solid fa-mobile-screen"></i>

          <div>

            <h3>Acesso Online</h3>

            <p>Em qualquer dispositivo</p>

          </div>

        </div>

        <div class="benefit-box">

          <i class="fa-solid fa-book-open"></i>

          <div>

            <h3>Material Exclusivo</h3>

            <p>Conteúdo premium incluso</p>

          </div>

        </div>

      </div>

    </div>

    <div class="benefits-image">

      <img src="img/cursos-banner.jpg" alt="">

    </div>

  </section>

  <section class="testimonial-section">

    <div class="section-title center">

      <span>AVALIAÇÕES</span>

      <h2>O que nossos alunos dizem</h2>

    </div>

    <div class="testimonial-grid">

      <div class="testimonial-card">

        <div class="stars">

          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>

        </div>

        <p>
          “O melhor curso de café que já fiz.
          Explicações claras e muito conteúdo prático.”
        </p>

        <h4>Lucas Andrade</h4>

      </div>

      <div class="testimonial-card">

        <div class="stars">

          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>

        </div>

        <p>
          “Aprendi latte art em poucas semanas.
          Experiência incrível e muito profissional.”
        </p>

        <h4>Marina Costa</h4>

      </div>

      <div class="testimonial-card">

        <div class="stars">

          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>

        </div>

        <p>
          “Os workshops presenciais são excelentes.
          Ambiente premium e professores incríveis.”
        </p>

        <h4>Felipe Rocha</h4>

      </div>

    </div>

  </section>

  <section class="newsletter">

    <div class="newsletter-content">

      <span>COMUNIDADE</span>

      <h2>
        Receba novidades
        e workshops exclusivos.
      </h2>

      <p>
        Cadastre-se para receber conteúdos,
        promoções e novas turmas diretamente no seu e-mail.
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
          Cafés especiais, cursos e experiências
          premium para apaixonados pelo universo do café.
        </p>

      </div>

      <div>

        <h3>Navegação</h3>

        <a href="index.php">Home</a>
        <a href="cafes.php">Cafés</a>
        <a href="blog.php">Blog</a>
        <a href="acessorios.php">Acessórios</a>

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