<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Cadastro de Animais </title>
</head>
<body>
  <h3>Formulário de Consulta de Animais </h3><br>
  <form name="Cadastro" action="consulta.php" method="POST">
    <label>Consulta a Banco de Dados :</label>
    <input type="submit" name="consulta-completa" value="Consultar">
  </form>
</body>
</html>

<?php
// Conectando ao banco de dados: 
include_once("conectar.php");
// Criando tabela e cabeçalho de dados:
 echo "<table border=1>";
 echo "<tr>";
 echo "<th>nome_animal</th>";
 echo "<th>raca_animal</th>";
 echo "<th>sexo_animal</th>";
 echo "<th>nome_proprietario</th>";
 echo "<th>endereco_proprietario</th>";
 echo "</tr>";
  
 $sql = "SELECT * FROM formulario_animais";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $nome_animal = $registro["nome_animal"];
    $raca_animal = $registro["raca_animal"];
    $sexo_animal = $registro["sexo_animal"];
    $nome_proprietario = $registro['nome_proprietario'];
    $endereco_proprietario = $registro['endereco_proprietario'];
    echo "<tr>";
    echo "<td>".$nome_animal."</td>";
    echo "<td>".$raca_animal."</td>";
    echo "<td>".$sexo_animal."</td>";
    echo "<td>".$nome_proprietario."</td>";
    echo "<td>".$endereco_proprietario."</td>";
    echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";
 ?>

