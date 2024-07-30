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
        $sql = "SELECT cli.id, cli.nome nomecliente, cli.email, cli.ativo, cid.nome nomecidade, cid.estado FROM cliente cli LeFT JOIN cidade cid ON cid.id = cli.id_cidade";
        // Executa a consulta
        $result = mysqli_query($con, $sql);
        ?>
        <h1>Consulta de Cidades</h1>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ativo</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                $ativo = $row['ativo'] == 0 ? "Sim" : "Não";
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nomecliente'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $ativo . "</td>";
                echo "<td>" . $row['nomecidade'] . "</td>";
                echo "<td>" . $row['estado'] . "</td>";
                echo "<td><a href='alteraCliente.php?id=" . $row['id'] . "'>Alterar</a></td>";
                echo "<td><a href='deletaCliente.php?id=" . $row['id'] . "'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>