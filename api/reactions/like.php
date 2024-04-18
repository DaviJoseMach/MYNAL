<?php
// Verifique se a solicitação é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se o parâmetro artigoId foi enviado na solicitação
    if (isset($_POST['artigoId'])) {
        // Conecte-se ao banco de dados (substitua as credenciais conforme necessário)
        include '../../connect.php';

        // Verifique a conexão com o banco de dados
        if ($conexao->connect_error) {
            die("Erro de conexão: " . $conexao->connect_error);
        }

        // Prepare e execute a consulta para aumentar o número de likes
        $artigoId = $_POST['artigoId'];
        $sql = "UPDATE artigo SET likes = likes + 1 WHERE id = $artigoId";

        if ($conexao->query($sql) === TRUE) {
            // Se a consulta foi bem-sucedida, envie uma resposta de sucesso
            http_response_code(200); // OK
            echo "Likes aumentados com sucesso para o artigo com ID $artigoId!";
        } else {
            // Se ocorreu algum erro na consulta, envie uma resposta de erro
            http_response_code(500); // Internal Server Error
            echo "Erro ao aumentar likes: " . $conexao->error;
        }

        // Feche a conexão com o banco de dados
        $conexao->close();
    } else {
        // Se o parâmetro artigoId não foi enviado, envie uma resposta de erro
        http_response_code(400); // Bad Request
        echo "Parâmetro artigoId ausente na solicitação!";
    }
} else {
    // Se a solicitação não for do tipo POST, envie uma resposta de erro
    http_response_code(405); // Method Not Allowed
    echo "Solicitação inválida! Apenas solicitações do tipo POST são permitidas.";
}
?>