<?php

function listaDoadores($conexao) {
    $doadores = array();
    $resultado = mysqli_query($conexao, "select * from doadores");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($doadores, $produto);
    }

    return $doadores;
}

// function insereProduto($conexao, $nomeDoador, $cep, $uf, $cidade, $bairro, $logradouro, $numero, $telefone, $celular, $complemento) {
//     $query = "insert into doadores (nomeDoador, cep, uf, cidade, bairro, logradouro, numero, telefone, celular, complemento)
//         values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
//     return mysqli_query($conexao, $query);
// 

function alteraDoador($conexao, $id, $nomeDoador, $cep, $uf, $cidade, $bairro, $logradouro, $numero, $telefone, $celular, $complemento) {
    $query = "update doadores set nomeDoador = '{$nomeDoador}', cep = {$cep}, uf = '{$uf}', cidade = '{$cidade}', bairro = '{$bairro}', logradouro = '{$logradouro}', numero = '{$numero}',
     telefone = '{$telefone}', celular = '{$celular}', complemento = '{$complemento}' where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function removeDoador($conexao, $id) {
    $query = "delete from doadores where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaDoador($conexao, $id) {
    $query = "select * from doadores where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
