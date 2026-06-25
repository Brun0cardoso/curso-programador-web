<?php

include("verificar_sessao.php");

include("conexao.php");

$sql = "SELECT * FROM livros";

$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Livros - Biblioteca</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container container-largo">
        <h1>Listagem de Livros</h1>
        <p class="subtitulo">Todos os livros cadastrados no sistema </p>

        <table class="tabela-livros">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
            <?php
            while($livro = mysqli_fetch_assoc($resultado)){
             ?>
             <tr>
               <td><?php echo $livro['id'];?></td>
               <td><?php echo $livro['titulo'];?></td>
               <td><?php echo $livro['autor'];?></td>
               <td><?php echo $livro['status'];?></td>
               <td class="acoes">
                    <a href="editar_livro.php?id=<?php echo $livro['id'];?>" class="link-editar">
                        Editar
                    </a>
                      <a href="editar_livro.php?id=<?php echo $livro['id'];?>" class="link-excluir">
                        Excluir
               </td>
             </tr>   
             <?php
              }
              ?>
        </table>

        <a href="painel.php" class="btn btn-voltar">Voltar para Painel</a>
    </div>
</body>
</html>