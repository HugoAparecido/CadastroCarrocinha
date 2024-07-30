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
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $dataNascimento = $_POST['data_nascimento'];
    $castrado = $_POST['castrado'] == "Sim" ? true : false;
    $pessoa = $_POST['pessoa'];
    echo "<h1>Dados da cidade</h1>";
    echo "Nome: $nome</br>";
    echo "Especie: $especie</br>";
    echo "Raça: $raca</br>";
    echo "Data de Nascimento: $dataNascimento</br>";
    echo "Castrado: " . ($castrado ? "Sim" : "Não") . "</br>";
    // INSERT INTO cidade (nome, especie, raca, data_nascimento, castrado, id_pessoa, idade)
    // VALUES ('$nome', '$especie', '$raca', $pessoa, $castrado == "sim" ? 0 : 1, $idade)
    $castrado = $castrado ? 0 : 1;
    $dataNascimentoOb = new DateTime($dataNascimento);
    $dataNascimento = $dataNascimentoOb->format('Y-m-d');
    $idadeOb = $dataNascimentoOb->diff(new DateTime(date('Y-m-d')));
    $idade = $idadeOb->format('%Y');
    $sql = "INSERT INTO animal (nome, especie, raca, data_nascimento, castrado, id_pessoa, idade)";
    $sql .= " VALUES('" . $nome . "', '" . $especie . "', $dataNascimento, '" . $raca . "', $castrado, $pessoa, $idade)";
    echo $sql;
    // Executa comando no banco de dados
    /*$result =  mysqli_query($con, $sql);
    if ($result) {
        echo "<h2>Dados cadastrados com sucesso!</h2>";
    } else {
        echo "<h2>Erro ao cadastrar!</h2>";
        echo mysqli_error($con);
    }*/
    ?>
    <button class="botao"><a href="../index.html">Voltar à pagina inicial</a></button>
</body>

</html>