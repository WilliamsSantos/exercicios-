<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index || Exercicios PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
  <?php   

    require('conexao.php');

    if( isset( $_GET["id"] ) && isset( $_GET["id"] ) != null ){
      try {

        $id_produto = $_GET["id"];
        $sql = "SELECT * FROM tb_produto where id_produto = $id_produto";  
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        $produto = $stmt->fetchAll();
      
      }catch (\Throwable $th) {
        throw $th;
      }
    }else if(isset($_POST["id_alteracao"]) && isset($_POST["id_alteracao"]) != null){
      try{ 
        
        $id_produto         = $_POST["id_alteracao"];
        $nome_produto       = $_POST["nome_produto"];
        $numero_produto     = $_POST["numero_produto"];
        $categoria_produto  = $_POST["categoria_produto"];
        $fornecedor_produto = $_POST["fornecedor_produto"];    
        $quantidade_produto = $_POST["quantidade_produto"];

        $sql = "UPDATE `tb_produto` 
                    set `codigo`      = $numero_produto ,
                        `nome`        = '$nome_produto',
                        `categoria`   = '$categoria_produto',
                        `quantidade`  = $quantidade_produto,
                        `fornecedor`  = '$fornecedor_produto' 
                where id_produto  = $id_produto";
  
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $msg = "Produto Atualizado com Sucesso!";
        
        header('location: lista.php?mensagem='.$msg , 200);

      } catch (\Throwable $th) {
        throw $th;
      }
    }
  ?>
<body>
  <br>
    <div class="main container">
      <h1 align="center">Editar Produto</h1><br>
            <?php foreach ($produto as $item) { ?> 
              <form action="_editar_produto.php" method="POST">
              <input type="text" name="id_alteracao" value="<?php echo($item["id_produto"])?>" style="display:none;"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nro Produto</label>
                      <input type="number" name="numero_produto" class="form-control" id="input-nro-produto" aria-describedby="Número do produto" required autocomplete="off" value="<?php echo($item["codigo"]) ?>" readonly>
                      <small id="inputNumberHelp" class="form-text text-muted">Número de Identificação do Produto.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome Produto</label>
                      <input type="text" name="nome_produto" class="form-control" id="input-nro-produto" aria-describedby="Número do produto" placeholder="Digite o Numero do Produto" value="<?php echo($item["nome"]) ?>"required autocomplete="off">
                      <small id="inputNumberHelp" class="form-text text-muted">Número de Identificação do Produto.</small>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Categoria:</label>
                      <select class="form-control" name="categoria_produto" value="<?php echo($item["categoria"]) ?>" required autocomplete="off">
                          <option>Eletrônico</option>
                          <option>Doméstico</option>
                          <option>Industrial</option>
                          <option>Escritório</option>
                          <option>Alimento</option>
                          <option>Bebida</option>
                      </select><br>
                      <label for="exampleInputEmail1">Quantidade:</label>
                      <input type="number" name="quantidade_produto" class="form-control" value="<?php echo($item["quantidade"]) ?>" id="input-nro-produto" aria-describedby="Quantidade do produto" placeholder="Digite a Quantidade do Produto" required autocomplete="off"><br>
                      <label for="exampleInputEmail1">Fornecedor:</label>
                      <select class="form-control custom-select" name="fornecedor_produto" value="<?php echo($item["fornecedor"]) ?>" required autocomplete="off" id="inputGroupSelect01">
                          <option selected><?php echo($item["fornecedor"]) ?></option>
                          <option>fornecedor A</option>
                          <option>fornecedor B</option>
                          <option>fornecedor C</option>
                          <option>fornecedor D</option>
                          <option>fornecedor E</option>
                          <option>fornecedor F</option>
                      </select><br>     
                  </div>
                  <button type="submit" class="btn btn-success" >ATUALIZAR</button>
              </form><br>
            <?php } ?><br>

      <a href="index.php" class="btn btn-primary"rel="noopener noreferrer">Cadastrar Novo Produto</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="lista.php" class="btn btn-primary" rel="noopener noreferrer">Lista Produtos</a>
   
    <br></div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>