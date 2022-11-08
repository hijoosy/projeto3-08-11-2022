<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <link href="estilo.css" rel="stylesheet">

</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <hr>
    <form action="gravar1.php" method="post">
    Nome do Produto:<br/>
    <input type="text" name="nome" id="">
    <br/></br>
    Descriçao:<br/>
    <input type="text" name="descricao" id="">
    <br/></br>
    Quantidade:<br/>
    <input type="text" name="quantidade" id="">
    <br/></br>
    Valor Unitário:<br/>
    <input type="number" name="valor" id="">
    <br/></br>
    Fornecedor:<br/>
    <input type="text" name="fornecedor" id="">
    <br/></br>
    <input type="submit" value="Cadastrar"/>

    </form>
</body>
</html>