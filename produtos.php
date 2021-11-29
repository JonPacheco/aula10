<?php
    include('conexao.php');
    try {
      $sql = "insert into tblprodutos (produto,preco,estoque) values (:produtos,:preco,:estoque)";
      $stmt = $con->prepare($sql);  

      $stmt->bindValue(":produtos",$_POST["produtos"]);
      $stmt->bindValue(":preco",$_POST["preco"]);
      $stmt->bindValue(":estoque",$_POST["estoque"]);
      $stmt->execute();  

    } catch(PDOException $e){

        echo "Não Cadastrou. ".$e->getCode();

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
<h1>Produtos</h1>

<form method="POST">
<a href="index.php">Menu Principal</a> 
    
    <hr>

    Produtos<input type="texte" name="produtos"><br>
    <br>
    Preco   <input type="texte" name="preco"><br>
    <br>
    Estoque <input tyoe="texte" name="estoque"><br>
    <br>

    <br>
            <input type="submit" value="Cadastrar">



</form>    



</body>
</html>