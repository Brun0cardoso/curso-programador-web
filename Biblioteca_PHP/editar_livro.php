<?php

include("verificar_sessao.php");

include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM livros WHERE id=$id";

$resultado = mysqli_query($conexao, $sql);
$livro = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div>
        <h1>Editar Livro</h1>
        <p class="subtitulo">Altere os dados do livro e clique em atualizar</p>

        <form action="atualizar_livro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $livro['id']; ?>">

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" value="<?php echo $livro['titulo']; ?>">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" value="<?php echo $livro['autor']; ?>">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="Disponível" <?php if ($livro['status'] === 'Disponivel') echo 'selected'; ?>>
                        Disponivel
                    </option>
                    <option value="Emprestado" <?php if ($livro['status'] === 'Emprestado') echo 'selected'; ?>>
                        Emprestado
                    </option>
                </select>
            </div>

            <button type="submit" class="btn btn-block">Atualizar Livro</button>

        </form>

        <a href="listar_livro.php" class="btn btn-voltar">Voltar para a listagem</a>

    </div>

</body>

</html>