<?php include '../components/header.php'; ?>

<?php
// A lógica PHP para buscar o clima permanece no topo, isso está perfeito.
require_once '../api/clima.php';
$cidadeNome = "Milão";
$coordenadas = obterCoordenadas($cidadeNome);
$climaInfo = ['nome' => $cidadeNome];
if ($coordenadas) {
    $clima = obterClima($coordenadas['latitude'], $coordenadas['longitude']);
    if ($clima && isset($clima->current)) {
        $dadosAtuais = $clima->current;
        $climaInfo['temperatura'] = round($dadosAtuais->temperature_2m);
        $climaInfo['descricao'] = traduzirCodigoClima($dadosAtuais->weather_code);
        $climaInfo['sensacao'] = round($dadosAtuais->apparent_temperature);
        $climaInfo['umidade'] = $dadosAtuais->relative_humidity_2m;
    } else {
        $climaInfo['erro'] = "Não foi possível obter os dados do clima.";
    }
} else {
    $climaInfo['erro'] = "Não foi possível encontrar as coordenadas.";
}
?>

<style>
    .hero-banner {
        position: relative; /* Essencial para o posicionamento do widget */
    }
    .clima-widget {
        position: absolute;
        bottom: 20px; /* Posição a partir de baixo */
        left: 20px;   /* Posição a partir da esquerda */
        background: rgba(0, 0, 0, 0.5); /* Fundo semitransparente */
        color: #fff; /* Texto branco */
        padding: 10px 20px;
        border-radius: 12px;
        backdrop-filter: blur(5px); /* Efeito de vidro fosco (moderno) */
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .widget-icon {
        font-size: 2.5rem; /* Ícone grande */
        color: #ffc107; /* Cor amarela para o ícone, remetendo ao sol */
    }
    .widget-temp {
        font-size: 1.8rem;
        font-weight: 700;
        line-height: 1;
    }
    .widget-desc {
        font-size: 0.9rem;
        text-transform: capitalize;
    }
</style>

<body>
  <main>
    <section class="hero">
      <div class="hero-banner">
          <img src="../assets/img/duomo1.jpg" alt="Duomo di Milano" style="width:100%;" />
          <?php include '../components/clima_hero.php'; ?>
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
