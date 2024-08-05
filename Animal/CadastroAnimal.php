<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Cadastro Animal</title>
</head>

<body>
    <div class="menu">
        <a href="#" class="brand"><img src="../img/logo-gato.webp" alt=""></a>
        <nav>
            <ul>
                <li><a href="#">Cidade</a>
                    <ul>
                        <li><a href="../Cidade/CadastroCidade.html">Cadastrar</a></li>
                        <li><a href="../Cidade/ListarCidade.php">Visualizar</a></li>
                    </ul>
                </li>
                <li><a href="">Pessoa</a>
                    <ul>
                        <li>
                            <a href="../Pessoa/CadastroPessoa.php">Cadastrar</a>
                        </li>
                        <li>
                            <a href="../Pessoa/ListarPessoa.php">Visualizar</a>
                        </li>
                    </ul>
                </li>
                <li><a href="">Animal</a>
                    <ul>
                        <li>
                            <a href="../Animal/CadastroAnimal.php">Cadastrar</a>
                        </li>
                        <li>
                            <a href="../Animal/ListarAnimal.php">Visualizar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="principal flex inverter_column">
        <form action="./CadastroAnimalExe.php" method="post">
            <fieldset>
                <legend>Cadastro de Animal</legend>
                <div>
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" />
                </div>
                <div>
                    <label for="especie">Espécie</label>
                    <input type="text" name="especie" id="especie" />
                </div>
                <div>
                    <label for="raca">Raça</label>
                    <input type="text" name="raca" id="raca" />
                </div>
                <div>
                    <label for="data_nascimento">Data de Nascimento ou Adoção</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" />
                </div>
                <div>
                    <label>Cadastrado:</label>
                    <input type="radio" name="castrado" id="castradoSim" value="sim" /><label id="castradoSim">Sim</label>
                    <input type="radio" name="castrado" id="castradoNao" value="nao" /><label id="castradoNao">Não</label>
                </div>
                <div><label for="pessoa">Pessoa</label>
                    <select name="pessoa" id="pessoa">
                        <?php
                        include('../includes/conexao.php');
                        $sql = "SELECT * FROM pessoa";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['id'] . "'>" . $row['nome'] . "/" . $row['email'] . "</option>";
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