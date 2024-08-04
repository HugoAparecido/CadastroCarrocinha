<?php
include('../includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$dataNascimento = $_POST['data_nascimento'];
$castrado = $_POST['castrado'] == "sim" ? 1 : 0;
$pessoa = $_POST['pessoa'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Alteração de cidade</h1>
    <?php
    $dataNascimentoFormatada = date('Y-m-d', strtotime($dataNascimento));
    $dataAtual = new DateTime();
    $dataNascimentoOb = new DateTime($dataNascimentoFormatada);
    $idadeOb = $dataNascimentoOb->diff(new DateTime(date('Y-m-d')));
    $idade = $idadeOb->format('%Y');
    echo "<p>ID: $id</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Espécie: $especie</p>";
    echo "<p>Raça: $raca</p>";
    echo "<p>Data Nascimento: $dataNascimento</p>";
    echo "<p>Idade: $idade</p>";
    echo "<p>castrado: $castrado</p>";
    echo "<p>Id Pessoa: $pessoa";
    $sql = "UPDATE animal SET nome = '$nome', especie = '$especie', raca = '$raca', data_nascimento = '$dataNascimentoFormatada', idade = $idade, castrado = $castrado, id_pessoa = $pessoa WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados atualizados!";
    else
        echo "Erro ao atualizar dados!\n" . mysqli_error($con);
    ?>
    <button class="botao"><a href="./ListarAnimal.php">Voltar</a></button>
</body>

</html>