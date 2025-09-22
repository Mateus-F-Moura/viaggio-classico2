<?php include '../components/header.php'; ?>

<body>
  <main>
    <section class="hero">
      <div class="hero-banner">
        <div class="row d-flex justify-content-center mt-5">
          <img src="../assets/img/duomo1.jpg" alt="Duomo di Milano" style="width:100%;" />
        </div>
      </div>

      <h2 class="hero-title mt-0">Pontos turísticos em Milão</h2>
      <div class="hero-actions">
        <a href="./forms.php" class="btn btn-primary mt-3">Viaje e crie sua história</a>
      </div>
    </section>

    <section class="pontos container">
      <h2 class="section-subtitle">Pontos turísticos que você deve ver:</h2>

      <div class="row mt-4 align-content-center">
        <div class="col">
          <img src="../assets/img/Milan_Cathedral_from_Piazza_del_Duomo.jpg" alt="Duomo">
        </div>
        <div class="col">
          <h1>Duomo di Milano</h1>
          <p>A Catedral de Milão é uma obra-prima da arquitetura gótica, com centenas de pináculos e milhares de
            estátuas. Do terraço, é possível apreciar uma vista panorâmica de toda a cidade.</p>
        </div>
      </div>

      <div class="row mt-5 align-content-center">
        <div class="col">
          <img src="../assets/img/Veduta_della_Galleria_Vittorio_Emanuele_II_da_piazza_del_Duomo,_Milano.jpg" alt="Galleria">
        </div>
        <div class="col">
          <h1>Galleria Vittorio Emanuele II</h1>
          <p>Inaugurada em 1877, essa galeria é uma joia arquitetônica com teto de vidro e lojas de luxo, conectando a
            Piazza del Duomo à Piazza della Scala.</p>
        </div>
      </div>
    </section>

    <section class="curiosidade mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Moda e Design</h3>
                <h5 class="card-title">Capital fashion</h5>
                <p class="card-text">Milão é um centro mundial de moda e design — eventos como a Milan Fashion Week
                  tornam a cidade referência global.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Última Ceia</h3>
                <h5 class="card-title">Obra-prima</h5>
                <p class="card-text">A famosa pintura de Leonardo da Vinci está na Igreja Santa Maria delle Grazie e
                  exige reserva antecipada para visita.</p>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-stylized-title">Vida urbana</h3>
                <h5 class="card-title">Cultura contemporânea</h5>
                <p class="card-text">A cidade mistura história e modernidade, com vida noturna animada, bons museus e
                  restaurantes sofisticados.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

<?php include '../components/footer.php'; ?>
