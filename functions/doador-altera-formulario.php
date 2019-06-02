<?php include("conexao.php");
      include("banco-doadores.php");

$id = $_GET['id'];
$doador = buscaDoador($conexao, $id);

?>

<form action="../functions/altera-doador.php" method="post">
    <input type="hidden" name="id" value="<?=$doador['id']?>" />
    <div class="row container">
       
       <div class="container">
         <form action="../functions/doadores.php" method="POST">
         <!-- <div class="row row1">
               <div class="input-field col s12 m12 s12 col1">
                 <input id="id" name="id" type="text" class="validate" placeholder="id" value="<?=$doador['id']?>">
               </div>
             </div> -->
           <div class="row row1">
             <div class="input-field col s12 m6 l6 col1">
               <input id="nomeDoador" name="nomeDoador" type="text" class="validate" placeholder="Nome Completo" value="<?=$doador['nomeDoador']?>">
             </div>
             <div class="input-field col s12 m6 l6 col1">
               <input id="cep" name="cep" type="text" class="validate" placeholder="CEP" value="<?=$doador['cep']?>" >
             </div>
           </div>
           <div class="row row1">
             <div class="input-field col s12 m6 l6 col1">
               <input id="uf" name="uf" type="text" class="validate" placeholder="UF" value="<?=$doador['uf']?>">
             </div>
             <div class="input-field col s12 m6 l6 col1">
               <input id="cidade" name="cidade" type="text" class="validate" placeholder="Cidade" value="<?=$doador['cidade']?>">
             </div>
           </div>
           <div class="row row1">
             <div class="input-field col s12 m6 l6 col1">
               <input id="bairro" name="bairro" type="text" class="validate" placeholder="Bairro"value="<?=$doador['bairro']?>" >
             </div>
             <div class="input-field col s12 m6 l6 col1">
               <input id="logradouro" name="logradouro" type="text" class="validate" placeholder="Logradouro" value="<?=$doador['logradouro']?>">
             </div>
           </div>
           <div class="row row1">
               <div class="input-field col s12 m12 l4 col1">
                 <input id="numero" name="numero" type="text"  class="validate" placeholder="Numero" value="<?=$doador['numero']?>">
               </div>
               <div class="input-field col s12 m12 l4 col1">
                 <input id="telefone" name="telefone" type="text" class="validate" placeholder="Telefone" value="<?=$doador['telefone']?>">
               </div>
               <div class="input-field col s12 m12 l4 col1">
                 <input id="celular" name="celular" type="text" class="validate" placeholder="Celular" value="<?=$doador['celular']?>">
               </div>
             </div>
             <div class="row row1">
               <div class="input-field col s12 m12 s12 col1">
                 <input id="complemento" name="complemento" type="text" class="validate" placeholder="Complemento" value="<?=$doador['complemento']?>">
               </div>
             </div>
             <div class='row row1'>
               <button type='submit' name='btnDoadores' class='col s12 btn btn-large waves-effect blue accent-2'>Alterar</button>
             </div>
         </form>
       </div>
 
     </div>
</form>