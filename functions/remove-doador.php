<?php 
      include("conexao.php");
      include("banco-doadores.php");

$id = $_POST['id'];
removeDoador($conexao, $id);

header("Location: ../view/lista.php?removido=true");
die();
?>
