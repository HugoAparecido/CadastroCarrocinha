<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('../includes/conexao.php');
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $ativo = $_POST['ativo'] == "sim" ? true : false;
    $cidade = $_POST['cidade'];
    echo "<h1>Dados do Cliente</h1>";
    echo "Nome: $nome</br>";
    echo "E-mail: $email</br>";
    echo "Ativo: " . $ativo ? "Sim" : "Não" . "</br></br>";
    // INSERT INTO cliente (nome, email, senha, ativo)
    // VALUES ('$nome', '$estado', '$senha', $ativo == "sim" ? 0 : 1)
    $sql = "INSERT INTO cliente (nome, email, senha, ativo, id_cidade)";
    $ativo = $ativo ? 0 : 1;
    $sql .= " VALUES('" . $nome . "', '" . $email . "', '" . $senha . "', ".$ativo.",".$cidade.")";
    echo $sql;
    // Executa comando no banco de dados
    $result =  mysqli_query($con, $sql);
    if ($result) {
        echo "<h2>Dados cadastrados com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao cadastrar!</h2>";
        echo mysqli_error($con);
    }
    ?>
    <button class="botao"><a href="../index.html">Voltar à pagina inicial</a></button>
</body>

</html>