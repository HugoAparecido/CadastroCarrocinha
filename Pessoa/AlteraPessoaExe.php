<?php
include('../includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
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
    <h1>Alteração de cliente</h1>
    <?php
    echo "<p>Id: $id</p>";
    echo "Nome: $nome</br>";
    echo "E-mail: $email</br>";
    echo "Endereço: $endereco</br>";
    echo "Bairro: $bairro</br>";
    echo "CEP: $cep</br></br>";
    $sql = "UPDATE pessoa SET nome = '$nome', email = '$email', endereco = '$endereco', bairro = '$bairro', bairro = '$cep', id_cidade = $cidade WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados atualizados!";
    else
        echo "Erro ao atualizar dados!\n" . mysqli_error($con);
    ?>
    <button class="botao"><a href="./ListarPessoa.php">Voltar</a></button>
</body>

</html>