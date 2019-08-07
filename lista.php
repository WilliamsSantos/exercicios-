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
    
    $stmt = $conn->prepare("SELECT * FROM tb_produto");
    $stmt->execute();
    
    $produto = $stmt->fetchAll();

    //Checa o parametro mensagem na URL
    if ( isset( $_GET["mensagem"] ) && isset( $_GET["mensagem"] ) != null) {
      echo( '<div class="alert alert-success " role="alert">' );
      echo( $_GET["mensagem"] );
      echo( '</div>' );
    }
    
  ?>
<body>
  <br>
    <div class="main container">
      <h1 align="center">Lista de Produtos</h1><br>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col"># Código Produto</th>
              <th scope="col">Nome Produto</th>
              <th scope="col">Categoria</th>
              <th scope="col">Fornecedores</th>
              <th scope="col">Quantidade</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ( $produto as $item ) { ?> 
              <tr>
                <th scope="row"><?php echo($item["codigo"]) ?></th>
                <td><?php echo($item["nome"]) ?></td>
                <td><?php echo($item["categoria"]) ?></td>
                <td><?php echo($item["fornecedor"]) ?></td>
                <td><?php echo($item["quantidade"]) ?></td>
                <td>
                  <a href="_editar_produto.php?id=<?php echo( $item['id_produto'] ) ?>" class="btn btn-info" rel="noopener noreferrer">
                    editar
                  </a>
                </td>
                <td>
                  <a href="_deletar_produto.php?id=<?php echo($item['id_produto']) ?>" class="btn btn-danger" onclick="return confirm('Tem Certeza?')"rel="noopener noreferrer">
                    Deletar
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table><br>
      <a href="index.php" class="btn btn-primary"rel="noopener noreferrer">Cadastrar Produto</a>
    </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>