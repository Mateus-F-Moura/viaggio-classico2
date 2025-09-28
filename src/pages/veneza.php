<?php include '../components/header.php'; ?>


<?php
// A lógica PHP para buscar o clima permanece no topo, isso está perfeito.
require_once '../api/clima.php';
$cidadeNome = "Veneza";
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
  <main style="margin: auto;">
    <section class="hero">
      <div class="hero-banner">
          <img src="../assets/img/rialto2.jpg" alt="Rialto" style="width:100%;">
          <?php include '../components/clima_hero.php'; ?>
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
