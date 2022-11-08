<?php

// resgate de dados da tela
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$quantidade = $_POST["quantidade"];
$valor = $_POST["valor"];
$fornecedor = $_POST["fornecedor"];


//abrir conexão com o banco de dados.
include_once'./conexao1.php';

//montar o sql de gravação
//(null, 'ana', 'ana@gmail.com', '4444-3333', '2022-11-03');
$sql = "insert into produto values(null,'".$nome."','".$descricao."','".$quantidade."','".$valor."','".$fornecedor."')";

//gravar
if(mysqli_query($con,$sql)){
    $msg = "Cadastrado com sucesso";
}else{
    $msg = "Erro ao cadastrar";
}


//fecha a conexao com o banco
mysqli_close($con);
echo "<script> alert('".$msg."'); location.href = 'paginainicial.php'; </script>";



?>