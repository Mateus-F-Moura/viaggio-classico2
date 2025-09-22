<?php include '../components/header.php'; ?>

<body>
  <main style="margin: auto;">
    <section class="hero">
      <div class="hero-banner">
        <div class="row d-flex justify-content-center mt-5">
          <img src="../assets/img/rialto2.jpg" alt="Rialto" style="width:100%;">
        </div>
      </div>

      <h2 class="hero-title mt-0">Pontos turísticos em Veneza</h2>
      <div class="hero-actions">
        <a href="./forms.php" class="btn btn-primary mt-3">Viaje e crie sua história</a>
      </div>
    </section>

    <section class="pontos container">
      <h2 class="section-subtitle">Pontos turísticos que você deve ver:</h2>

      <div class="row mt-4 align-content-center">
        <div class="col">
          <img src="../assets/img/rialto1.jpg" alt="Ponte de Rialto">
        </div>
        <div class="col">
          <h1>Ponte de Rialto</h1>
          <p>A Ponte de Rialto é a mais antiga a cruzar o Grande Canal, concluída em 1591. Seu arco de pedra e as lojas
            a ladeiam, criando uma experiência única.</p>
        </div>
      </div>

      <div class="row mt-5 align-content-center">
        <div class="col">
          <img src="../assets/img/sanmarco1.jpg" alt="Piazza San Marco">
        </div>
        <div class="col">
          <h1>Piazza San Marco</h1>
          <p>A Piazza San Marco é o coração de Veneza, cercada por construções históricas como a Basílica de São Marcos e
            o Palácio Ducal.</p>
        </div>
      </div>
    </section>

    <section class="curiosidade mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Canais e ilhas</h3>
                <h5 class="card-title">Cidade aquática</h5>
                <p class="card-text">Veneza é formada por mais de 100 ilhas ligadas por pontes — seu transporte principal
                  é por barco.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Gôndolas</h3>
                <h5 class="card-title">Tradição náutica</h5>
                <p class="card-text">As gôndolas e os vaporetti são marcas registradas da cidade e parte da experiência local.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Carnaval</h3>
                <h5 class="card-title">Máscaras e festas</h5>
                <p class="card-text">O carnaval de Veneza é famoso pelas máscaras elegantes e eventos que trazem turistas do mundo todo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

<?php include '../components/footer.php'; ?>
