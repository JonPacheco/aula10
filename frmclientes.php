<?php
    include('conexao.php');
    try {
      $sql = "insert into tblcliente (cliente,email) values (:cliente,:email)";
      $stmt = $con->prepare($sql);  

      $stmt->bindValue(":cliente",$_POST["cliente"]);
      $stmt->bindValue(":email",$_POST["email"]);
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
    <title>Clientes</title>
</head>
<body>
<h1>Cadastro de Clientes</h1>

<form method="POST">
    <a href="index.php">Menu Principal</a> 
    
    <hr>

    Cliente <input type="texte" name="cliente"><br>
    <br>
    Email   <input type="email" name="email"><br>
    <br>
            <input type="submit" value="Cadastrar">



</form>    



</body>
</html>