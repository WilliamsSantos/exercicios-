<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index || Exercicios PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
  require('./conexao.php');
  
    $nome_produto       = $_POST["nome_produto"];
    $numero_produto     = $_POST["numero_produto"];
    $categoria_produto  = $_POST["categoria_produto"];
    $fornecedor_produto = $_POST["fornecedor_produto"];    
    $quantidade_produto = $_POST["quantidade_produto"];
  
  echo "<br><div class='container'>";
    try {
      
      $sql = "INSERT INTO `tb_produto`(`codigo`,`nome`,`categoria`,`quantidade`,`fornecedor`) 
      VALUES ( $numero_produto,  '$nome_produto',  '$categoria_produto',  $quantidade_produto, '$fornecedor_produto')";
        
      if($conn->exec($sql)){
        echo " <h1 font-color='Green'>Produto cadastrado com sucesso!!</h1>";
        echo "<br>";
        echo "<div>";
        echo "<label>Código do Produto: </label> <b>$numero_produto</b> </br>";
        echo "<label>Nome do Produto:</label>  <b>$nome_produto</b> </br>";
        echo "<label>Quantidade adicionada: </label> <b>$quantidade_produto</b></br>";
        echo"</div>";
        echo " <a href='/exercicios' class='btn btn-primary'>Voltar ao Formulario</a>";
        echo " <a href='/exercicios/lista.php' class='btn btn-primary'>Ver Lista</a>";
      }
    } catch(PDOException $e){
      echo " <h1 font-color='Green'>Ops! Houve um erro ao tentar cadastrar o produto!!</h1>";
      echo "  <div>".$e->getMessage()."<div>";
      echo " <a href='/exercicios'>Tentar novamente</a>";
    }
    $sql = null;
  echo "</div>";
?>
