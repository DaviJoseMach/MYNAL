<?php
// Inclua o arquivo connect.php para estabelecer a conexão com o banco de dados
include '../connect.php';

// Verifique se o formulário foi submetido via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se os campos titulo e conteudo foram enviados
    if (isset($_POST["titulo"]) && isset($_POST["conteudo"])) {

        // Prepare a consulta SQL para inserir um novo artigo
        $sql = "INSERT INTO artigo (titulo, conteudo) VALUES (?, ?)";

        // Prepara a instrução SQL
        $stmt = $conexao->prepare($sql);

        // Verifica se a preparação da instrução foi bem-sucedida
        if ($stmt) {
            // Vincula os parâmetros
            $stmt->bind_param("ss", $_POST["titulo"], $_POST["conteudo"]);

            // Executa a instrução SQL
            if ($stmt->execute()) {
                echo "Artigo adicionado com sucesso!";
            } else {
                echo "Erro ao adicionar o artigo.";
            }

            // Fecha a instrução
            $stmt->close();
        } else {
            echo "Erro ao preparar a instrução SQL.";
        }
    } else {
        echo "Por favor, forneça um título e conteúdo para o artigo.";
    }
} else {
    echo "Acesso negado.";
}

// Não feche a conexão aqui, pois ela ainda é necessária para a execução da consulta SQL
// $conexao->close();
?>