<?php
    include('conexao.php');
    try {
      $sql = "insert into tblvendas (idvendedor,idproduto,qtd) values (:idvendedor,:idproduto,:qtd)";
      $stmt = $con->prepare($sql);  

      $stmt->bindValue(":idvendedor",$_POST["idvendedor"]);
      $stmt->bindValue(":idproduto",$_POST["idproduto"]);
      $stmt->bindValue(":qtd",$_POST["qtd"]);
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
    <title>Vendas</title>
</head>
<body>
<h1>Vendas</h1>
<a href="index.php">Menu Principal</a> 
    
    <hr>

<form method="POST">

    IdVendedor<input type="texte" name="idvendedor"><br>
    <br>
    IdProduto   <input type="texte" name="idproduto"><br>
    <br>
    Quantidade <input tyoe="texte" name="qtd"><br>
    <br>

    <br>
            <input type="submit" value="Cadastrar">



</form>    



</body>
</html>