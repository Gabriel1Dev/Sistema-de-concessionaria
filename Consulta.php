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
<body>
<div class="container">
  <h1>Relação de veiculos cadastrados</h1>
  <?php
    $sql = "select * from veiculos order by placa";

    $conexao = new mysqli("localhost","root","","concessionaria");

    $resultado = $conexao->query($sql);

    echo "<table class='table table-hover'>";
    echo "<tr>
        <td>Placa</td>
        <td>Marca</td>
        <td>Modelo</td>";

    while($linha = $resultado->fetch_object())
    {
        echo "<tr>
            <td>$linha->placa</td>
            <td>$linha->marca</td>
            <td>$linha->modelo</td>
        </tr>";
    }
echo "</table>";
  ?>

</div>
</body>
</html>