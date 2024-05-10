<?php
include '../../connect.php';

// Verifica se o ID foi enviado através do formulário
if(isset($_POST['id'])) {
    // Recupera os dados do formulário
    $id = $_POST['id'];
    $versao = $_POST['versao'];
    $descricao = $_POST['descricao'];
    $status = $_POST['status'];

    // Realiza a atualização no banco de dados
    $sql = "UPDATE logv SET versao='$versao', descricao='$descricao', status='$status' WHERE id=$id";
    echo $sql; // Imprime a consulta SQL para depurar
    

    if ($conexao->query($sql) === TRUE) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro: " . $conexao->error;
    }
} else {
    echo "ID do registro não foi enviado!";
}
?>
