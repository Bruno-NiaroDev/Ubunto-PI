<?php

if(isset($_POST['btn_login'])){

    include "conexao.php";

    $cnpj = $_POST['cnpj'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM instituicao WHERE cnpj = '$cnpj' AND senha = '$senha'";

    $result = mysqli_query($conexao,$query);

    while($row = mysqli_fetch_object($result)){
        $bd_cnpj = $row->cnpj;
        $bd_senha = $row->senha;
        
    }
    
    if($cnpj == $bd_cnpj && $senha == $bd_senha){
      header("Location: ../view/home.html");
    }else{
      echo "Senha incorreta!";

    }
}