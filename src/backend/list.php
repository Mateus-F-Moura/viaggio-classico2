<?php
include '../config/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Lista</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>
  <header id="topo"></header>
  <main>
    <div class="conteiner mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>
                Lista de usuários
                <a href="usuario-create.php" class="btn btn-primary float-end">Adicionar usuário</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Data Nascimento</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include '../config/conexao.php';

                  $sql = "SELECT id, nome, email, dataNascimento FROM users";
                  $result = $conn->query($sql);

                  if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['dataNascimento']) . "</td>";
                      echo "<td>";
                      echo "<a href='usuario-view.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-secondary btn-sm'>Visualizar</a> ";
                      echo "<a href='usuario-edit.php?id=" . htmlspecialchars($row['id']) . "' class='btn btn-success btn-sm'>Editar</a> ";
                      echo "<form action='usuario-delete.php' method='POST' class='d-inline'>";
                      echo "<input type='hidden' name='delete_id' value='" . htmlspecialchars($row['id']) . "'>";
                      echo "<button type='submit' name='delete-usuario' class='btn btn-danger btn-sm'>Excluir</button>";
                      echo "</form>";
                      echo "</td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='5'>Nenhum usuário encontrado.</td></tr>";
                  }
                  $conn->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer id="rodape"></footer>
  <script src="../js/carregarHeaderEfooter.js"></script>
</body>

</html>