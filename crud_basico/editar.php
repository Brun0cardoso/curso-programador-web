<?php

include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM alunos WHERE id=$id";

$resultado = mysqli_query($conexao,$sql);

$aluno = mysqli_fetch_assoc($resultado);

?>


<h1>Editar</h1>

<form action="atualizar.php" method="POST">

    <input type="hidden" id="id" name=id value="<?php echo $aluno['id'];?>">

    <br><br>

    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome" value="<?php echo $aluno['nome'];?>">

    <br><br>

    <label for="idade">Idade</label>
    <input type="number" id="idade" name="idade" value="<?php echo $aluno['idade'];?>">

    <br><br>

    <button typa="submit">Salvar</button>
 
</form>    






