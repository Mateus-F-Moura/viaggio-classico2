<?php
session_start();
require '../config/conexao.php';
?>

<?php include '../components/header.php'; ?>

<body>
    <main class="container my-5">
        <h2 class="section-subtitle">Editar Usuário</h2>

        <section class="mt-4">
            <?php
            if (isset($_GET['id'])) {
                $usuario_id = mysqli_real_escape_string($conexao, $_GET['id']);
                $sql = "SELECT * FROM viagem WHERE id = '$usuario_id'";
                $query = mysqli_query($conexao, $sql);

                if (mysqli_num_rows($query) > 0) {
                    $usuario = mysqli_fetch_array($query);
                    ?>
                    <form id="requestForm" class="needs-validation mt-3" action="../resources/acoes.php" method="post"
                        novalidate>
                        <input type="hidden" name="usuario_id" value="<?php echo $usuario['id']; ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="fullName" class="form-label">Nome completo</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" value="<?php echo $usuario['nome']; ?>" required>
                                <div class="invalid-feedback">Por favor informe seu nome.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $usuario['email']; ?>" required>
                                <div class="invalid-feedback">Por favor informe um email válido.</div>
                            </div>

                            <div class="col-md-4">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $usuario['telefone']; ?>">
                            </div>

                            <div class="col-md-4">
                                <label for="destination" class="form-label">Destino de interesse</label>
                                <select id="destination" name="destination" class="form-select" required>
                                    <option value="">Escolha...</option>
                                    <option value="roma" <?php if($usuario['destino'] == 'roma') echo 'selected'; ?>>Roma</option>
                                    <option value="veneza" <?php if($usuario['destino'] == 'veneza') echo 'selected'; ?>>Veneza</option>
                                    <option value="milao" <?php if($usuario['destino'] == 'milao') echo 'selected'; ?>>Milão</option>
                                    <option value="napoli" <?php if($usuario['destino'] == 'napoli') echo 'selected'; ?>>Nápoles</option>
                                </select>
                                <div class="invalid-feedback">Selecione um destino.</div>
                            </div>

                            <div class="col-md-4">
                                <label for="people" class="form-label">Pessoas</label>
                                <input type="number" class="form-control" id="people" name="people" min="1" value="<?php echo $usuario['pessoas']; ?>" required>
                                <div class="invalid-feedback">Informe o número de pessoas.</div>
                            </div>

                            <div class="col-md-6">
                                <label for="dateFrom" class="form-label">Data inicial (aprox.)</label>
                                <input type="date" class="form-control" id="dateFrom" name="dateFrom" value="<?php echo $usuario['data_inicio']; ?>">
                            </div>

                            <div class="col-md-6">
                                <label for="dateTo" class="form-label">Data final (aprox.)</label>
                                <input type="date" class="form-control" id="dateTo" name="dateTo" value="<?php echo $usuario['data_final']; ?>">
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Informações adicionais</label>
                                <textarea class="form-control" id="message" name="message" rows="4"
                                    placeholder="Preferências, orçamento, restrições alimentares..."><?php echo $usuario['complemento']; ?></textarea>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit" name="update_usuario">Enviar solicitação</button>
                                <a href="../pages/list.php" class="btn btn-secondary ms-2">Voltar</a>
                            </div>
                        </div>
                    </form>
                    <?php
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Usuário não encontrado</div>";
                }
            }
            ?>

            <div id="formSuccess" class="alert alert-success mt-4 d-none" role="alert">
                Solicitação enviada. Entraremos em contato em breve.
            </div>
        </section>
    </main>
</body>

<?php include '../components/footer.php'; ?>