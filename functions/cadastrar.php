<?php

if(isset($_POST["btnCadastrar"])){

    include "conexao.php";
    
    $cnpj = $_POST['cnpj'];
    $nomeFantasia = $_POST['nomeFantasia'];
    $razaoSocial = $_POST['razaoSocial'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    
    $sqlInserir = "INSERT INTO instituicao (razaoSocial, cnpj, nomeFantasia, telefone, senha) VALUES ('$razaoSocial', $cnpj, '$nomeFantasia', '$telefone', '$senha')"; 
    if(mysqli_query($conexao,$sqlInserir) === true){
        header("Location: ../view/home.html");
    }else{
        echo mysqli_error($conexao);
         
        header("Location: ../view/cadastro.html?erro=ERRO AO CADASTRAR INSTITUICAO!");
    }
}else{

    header("Location: ../view/index.html");
}