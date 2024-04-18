<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../front/style/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php
    include '../connect.php';

    // Query SQL para selecionar todos os posts da tabela 'artigo'
    $sql = "SELECT id, titulo, conteudo, likem, deslike FROM artigo ORDER BY id DESC";

    // Executar a consulta SQL
    $resultado = $conexao->query($sql);

    // Verificar se a consulta retornou resultados
    if ($resultado->num_rows > 0) {

        while ($row = $resultado->fetch_assoc()) {
            echo "<div class='card'>";
            // Título do post
            echo "<div class='card-header vr'>" . $row["titulo"] . "</div>";
            // Conteúdo do post
            echo "<div class='card-body'>" . $row["conteudo"] . "</div>";
            // Enviado por
            echo "<div class='card-body qmp'>" . "<i class='fa-solid fa-user'></i> | @teste" . "</div>";

            echo "<center>";
            echo "<hr>";
            echo "<form action='' method='POST'>";
            echo "<input type='hidden' name='artigoId' value='" . $row['id'] . "'>";

            echo "<button type='submit' name='like' class='btn-icon'><i class='fa-solid fa-thumbs-up iconl'></i></button><span class='likeCount'>" . $row["likem"] . "</span>";
            echo "<button  type='submit' name='dislike' class='btn-icon desli'><i class='fa-solid fa-thumbs-down icont'></i></button> <span class='dslikeCount'>" . $row["deslike"] . "</span>";
            echo "<button class='btn-icon'><i class='fa-brands fa-artstation icontt'></i></button>";
            echo "</form>";
            echo "</center>";
            // Feche o card
            echo "</div>";
        }
    } else {
        echo "Não há posts para exibir.";
    }







    // Processamento do formulário de like
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['like'])) {
        // Verificar se o artigoId foi enviado
        if (isset($_POST['artigoId'])) {
            $artigoId = $_POST['artigoId'];

            $sqlSelectTitle = "SELECT titulo FROM artigo WHERE id = $artigoId";

            $resultadoTitulo = $conexao->query($sqlSelectTitle);

            if ($resultadoTitulo->num_rows > 0) {
                $rowTitulo = $resultadoTitulo->fetch_assoc();
                $artigoName = $rowTitulo["titulo"];

                $sqlUpdate = "UPDATE artigo SET likem = likem + 1 WHERE id = $artigoId";

                if ($conexao->query($sqlUpdate) === TRUE) {
                    echo "<script>alert('🎉 Wohoo! Você adicionou um like para o Artigo: $artigoName!');</script>";

                } else {
                    echo "<script>alert('Erro ao adicionar like para o artigo com ID $artigoId: " . $conexao->error . "');</script>";
                }
            } else {
                echo "<script>alert('Erro: Artigo com ID $artigoId não encontrado!');</script>";
            }
        } else {
            echo "<script>alert('Erro: ArtigoId não enviado!');</script>";
        }
    }


    // Processando dislike 
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dislike'])) {
        if (isset($_POST['artigoId'])) {
            $artigoId = $_POST['artigoId'];

            $sqlUpdate = "UPDATE artigo SET deslike = deslike + 1 WHERE id = $artigoId";

            if ($conexao->query($sqlUpdate) === TRUE) {

            } else {
                echo "<script>alert('Erro ao adicionar like para o artigo com ID " . $artigoId . ": " . $conexao->error . "');</script>";
            }
        }
    }

    $conexao->close();
    ?>

    <script src="https://kit.fontawesome.com/f0c76a2bf3.js" crossorigin="anonymous"></script>
</body>

</html>