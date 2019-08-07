<?php
    require('conexao.php');

    $id_produto = $_GET["id"];
    $sql = "Delete from tb_produto where id_produto = $id_produto";
    
    try {
        $conn->exec($sql);
        $msg = 'Produto deletado com sucesso!';
        header('location: lista.php?mensagem='.$msg, 200);
    } catch (\Throwable $th) {
        throw $th;
    }
    
?>