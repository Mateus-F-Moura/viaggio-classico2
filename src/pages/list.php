<?php include '../components/header.php'; ?>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Lista de Usuários 
                            <a href="forms.php" class="btn btn-primary float-end">Adicionar Usuário</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Destino</th>
                                    <th>Pessoas</th>
                                    <th>Data de Inicio</th>
                                    <th>Data de Fim</th>
                                    <th>Complemento</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Conexão com o banco de dados
                                $conexao = new mysqli('localhost', 'root', '', 'viaggio');

                                // Verifica conexão
                                if ($conexao->connect_error) {
                                    die("Conexão falhou: " . $conexao->connect_error);
                                }

                                // Consulta para obter usuários
                                $sql = "SELECT id, nome, email, telefone, destino, pessoas, data_inicio, data_final, complemento FROM viagem";
                                $result = $conexao->query($sql);

                                if ($result->num_rows > 0) {
                                    // Saída de cada linha
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>
                                                <td>" . $row["id"] . "</td>
                                                <td>" . $row["nome"] . "</td>
                                                <td>" . $row["email"] . "</td>
                                                <td>" . $row["telefone"] . "</td>
                                                <td>" . $row["destino"] . "</td>
                                                <td>" . $row["pessoas"] . "</td>
                                                <td>" . $row["data_inicio"] . "</td>
                                                <td>" . $row["data_final"] . "</td>
                                                <td>" . $row["complemento"] . "</td>
                                                <td>
                                                    <a href='../resources/edit.php?id=" . $row["id"] . "' class='btn btn-warning btn-sm'>Editar</a>
                                                    <form action='../resources/acoes.php' method='POST' class='d-inline'>
                                                        <button type='submit' name='delete_usuario' value='" . $row["id"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Tem certeza que deseja excluir este usuário?\")'>Excluir</button>
                                                    </form>
                                                </td>
                                              </tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='9'>Nenhum usuário encontrado</td></tr>";
                                }
                                $conexao->close();
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include '../components/footer.php'; ?>