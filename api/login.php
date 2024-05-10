
<?php
include '../connect.php';
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos username e senha foram enviados
    if (isset($_POST['username']) && isset($_POST['password'])) {


        // Verifica se a conexão foi estabelecida com sucesso
        if ($conexao->connect_error) {
            die("Falha na conexão: " . $conexao->connect_error);
        }

        // Obtém o username e a senha do formulário
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Consulta SQL para verificar se o username e a senha correspondem a um registro na tabela 'users'
        $sql = "SELECT id, username FROM users WHERE username = '$username' AND senha = '$password'";
        $result = $conexao->query($sql);

        // Verifica se a consulta retornou algum resultado
        if ($result->num_rows > 0) {
            header("Location: log/log_adm.php");
        } else {
            // O username ou a senha estão incorretos
            echo "Nome de usuário ou senha incorretos. Por favor, tente novamente.";
        }
    }
}
?>
