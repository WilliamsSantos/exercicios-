<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index | Exercicios PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="main container">
      <h1 align="center">CADASTRO PRODUTO:</h1>
          <form action="_inserir_produto.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1">Nro Produto</label>
                <input type="number" name="numero_produto" class="form-control" id="input-nro-produto" aria-describedby="Número do produto" required autocomplete="off" value="<?php echo(rand(10,999999)) ?>" readonly>
                <small id="inputNumberHelp" class="form-text text-muted">Número de Identificação do Produto.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nome Produto</label>
                <input type="text" name="nome_produto" class="form-control" id="input-nro-produto" aria-describedby="Número do produto" placeholder="Digite o Numero do Produto" required autocomplete="off">
                <small id="inputNumberHelp" class="form-text text-muted">Número de Identificação do Produto.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Categoria:</label>
              <select class="form-control" name="categoria_produto" required autocomplete="off">
                  <option>Eletrônico</option>
                  <option>Doméstico</option>
                  <option>Industrial</option>
                  <option>Escritório</option>
                  <option>Alimento</option>
                  <option>Bebida</option>
              </select><br>
              <label for="exampleInputEmail1">Quantidade:</label>
              <input type="number" name="quantidade_produto" class="form-control" id="input-nro-produto" aria-describedby="Quantidade do produto" placeholder="Digite a Quantidade do Produto" required autocomplete="off"><br>

              <label for="exampleInputEmail1">Fornecedor:</label>
              <select class="form-control" name="fornecedor_produto" required autocomplete="off">
                  <option>fornecedor A</option>
                  <option>fornecedor B</option>
                  <option>fornecedor C</option>
                  <option>fornecedor D</option>
                  <option>fornecedor E</option>
                  <option>fornecedor F</option>
              </select><br>     
            </div>
            <button type="submit" class="btn btn-success" >CADASTRAR</button>
          </form><br>
          <a href="lista.php" class="btn btn-primary" rel="noopener noreferrer">Lista Produtos</a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>