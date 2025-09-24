<?php include '../components/header.php'; ?>

<body>
  <main class="container my-5">
    <h2 class="section-subtitle">Viaje e crie sua história</h2>

    <section class="mt-4">
      <form id="requestForm" class="needs-validation mt-3" action="../resources/acoes.php" method="post" novalidate>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="fullName" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
            <div class="invalid-feedback">Por favor informe seu nome.</div>
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Por favor informe um email válido.</div>
          </div>

          <div class="col-md-4">
            <label for="phone" class="form-label">Telefone</label>
            <input type="tel" class="form-control" id="phone" name="phone">
          </div>

          <div class="col-md-4">
            <label for="destination" class="form-label">Destino de interesse</label>
            <select id="destination" name="destination" class="form-select" required>
              <option value="">Escolha...</option>
              <option value="roma">Roma</option>
              <option value="veneza">Veneza</option>
              <option value="milao">Milão</option>
              <option value="napoli">Nápoles</option>
            </select>
            <div class="invalid-feedback">Selecione um destino.</div>
          </div>

          <div class="col-md-4">
            <label for="people" class="form-label">Pessoas</label>
            <input type="number" class="form-control" id="people" name="people" min="1" value="2" required>
            <div class="invalid-feedback">Informe o número de pessoas.</div>
          </div>

          <div class="col-md-6">
            <label for="dateFrom" class="form-label">Data inicial (aprox.)</label>
            <input type="date" class="form-control" id="dateFrom" name="dateFrom">
          </div>

          <div class="col-md-6">
            <label for="dateTo" class="form-label">Data final (aprox.)</label>
            <input type="date" class="form-control" id="dateTo" name="dateTo">
          </div>

          <div class="col-12">
            <label for="message" class="form-label">Informações adicionais</label>
            <textarea class="form-control" id="message" name="message" rows="4"
              placeholder="Preferências, orçamento, restrições alimentares..."></textarea>
          </div>

          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="create_usuario">Enviar solicitação</button>
            <a href="../index.php" class="btn btn-secondary ms-2">Voltar</a>
          </div>
        </div>
      </form>

      <div id="formSuccess" class="alert alert-success mt-4 d-none" role="alert">
        Solicitação enviada. Entraremos em contato em breve.
      </div>
    </section>
  </main>
</body>

<?php include '../components/footer.php'; ?>