<?php 
  include "../functions/conexao.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
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
            <li class="active"><a class="waves-effect" href="../view/home.php"><b>Home</b></a></li>
            <li><a class="waves-effect" href="../view/doadores_novo.html"><b>Cadastrar doadores</b></a></li>
            <li><a class="waves-effect" href="../view/lista.php"><b>Doadores</b></a></li>
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
        <li class="active"><a class="waves-effect menu center-align white-text blue accent-3" href="../view/home.php"><b>Home</b></a></li>
        <li><a class="waves-effect menu center-align white-text" href="../view/doadores_novo.html"><b>Cadastrar doadores</b></a></li>
        <li><a class="waves-effect menu center-align white-text" href="../view/lista.php"><b>Doadores</b></a></li>
      </ul>
    </div>

    <!-- Conteudo -->
    <div class="col s12 l10 conteudo">

      <!-- Todo o conteudo que ira conter na pagina home -->

      <div class="col s12 m6 l3">
        <div class="card darken-1 cartao">
          <div class="card-content white-text light-blue">
            <span class="card-title">Total arrecadado</span>
            <p class="num_relatorio"><?php
              $sql = "SELECT CASE WHEN SUM(valor) IS NULL THEN 0"
                      ." ELSE SUM(valor) END as totalDoacoes FROM "
                      ."doacoes WHERE instituicao_id = 5;";
              $resultado = mysqli_query($conexao, $sql);
              foreach($resultado as $doadores) :
                echo $doadores['totalDoacoes'];
                endforeach
            ?></p>
          </div>
          <div class="card-action light-blue darken-1">
            <p></p>

          </div>
        </div>
      </div>

      <div class="col s12 m6 l3">
        <div class="card cartao">
          <div class="card-content white-text teal accent-3">
            <span class="card-title">Total doadores</span>
            <p class="num_relatorio"><?php
              $sql = "SELECT COUNT(*) as totalDoadores FROM doadores "
                    ."WHERE status = TRUE AND instituicao_id = 5;";
                    $resultado = mysqli_query($conexao, $sql);
                    foreach($resultado as $doadores) :
                      echo $doadores['totalDoadores'];
                      endforeach
                  ?></p>
          
          </div>
          <div class="card-action teal accent-4">
            <p></p>

          </div>
        </div>
      </div>

      <div class="col s12 m6 l3">
        <div class="card cartao">
          <div class="card-content white-text blue-grey">
            <span class="card-title">Total arrecadado no mês</span>
            <p class="num_relatorio">10</p>
          </div>
          <div class="card-action blue-grey darken-2">
            <p></p>

          </div>
        </div>
      </div>

      <div class="col s12 m6 l3">
        <div class="card cartao">
          <div class="card-content white-text  purple lighten-2">
            <span class="card-title">Arrecadação REF ao mês</span>
            <p class="num_relatorio">0</p>
          </div>
          <div class="card-action purple lighten-1">
            <p></p>

          </div>
        </div>
      </div>
      <div class="col s12 m12 l6">
          <?php
            include_once("../functions/confirmacao_doadores.php")
          ?>
        
      </div>

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