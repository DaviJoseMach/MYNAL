<?php

include '../connect.php';
// Consulta SQL para selecionar todos os registros da tabela
$sql = "SELECT id, username, senha FROM users";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../../assets/img/logos/icon_16_16 (1).png"> 
    <link rel="stylesheet" href="../front/style/log_adm.css">
</head>
<body>


<nav class="sidebar justify-content-end">
    <ul class="list-unstyled">
      <li><a href="log/log_adm.php"><i class="fas fa-home"></i> LOG</a></li>
      <li><a href="view_users.php"><i class="fas fa-user"></i> Perfis</a></li>
      <li><a href="#"><i class="fas fa-cog"></i> Artigos</a></li>
      <li><a href="../../front/main.php"><i class="fas fa-sign-out-alt"></i>MENU</a></li>
    </ul>
  </nav>

<div class="container">
    <br> <br>
    <div class="mb-3  d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdicionar"><i class="fas fa-plus"></i> Adicionar</button>
    </div>





    
    <div class="modal fade" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="modalAdicionarTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAdicionarTitle">Adicionar Log</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="inserir_registro.php" method="POST">
                    <div class="form-group">
                        <label for="versao">Versão:</label>
                        <input type="text" class="form-control" id="versao" name="versao">
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição:</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="concluido">Concluído</option>
                            <option value="vixi">Erro</option>
                            <option value="log">Log</option>
                            <option value="atualizando..">Atualizando</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Tabela para exibir os registros -->
    <table class="table  table-striped">
        <thead class="thead-dark">
            <tr>
                <b><th>ID</th></b>
                <th>Username</th>
                <th>Senha</th>
                
            </tr>
        </thead>
        <tbody class="tblack">
            <?php
            if ($result->num_rows > 0) {
                // Exibir os dados em cada linha da tabela
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='bcinza'>".$row["id"]."</td>";
                    echo "<td>".$row["username"]."</td>";
                    echo "<td>".$row["senha"]."</td>";           
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum registro encontrado</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://kit.fontawesome.com/f0c76a2bf3.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.editar-btn').click(function() {
            var id = $(this).data('id');
            $('#registroId').val(id);
        });
    });
</script>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

