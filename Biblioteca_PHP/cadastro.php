<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Cadastro de Usuário</h1>
        <p class="subtitulo">Crie sua conta para acessar o sistema de biblioteca</p>
        <?php
        if (isset($_GET['erro']) && $_GET['erro'] === 'email') {
            echo '<div class="mensangem-erro">Este email já está cadastrado.</div>';
        }
        ?>
        <form action="salvar _usuario.php" method="POST">

            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" require>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" require>
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" require>
            </div>

            <button type="submit" class="btn btn-block">Cadastrar</button>

        </form>

        <div class="nav-links">
            <p>já tem conta? <a href="index.php">Fazer login</a></p>
        </div>

        <a href="index.php" class="btn btn-voltar">Voltar para login</a>

        <div class="dica-navegacao">
            <strong>Fluxo</strong> Cadastro -> Painel -> Gerenciar livros
        </div>

    </div>



</body>

</html>