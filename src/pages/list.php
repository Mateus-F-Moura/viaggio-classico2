<?php
include '../config/conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lista</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
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
                  <a href="usuario-create.php" class="btn btn-primary float-end"
                    >Adicionar usuário</a
                  >
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
                    <tr>
                      <td>001</td>
                      <td>Teste</td>
                      <td>teste@gmail.com</td>
                      <td>01/01/01</td>
                      <td>
                        <a href="" class="btn btn-secondary btn-sm"
                          >Visualizar</a
                        >
                        <a href="" class="btn btn-success btn-sm"
                          >Editar</a
                        >
                        <form action="" method="POST" class="d-inline">
                            <button type="submit" name="delete-usuario" value="1" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                      </td>
                    </tr>
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
