<?php
include('../includes/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id=$id";
$result = mysqli_query($con, $sql);
$rowCliente = mysqli_fetch_array($result);
?>
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
    <form action="./AlteraClienteExe.php" method="post">
      <fieldset>
        <legend>Alteração de cliente</legend>
        <div>
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" value="<?php echo $rowCliente['nome'] ?>" />
        </div>
        <div>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email" value="<?php echo $rowCliente['email'] ?>" />
        </div>
        <div>
          <label for="senha">Senha</label>
          <input type="password" name="senha" id="senha" value="<?php echo $rowCliente['senha'] ?>" />
        </div>
        <div>
          <label>Ativo:</label>
          <input type="radio" name="ativo" id="AtivoSim" value="sim" <?php echo $rowCliente['ativo'] == 0 ? "checked" : "" ?> /><label id="AtivoSim">Sim</label>
          <input type="radio" name="ativo" id="AtivoNao" value="nao" <?php echo $rowCliente['ativo'] == 1 ? "checked" : "" ?> /><label id="AtivoNao">Não</label>
        </div>
        <input type="hidden" name='id' value='<?php echo $rowCliente['id'] ?>'>
        <div><label for="cidade">Cidade</label>
          <select name="cidade" id="cidade">
            <?php
            $sql = "SELECT * FROM cidade";
            $result = mysqli_query($con, $sql);
            while ($rowCidade = mysqli_fetch_array($result)) {
              echo "<option value='" . $rowCidade['id'] . "' " . ($rowCidade['id'] == $rowCliente['id_cidade'] ? "selected" : "") . ">" . $rowCidade['nome'] . "/" . $rowCidade['estado'] . "</option>";
            }
            ?>
          </select>
        </div>
        <div>
          <button class="botao_submit" type="submit">Alterar</button>
        </div>
      </fieldset>
    </form>
    <button class="botao"><a href="../index.html">Voltar</a></button>
  </div>
</body>

</html>