<?php

include("verificar_sessao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="contaiiner">
        <h1>Cadastrar Livro</h1>
        <p class="subtitulo">Preencha os dados do novo livro.</p>

        <form action="salvar_livro.php" method="POST">
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" name="titulo" placeholder="Digite o titulo do livro" required>
            </div>
            <div>
                <label for="autor">Autor</label>
                <input type="text" id="autor" name="autor" placeholder="Digite o autor do livro" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" required>
                    <option value="Disponivel">Disponivel</option>
                    <option value="Emprestado">Emprestado</option>
                </select>
            </div>
            <button type="submit" class="btn btn-bloc btn-sucessao"> Salvar LIvro</button>
        </form>
        <a href="painel.php" class="btn btn-voltar"> Voltarpara painel </a>
    </div>
</body>

</html>