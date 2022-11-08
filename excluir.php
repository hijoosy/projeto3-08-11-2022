<?php
//receber o id de quem será excluido.
$id=$_GET["id"];

//abrir conexao com o banco
include_once './conexao1.php';

//montar a instrução de ir ao banco
$sql = "Delete from produto where idproduto =".$id;


//igual ao gravar.php
//gravar
if(mysqli_query($con,$sql)){
    $msg = "Excluído com sucesso";
}else{
    $msg = "Erro ao excluir";
}


//fecha a conexao com o banco
mysqli_close($con);
echo "<script> alert('".$msg."'); location.href = 'consulta.php'; </script>";




?>