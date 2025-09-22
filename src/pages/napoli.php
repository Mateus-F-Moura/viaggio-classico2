<?php include '../components/header.php'; ?>

<body>
  <main>
    <section class="hero">
      <div class="hero-banner">
        <div class="row d-flex justify-content-center mt-5">
          <img src="../assets/img/CastelDell'Ovo1.jpg" alt="Castel dell'Ovo" style="width:100%;" />
        </div>
      </div>

      <h2 class="hero-title mt-0">Pontos turísticos em Nápoles</h2>
      <div class="hero-actions">
        <a href="./forms.php" class="btn btn-primary mt-3">Viaje e crie sua história</a>
      </div>
    </section>

    <section class="pontos container">
      <h2 class="section-subtitle">Pontos turísticos que você deve ver:</h2>

      <div class="row mt-4 align-content-center">
        <div class="col">
          <img src="../assets/img/CastelDell'Ovo2.jpg" alt="Castel dell'Ovo">
        </div>
        <div class="col">
          <h1>Castel dell'Ovo</h1>
          <p>Localizado à beira-mar, o Castel dell’Ovo é uma das construções mais antigas da cidade, com origens que
            remontam à época romana.</p>
        </div>
      </div>

      <div class="row mt-5 align-content-center">
        <div class="col">
          <img src="../assets/img/museu1.jpg" alt="Museu">
        </div>
        <div class="col">
          <h1>Museu Nacional da Itália</h1>
          <p>O museu abriga peças recuperadas de Pompeia e Herculano, preservadas após a erupção do Vesúvio.</p>
        </div>
      </div>
    </section>

    <section class="curiosidade mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Berço da pizza</h3>
                <h5 class="card-title">Tradição gastronômica</h5>
                <p class="card-text">A pizza napolitana nasceu aqui: massa macia, borda alta e ingredientes simples.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Vesúvio</h3>
                <h5 class="card-title">Vulcão próximo</h5>
                <p class="card-text">O Vesúvio domina a paisagem e levou à preservação de cidades antigas como Pompeia.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Mercados vivos</h3>
                <h5 class="card-title">Sabor local</h5>
                <p class="card-text">Mercados como Pignasecca mostram a vida cotidiana e produtos frescos da região.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

<?php include '../components/footer.php'; ?>
