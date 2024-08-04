<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/listagem.css">
    <title>Document</title>
</head>

<body>
    <div class="principal flex inverter_column">
        <button class="botao"><a href="../index.html">Voltar</a></button>
        <?php
        include('../includes/conexao.php');
        $sql = "SELECT ani.id, ani.nome nomeAnimal, ani.especie, ani.raca, ani.data_nascimento, ani.idade, ani.castrado, don.nome nomeDono, don.email FROM animal ani LEFT JOIN pessoa don ON don.id = ani.id_pessoa";
        // Executa a consulta
        $result = mysqli_query($con, $sql);
        ?>
        <h1>Consulta de Animais</h1>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Data de Nascimeto/Adoção</th>
                <th>Idade</th>
                <th>Castrado</th>
                <th>Dono</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $castrado = $row['castrado'] == 1 ? "Sim" : "Não";
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nomeAnimal'] . "</td>";
                echo "<td>" . $row['especie'] . "</td>";
                echo "<td>" . $row['raca'] . "</td>";
                echo "<td>" . $row['data_nascimento'] . "</td>";
                echo "<td>" . $row['idade'] . " anos </td>";
                echo "<td>" . $castrado . "</td>";
                echo "<td>" . $row['nomeDono'] . "/" . $row['email'] . "</td>";
                echo "<td><a href='alteraAnimal.php?id=" . $row['id'] . "'>Alterar</a></td>";
                echo "<td><a href='deletaAnimal.php?id=" . $row['id'] . "'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>