<?php

if(isset($_POST["btnDoadores"])){

    include "conexao.php";
    
    $nomeDoador = $_POST['nomeDoador'];
    $cep = $_POST['cep'];
    $uf = $_POST['uf'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $complemento = $_POST['complemento'];
    
    $sqlInserir = "INSERT INTO doadores (nomeDoador, cep, uf, cidade, bairro, logradouro, numero, telefone, celular, complemento) VALUES 
                                        ('$nomeDoador', $cep, '$uf', '$cidade', '$bairro', '$logradouro', '$numero', '$telefone', '$celular', '$complemento')"; 
    if(mysqli_query($conexao,$sqlInserir) === true){
        header("Location: ../view/doadores.html");
    }else{
        echo mysqli_error($conexao);
         
        header("Location: ../view/doadores.html?erro=ERRO AO CADASTRAR DOADOR!");
    }
}else{

    header("Location: ../view/doadores.html");
}