<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Cadastro de Alunos</h1>

    <form action="cadastrar.php" method="POST">

        <label>Nome</label>
        <input type="text" name="nome">

        <br><br>

        <label>Idade</label>
        <input type="number" name="idade">
        <button type="submit">Cadastrar</button>

        <br><br>

        <a href="listar.php"> ver alunos</a>
    </form>

</body>

</html>