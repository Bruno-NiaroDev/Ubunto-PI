<?php 
      include("conexao.php");
      include("banco-doadores.php"); 
      include("banco_doacoes.php");
?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <div class='card-panel'>
                    Deletado com sucesso
                  </div>
<?php } ?>

<table class="striped responsive-table tabela">
    <thead>
        <tr>
            <th>Nome</th>
        </tr>
    </thead>
    <?php
        $doadores = listaDoadores($conexao);
        foreach($doadores as $doador) :
    ?>
    <tr>
        <td><?= $doador['nomeDoador'] ?></td>
        <td><a class="waves-effect waves-light btn modal-trigger" href="#modal-<?=  $doador['id']?>">Confirmar</a> </td>
    </tr>
    

    <!-- Modal Structure -->
    <form action="../functions/banco_doacoes.php" method="post">
        <div id="modal-<?=  $doador['id']?>" class="modal">
            <div class="modal-content">
                <div class="row">
                    <div class="input-field col s6">
                        <input disabled value="<?= $doador['nomeDoador']?>" id="disabled" type="text" class="validate">
                        <label for="disabled">Nome</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="first_name2" type="text" name="valor" class="validate">
                        <label class="active" for="first_name2">Valor doado</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button href="#!" name="btnDoacao" type="submit" value="<?= $doador['nomeDoador']?>"  class="modal-close waves-effect waves-green btn-flat">Confirmar</button>
            </div>
        </div>
    </form>
    <?php
        endforeach
    ?>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/JavaScript">
        
        $(document).ready(function(){
        $('.modal').modal();
        });
      </script>
      
      <script type="text/JavaScript">
        
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });   
      </script>
</table>

