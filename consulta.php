<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="estilo.css" rel="stylesheet">

<script>
    function excluir(id){
        if(confirm('Deseja realmente excluir esse produto?'))
            location.href='excluir.php?id='+id;
    }


</script>
</head>
<body>
    <h2>Consultar Produto</h2>
    <hr>
    <?php
    //abrir conexao com o banco
    include_once'./conexao1.php';
    //montar a instrução para ir ao banco
    $sql = "select * from produto";
  
    $result =mysqli_query($con,$sql); //executa a consulta no mysql

    $totalregistro = mysqli_num_rows($result);
    if($totalregistro > 0){
       // echo "encontrou ".$totalregistro. " registros.";
       ?>
        <table width='800px' border='2px'>
            <tr>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Quantidade</td>
                <td>Valor Unitário</td>
                <td>Fornecedor</td>
                <td>Valor Total</td>
                <td>Excluir</td>
            <tr>
    <?php
    while($row = mysqli_fetch_array($result)){
        echo"<tr>";
        echo"<td>".$row["nome"]."</td>";
        echo"<td>".$row["descricao"]."</td>";
        echo"<td>".$row["quantidade"]."</td>";
        echo"<td>".$row["valor"]."</td>";
        echo"<td>".$row["fornecedor"]."</td>";
        $total= $row["quantidade"] * $row["valor"];
        echo "<td/>".$total."</td>";
        ?>

        <td> 
           
          <a href='#' onclick="excluir(<?php echo $row ['idproduto'];?>)">excluir</a>
        
        </td>
<!--ao clicar no excluir.. será chamado outra função javascript,
onde perguntará se realmente quer que seja excluido.-->

        <?php
        echo"</tr>";
    }
    echo "</table><br/>Total de registros cadastrados: ".$totalregistro;
    
    }else{
        echo "Nenhum registro cadastrado";
    }
    mysqli_close($con);
        ?>
</body>
</html>