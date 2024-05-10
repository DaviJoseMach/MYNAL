<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/main.css">
  <link rel="shortcut icon" type="image/png" href="../assets/img/logos/icon_16_16 (1).png"> 

  <link rel="stylesheet" href="style/ofc.css">
  <link rel="stylesheet" href="style/menu.css">
  <title>Página incial - Mynal</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg ">
    <a style="" class="navbar-brand" href="main.php">MYNL.</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="debug-page/page.php"> API <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ofc.php"> OFICIAIS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" tabindex="-1" aria-disabled="true">PERFIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">SOBRE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/davvzin" tabindex="-1" aria-disabled="true">SUPORTE</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content">
    <div class="article-wrapper">
      <?php
      include '../api/view_posts.php';
      ?>
    </div>
  </div>
  <a href="debug-page/page.php"><button class="botao-patt">
      <i class="fa-solid fa-bug"></i>
    </button></a>
  <button class="botao-circular" data-toggle="modal" data-target="#exampleModal">
    <i class="fas fa-pen"></i>
  </button>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <b style="color=">
            <h5 class="modal-title" id="exampleModalLabel">Adicionar Artigo</h5>
          </b>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="../api/add.php" id="addForm" method="post">
          <div class="modal-body">
            <div class="form-group">

              <input type="text" class="form-control" id="titulo" placeholder="Título aqui :)" name="titulo">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="conteudo" name="conteudo" placeholder="Oque tá pegando?"
                rows="5"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa-solid fa-x"></i></button>
            <button type="submit" class="btn btn-primary">Adicionar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="scripts/evt.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>