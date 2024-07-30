<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Document</title>
</head>

<body>
    <div class="principal flex inverter_column">
        <form action="./CadastroClienteExe.php" method="post">
            <fieldset>
                <legend>Cadastro de Clientes</legend>
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" />
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" />
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" />
                </div>
                <div>
                    <label>Ativo:</label>
                    <input type="radio" name="ativo" id="AtivoSim" value="sim" /><label id="AtivoSim">Sim</label>
                    <input type="radio" name="ativo" id="AtivoNao" value="nao" /><label id="AtivoNao">Não</label>
                </div>
                <div><label for="cidade">Cidade</label>
                    <select name="cidade" id="cidade">
                        <?php
                        include('../includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "/" . $row['estado'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <button class="botao_submit" type="submit">Cadastrar</button>
                </div>
            </fieldset>
        </form>
        <button class="botao"><a href="../index.html">Voltar</a></button>
    </div>
</body>

</html>