<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viaggio Classico</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <?php
      // Lógica PHP para ajustar os caminhos dependendo de onde a página está
      $path = $_SERVER['REQUEST_URI'];
      // Verifica se o caminho contém '/pages/'. Ajuste se sua estrutura for diferente.
      $is_in_pages_folder = strpos($path, '/pages/') !== false;
      $base_path = $is_in_pages_folder ? '../' : './';
    ?>

    <link rel="stylesheet" href="<?php echo $base_path; ?>assets/css/styles.css">
</head>
<body>

<header>
  <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo $base_path; ?>index.php">
        <img src="<?php echo $base_path; ?>assets/img/logo.png" width="150" alt="Logo">
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_path; ?>index.php">Sobre Nós</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_path; ?>pages/roma.php">Roma</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_path; ?>pages/veneza.php">Veneza</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_path; ?>pages/milan.php">Milão</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $base_path; ?>pages/napoli.php">Nápoles</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>