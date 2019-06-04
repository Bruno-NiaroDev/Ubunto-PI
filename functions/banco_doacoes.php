<?php

function listaDoacoes($conexao) {
    $doacao = array();
    $resultado = mysqli_query($conexao, "select * from doacoes");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($doacao, $produto);
    }

    return $doacao;
}

// function insereDoacao($conexao, $id, $valor, $data, $instituicao_id, $doadores_id) {
//     $query = "insert into doacoes (id, valor, data, instituicao_id, doadores_id)
//         values ('{$id}', {$valor}, '{$data}', {$instituicao_id}, {$doadores_id})";
//     return mysqli_query($conexao, $query);


function alterarDoacao($conexao, $id, $valor, $data, $instituicao_id, $doadores_id) {
    $query = "update doacoes set id = '{$id}', valor = {$valor}, data = '{$data}', instituicao_id = '{$instituicao_id}', doadores_id = '{$doadores_id}'";
    return mysqli_query($conexao, $query);
}

function removeDoacao($conexao, $id) {
    $query = "delete from doacoes where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaDoacao($conexao, $id) {
    $query = "select * from doacoes where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}
