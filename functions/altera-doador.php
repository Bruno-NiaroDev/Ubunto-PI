<?php

if(isset($_POST["btnDoadores"])){

    include "conexao.php";

    $id = $_POST["id"];
    $nomeDoador = $_POST["nomeDoador"];
    $cep = $_POST["cep"];
    $uf = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $bairro = $_POST["bairro"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $telefone = $_POST["telefone"];
    $celular = $_POST["celular"];
    $complemento = $_POST["complemento"];

    $sqlInserir = "UPDATE doadores SET nomeDoador = '".$nomeDoador."', cep = '".$cep."', uf = '".$uf."', cidade = '".$cidade."', bairro = '".$bairro."', logradouro = '".$logradouro."', numero = '".$numero."',
    telefone = '".$telefone."',celular = '".$celular."', complemento = '".$complemento."' WHERE id = '".$id."'";

    //"INSERT INTO doadores (nomeDoador, cep, uf, cidade, bairro, logradouro, numero, telefone, celular, complemento) VALUES 
      //                                  ('$nomeDoador', $cep, '$uf', '$cidade', '$bairro', '$logradouro', $numero, $telefone, $celular, '$complemento')"; 
      
    if(mysqli_query($conexao,$sqlInserir) === true){
        header("Location: ../view/lista.php");
    }else{
        echo mysqli_error($conexao);
         
        header("Location: ../view/doadores_novo.html?erro=ERRO AO CADASTRAR DOADOR!");
    }
}else{

    header("Location: ../view/lista.php");
}