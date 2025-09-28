<?php include '../components/header.php'; ?>


<?php
// A lógica PHP para buscar o clima permanece no topo, isso está perfeito.
require_once '../api/clima.php';
$cidadeNome = "Nápoles";
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
          <img src="../assets/img/CastelDell'Ovo1.jpg" alt="Castel dell'Ovo" style="width:100%;" />
          <?php include '../components/clima_hero.php'; ?>
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
