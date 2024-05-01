<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-info">
    
    <?php
        if(isset($_POST["placa"]))
        {
            $placa = $_POST["placa"];
            $marca = $_POST["marca"];
            $modelo = $_POST["modelo"];
            $ano = $_POST["ano"];
            $cor = $_POST["cor"];
            $valor = $_POST["valor"];

            $sql = "insert into veiculos (placa, marca, modelo, ano, cor, valor)
                values('$placa', '$marca', '$modelo', '$ano', '$cor', '$valor')";

            $conexao = new mysqli("localhost","root","","concessionaria");

            $resultado = $conexao->query($sql);
            if($resultado == true)
            {
                echo "<h1>Cadastrado com sucesso!</h1>";
            }
            else
            {
                echo "<h1>Deu erro ao cadastrar</h1>";
            }
        }
    ?>

<div class="container">
  <h2>Novo Veículo</h2>
  <form action="cadastro.php" method="post">
    <div class="form-group">
      <label for="login">Login:</label>
      <input type="text" class="form-control" id="login" placeholder="Preencha suas credenciais..." name="login">
    </div>
    <div class="form-group">
      <label for="senha">senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Preencha sua senha..." name="senha">
    </div>
    <button type="submit" class="btn btn-success">Confirmar</button>
  </form>
</div>
</body>
</html>