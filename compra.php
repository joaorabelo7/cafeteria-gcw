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

  <title>Finalizar Compra</title>

  <link rel="stylesheet" href="css/compra.css" />

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

  <section class="checkout-hero">

    <div class="checkout-hero-content">

      <span>FINALIZAR COMPRA</span>

      <h1>Seu Pedido</h1>

    </div>

  </section>

  <section class="checkout-wrapper">

    <div class="checkout-left">

      <div class="checkout-block">

        <h2>
          <i class="fa-solid fa-bag-shopping"></i>
          Itens do Pedido
        </h2>

        <div class="order-item" id="orderItem">

          <div class="order-item-info">

            <h3 id="productName">Café Serrano</h3>

            <span id="productSub">100% Arábica</span>

          </div>

          <div class="order-item-qty">

            <button onclick="changeQty(-1)">−</button>
            <span id="qtyDisplay">1</span>
            <button onclick="changeQty(1)">+</button>

          </div>

          <h4 id="itemTotal">R$ 54,90</h4>

        </div>

      </div>

      <div class="checkout-block">

        <h2>
          <i class="fa-solid fa-truck"></i>
          Dados de Entrega
        </h2>

        <div class="form-grid">

          <div class="field full">
            <label>Nome completo</label>
            <input type="text" placeholder="Seu nome completo" />
          </div>

          <div class="field full">
            <label>E-mail</label>
            <input type="email" placeholder="seu@email.com" />
          </div>

          <div class="field">
            <label>CPF</label>
            <input type="text" placeholder="000.000.000-00" />
          </div>

          <div class="field">
            <label>Telefone</label>
            <input type="text" placeholder="(11) 99999-9999" />
          </div>

          <div class="field">
            <label>CEP</label>
            <input type="text" placeholder="00000-000" />
          </div>

          <div class="field full-stretch">
            <label>Endereço</label>
            <input type="text" placeholder="Rua, número, complemento" />
          </div>

          <div class="field">
            <label>Cidade</label>
            <input type="text" placeholder="Sua cidade" />
          </div>

          <div class="field">
            <label>Estado</label>
            <input type="text" placeholder="SP" />
          </div>

        </div>

        <div class="frete-options">

          <p class="frete-title">Opção de frete</p>

          <label class="frete-card">
            <input type="radio" name="frete" value="12.90" checked onchange="updateFrete(this)">
            <div class="frete-info">
              <strong>Econômico</strong>
              <span>7–12 dias úteis</span>
            </div>
            <span class="frete-price">R$ 12,90</span>
          </label>

          <label class="frete-card">
            <input type="radio" name="frete" value="24.90" onchange="updateFrete(this)">
            <div class="frete-info">
              <strong>Expresso</strong>
              <span>2–4 dias úteis</span>
            </div>
            <span class="frete-price">R$ 24,90</span>
          </label>

        </div>

      </div>

      <div class="checkout-block">

        <h2>
          <i class="fa-solid fa-credit-card"></i>
          Pagamento
        </h2>

        <div class="payment-tabs">

          <button class="pay-tab active" onclick="switchTab('cartao', this)">
            <i class="fa-solid fa-credit-card"></i>
            Cartão
          </button>

          <button class="pay-tab" onclick="switchTab('pix', this)">
            <i class="fa-brands fa-pix"></i>
            PIX
          </button>

          <button class="pay-tab" onclick="switchTab('boleto', this)">
            <i class="fa-solid fa-barcode"></i>
            Boleto
          </button>

        </div>

        <div class="pay-panel" id="panel-cartao">

          <div class="form-grid">

            <div class="field full">
              <label>Número do cartão</label>
              <input type="text" placeholder="0000 0000 0000 0000" />
            </div>

            <div class="field full">
              <label>Nome do titular</label>
              <input type="text" placeholder="Como no cartão" />
            </div>

            <div class="field">
              <label>Validade</label>
              <input type="text" placeholder="MM/AA" />
            </div>

            <div class="field">
              <label>CVV</label>
              <input type="text" placeholder="000" />
            </div>

          </div>

        </div>

        <div class="pay-panel hidden" id="panel-pix">

          <div class="pix-info">

            <i class="fa-solid fa-qrcode"></i>

            <p>
              Após confirmar o pedido, um QR Code
              será gerado para pagamento via PIX.
              O prazo de validade é de 30 minutos.
            </p>

          </div>

        </div>

        <div class="pay-panel hidden" id="panel-boleto">

          <div class="boleto-info">

            <i class="fa-solid fa-barcode"></i>

            <p>
              O boleto será gerado após a confirmação
              do pedido. Vencimento em 3 dias úteis.
              A aprovação ocorre em até 2 dias úteis.
            </p>

          </div>

        </div>

      </div>

    </div>

    <aside class="checkout-summary">

      <div class="summary-box">

        <h3>Resumo</h3>

        <div class="summary-row">
          <span id="summaryName">Café Serrano × 1</span>
          <span id="summaryItemPrice">R$ 54,90</span>
        </div>

        <div class="summary-row">
          <span>Frete</span>
          <span id="summaryFrete">R$ 12,90</span>
        </div>

        <div class="summary-divider"></div>

        <div class="summary-row total">
          <span>Total</span>
          <span id="summaryTotal">R$ 67,80</span>
        </div>

        <button class="btn-finalizar" onclick="finalizarPedido()">
          FINALIZAR PEDIDO
        </button>

        <div class="summary-badges">

          <span><i class="fa-solid fa-lock"></i> Pagamento seguro</span>
          <span><i class="fa-solid fa-rotate-left"></i> 30 dias de garantia</span>

        </div>

      </div>

    </aside>

  </section>

  <div class="modal-overlay" id="modal">

    <div class="modal-box">

      <i class="fa-solid fa-circle-check"></i>

      <h2>Pedido confirmado!</h2>

      <p>
        Obrigado pela sua compra.
        Você receberá um e-mail com os detalhes em breve.
      </p>

      <a href="index.php">
        <button>Voltar ao início</button>
      </a>

    </div>

  </div>

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

  // menu hamburger
  const menuToggle = document.querySelector('.menu-toggle');
  const menu = document.querySelector('.menu');

  if(menuToggle && menu){
    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('active');
    });
  }

  // menu usuario
  const userToggle = document.getElementById('userToggle');
  const dropdownMenu = document.getElementById('dropdownMenu');

  if(userToggle && dropdownMenu){

    userToggle.addEventListener('click', (e) => {
      e.stopPropagation();
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

  }

  // porduto
  const params = new URLSearchParams(window.location.search);

  const name  = params.get('name')  || 'Produto';
  const price = parseFloat(params.get('price')) || 0;
  const sub   = params.get('sub')   || '';

  let qty   = 1;
  let frete = 12.90;

  document.getElementById('productName').textContent = name;
  document.getElementById('productSub').textContent  = sub;

  function fmt(val) {
    return 'R$ ' + val.toFixed(2).replace('.', ',');
  }

  function render() {

    document.getElementById('qtyDisplay').textContent       = qty;

    document.getElementById('itemTotal').textContent        =
      fmt(price * qty);

    document.getElementById('summaryName').textContent      =
      name + ' × ' + qty;

    document.getElementById('summaryItemPrice').textContent =
      fmt(price * qty);

    document.getElementById('summaryFrete').textContent     =
      fmt(frete);

    document.getElementById('summaryTotal').textContent     =
      fmt((price * qty) + frete);

  }

  function changeQty(delta) {

    qty = Math.max(1, qty + delta);

    render();

  }

  function updateFrete(radio) {

    frete = parseFloat(radio.value);

    render();

  }

  function switchTab(tab, btn) {

    document
      .querySelectorAll('.pay-tab')
      .forEach(b => b.classList.remove('active'));

    document
      .querySelectorAll('.pay-panel')
      .forEach(p => p.classList.add('hidden'));

    btn.classList.add('active');

    document
      .getElementById('panel-' + tab)
      .classList.remove('hidden');

  }

  function finalizarPedido() {

    document
      .getElementById('modal')
      .classList.add('active');

  }

  render();

</script>

</body>
</html>
