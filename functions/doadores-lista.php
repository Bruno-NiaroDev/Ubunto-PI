<?php 
      include("conexao.php");
      include("banco-doadores.php"); ?>

<?php if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
    <div class='card-panel'>
                    Deletado com sucesso
                  </div>
<?php } ?>

<table class="striped responsive-table tabela">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>CEP</th>
        </tr>
    </thead>
    <?php
        $doadores = listaDoadores($conexao);
        foreach($doadores as $doador) :
    ?>
    <tr>
        <td><?= $doador['nomeDoador'] ?></td>
        <td><?= $doador['telefone'] ?></td>
        <td><?= $doador['cep'] ?></td>
        <td><a class="btn blue" href="../view/alterar.php?id=<?=$doador['id']?>">alterar</a></td>
        <td>
            <form action="../functions/remove-doador.php" method="post">
                <input type="hidden" name="id" value="<?=$doador['id']?>" />
                <button class="btn red">remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

