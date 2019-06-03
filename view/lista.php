<?php
    include("../functions/conexao.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Lista de doadores</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src='main.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="row tamanho">
        <div class="col s12 l2">
            <nav>
                <div class="nav-wrapper blue accent-2">
                  <a href="#"><img src="../img/elusen.png" style="height: 100px; margin-top: -20px"></a>
                    <!-- menu Dispositivos Moveis -->
                    <ul id="slide-out" class="sidenav">
                        <li><a class="subheader">Menu</a></li>
                        <li>
                            <div class="divider"></div>
                        </li>
                        <li><a class="waves-effect" href="../view/home.php">Home</a></li>
                        <li><a class="waves-effect" href="../view/doadores_novo.html">Cadastrar doadores</a></li>
                        <li><a class="waves-effect" href="../view/lista.php">Lista</a></li>
                    </ul>
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>
        <div class="col l10 hide-on-med-and-down">
            <nav>
                <div class="nav-wrapper white">
                    <a href="#" class="brand-logo black-text">Admin</a>
                </div>
            </nav>
        </div>
    </div>

    <div class="row corpoSite">
        <!-- Menu lateral -->
        <div class="col s2 menuLateral hide-on-med-and-down blue accent-2">
            <ul id="nav-mobile" class="hide-on-med-and-down li ">
                <li><a class="waves-effect menu center-align black-text" href="../view/home.php">Home</a></li>
                <li><a class="waves-effect menu center-align black-text" href="../view/doadores_novo.html">Cadastrar doadores</a></li>
                <li><a class="waves-effect menu center-align black-text" href="../view/lista.php">Lista</a></li>
            </ul>
        </div>
        <div class="col s12 m12 l2 hide-on-med-and-down">
        
        </div>
        <div class="col s12 m12 l6">
            <?php
                include_once("../functions/doadores-lista.php")
            ?>
        </div>
</div>
    <footer class="page-footer white">
        <div class="footer-copyright">
            <div class="container black-text">
                © 2014 Copyright Text
                <a class="black-text right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <!-- Importando arquivos jquery e JavaScript do materialize -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Configuração jquery e JavaScript -->
    <script type="text/JavaScript">
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, options);
            });
            $(document).ready(function(){
            $('.sidenav').sidenav();
            }); 
          </script>

</body>

</html>