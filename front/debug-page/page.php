<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de DEBUG | LOG</title>
        <link rel="stylesheet" href="../style/dbg.css">
        <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="shortcut icon" type="image/png"
            href="../../assets/img/logos/icon_16_16 (1).png">
    </head>
    <body>

        <nav class="navbar navbar-expand-lg ">
            <a class="navbar-brand" href="../main.php">MYNL.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../ofc.php"> OFICIAIS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login.php" tabindex="-1"
                            aria-disabled="true">PERFIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1"
                            aria-disabled="true">SOBRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/davvzin" tabindex="-1"
                            aria-disabled="true">SUPORTE</a>
                    </li>
                </ul>

            </div>
        </nav>

        <br>

        <div class="container mt-3">
            <center>
                <h2>Bug-Log Home</h2>
                <p style="text-align: justify;">Sejam bem-vindos à <b>Casa dos
                        Bugs!</b> Aqui, no MYNAL, registramos aventuras da
                    <b>API</b>, bugs do projeto e percalços. Desde problemas de
                    versão até histórias no <a class="linktx" href="https://github.com/DaviJoseMach/MYNAL">Github</a>,
                    vamos abraçar os bugs e transformá-los em recursos!</p>
                <div class="d-none d-sm-block">
                    <img style="height: 180px; width: 500px;"
                        src="../../assets/img/abb.png" alt>
                </div>
            </center>
        </div>

        <hr>


        <br>
        <?php
         include '../../api/log/log.php';
        ?>
       
        <script>
                document.getElementById('versao').addEventListener('change', function () {
                    var filtro = this.value;
                    var recursos = document.querySelectorAll('#lista-produtos li');

                    recursos.forEach(function (recurso) {
                        if (filtro === 'all' || recurso.classList.contains(filtro)) {
                            recurso.style.display = 'block';
                        } else {
                            recurso.style.display = 'none';
                        }
                    });
                });
        </script>
        <script
            src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
</html>
