<?php
    include '../../connect.php';

    // Preparar e executar a declaração de inserção
    $versao = $_POST["versao"];
    $descricao = $_POST["descricao"];
    $status = $_POST["status"];

    $sql = "INSERT INTO logv (versao, descricao, status) VALUES ('$versao', '$descricao', '$status')";
    if ($conexao->query($sql) === TRUE) {
        // Redirecionar de volta para a página principal após a inserção
        header("Location: log_adm.php");
        exit();
    } else {
        echo "Erro ao inserir o registro: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados


?>
