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
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    echo "<h1>Dados do Cliente</h1>";
    echo "Nome: $nome</br>";
    echo "E-mail: $email</br>";
    echo "Endereço: $endereco</br>";
    echo "Bairro: $bairro</br>";
    echo "CEP: $cep</br></br>";
    // INSERT INTO cliente (nome, email, endereco, bairro, cep, id_cidade)
    // VALUES ('$nome', '$email', '$endereco', '$bairro', '$cep', $cidade)
    $sql = "INSERT INTO pessoa (nome, email, endereco, bairro, cep, id_cidade)";
    $sql .= " VALUES('" . $nome . "', '" . $email . "', '" . $endereco . "', '" . $bairro . "', '" . $cep . "'," . $cidade . ")";
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