<?php

include '../../connect.php';
// Consulta SQL para selecionar todos os registros da tabela
$sql = "SELECT id, versao, descricao, status FROM logv";
$result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Log-Adm</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="../../assets/img/logos/icon_16_16 (1).png"> 
    <link rel="stylesheet" href="../../front/style/log_adm.css">
</head>
<body>


<nav class="sidebar justify-content-end">
    <ul class="list-unstyled">
      <li><a href="log_adm.php"><i class="fas fa-home"></i> LOG</a></li>
      <li><a href="../view_users.php"><i class="fas fa-user"></i> Perfis</a></li>
      <li><a href="#"><i class="fas fa-cog"></i> Artigos</a></li>
      <li><a href="../../front/main.php"><i class="fas fa-sign-out-alt"></i>MENU</a></li>
    </ul>
  </nav>

<div class="container">
    <br> <br>
    <div class="mb-3  d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdicionar"><i class="fas fa-plus"></i> Adicionar</button>
    </div>

    <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalEditarTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarTitle">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="att_registro.php" method="POST">
                    <input type="hidden" id="registroId" name="id">
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
                <th>Versão</th>
                <th>Descrição</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="tblack">
            <?php
            if ($result->num_rows > 0) {
                // Exibir os dados em cada linha da tabela
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='bcinza'>".$row["id"]."</td>";
                    echo "<td>".$row["versao"]."</td>";
                    echo "<td>".$row["descricao"]."</td>";
                    echo "<td>".$row["status"]."</td>";
                    echo "<td>";
                    echo '<button type="button" class="btn btn-warning editar-btn" data-toggle="modal" data-target="#modalEditar" data-id="'.$row["id"].'"><i class="fa-solid fa-pen"></i></button>';
                    echo '&nbsp;'; // Adiciona um espaço em branco entre os botões
                    echo '<a href="excluir_registro.php?id='.$row["id"].'" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>';
                    
                    echo "</td>";
                    echo "</tr>";
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

