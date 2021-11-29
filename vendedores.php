<?php
    include('conexao.php');
    try {
      $sql = "insert into tblvendedores (vendedor,dataadmissao,salario) values (:vendedor,:dataadmissao,:salario)";
      $stmt = $con->prepare($sql);  

      $stmt->bindValue(":vendedor",$_POST["vendedor"]);
      $stmt->bindValue(":dataadmissao",$_POST["dataadmissao"]);
      $stmt->bindValue(":salario",$_POST["salario"]);
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
<h1>Vendedores</h1>

<form method="POST">
<a href="index.php">Menu Principal</a> 
    
    <hr>

    Vendedor<input type="texte" name="vendedor"><br>
    <br>
    DataAdmissao   <input type="date" name="dataadmissao"><br>
    <br>
    Salario <input tyoe="texte" name="salario"><br>
    <br>

    <br>
            <input type="submit" value="Cadastrar">



</form>    



</body>
</html>