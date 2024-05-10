<?php
// Verificar se o ID do registro foi enviado via GET
if (isset($_GET["id"])) {
    // Conexão com o banco de dados
    include '../../connect.php';

    // Obter o ID do registro a ser excluído
    $id = $_GET["id"];

    // Consulta SQL para excluir o registro com base no ID
    $sql = "DELETE FROM logv WHERE id = $id";

    if ($conexao->query($sql) === TRUE) {
        // Redirecionar de volta para a página principal após a exclusão bem-sucedida
        header("Location: log_adm.php");
        exit();
    } else {
        echo "Erro ao excluir o registro: " . $conexao->error;
    }

} else {
    // Se o ID do registro não foi enviado, redirecionar de volta para a página principal
    header("Location: index.php");
    exit();
}
?>
