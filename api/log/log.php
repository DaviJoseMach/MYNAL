<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD LogV</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <!-- Tabela para exibir os registros -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Versão</th>
                <th>Descrição</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../../connect.php';
            // Consulta SQL para selecionar todos os registros da tabela
            $sql = "SELECT id, versao, descricao, status FROM logv";
            $result = $conexao->query($sql);

            if ($result->num_rows > 0) {
                // Exibir os dados em cada linha da tabela
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["versao"]."</td>";
                    echo "<td>".$row["descricao"]."</td>";
                    // Verificar o status e adicionar um badge correspondente
                    if ($row["status"] == "concluido") {
                        echo "<td><span class='badge badge-success'>".$row["status"]."</span></td>";
                    } 
                    else if ($row["status"] == "atualizando..") {
                        echo "<td><span class='badge badge-warning'>".$row["status"]."</span></td>";
                    } 
                    else if ($row["status"] == "log") {
                        echo "<td><span class='badge badge-info'>".$row["status"]."</span></td>";
                    } 
                    else if ($row["status"] == "vixi") {
                        echo "<td><span class='badge badge-danger'>".$row["status"]."</span></td>";
                    } 
                    else {
                        echo "<td>".$row["status"]."</td>";
                    }
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
