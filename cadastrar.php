<?php
include_once("conectar.php");
$nome_animal = $_POST["nome_animal"];
$raca_animal = $_POST["raca_animal"];
$sexo_animal = $_POST["sexo_animal"];
$nome_proprietario = $_POST['nome_proprietario'];
$endereco_proprietario = $_POST['endereco_proprietario'];
if (!$strcon) {
 die('Não foi possível conectar ao Banco de Dados');
}

$sql = "INSERT INTO idanimal 
(nome_animal, raca_animal, sexo_animal, nome_proprietario, endereco_proprietario)
 VALUES ('{$nome_animal}', '{$raca_animal}', '{$sexo_animal}', '{$nome_proprietario}', 
 '{$endereco_proprietario}')";

    if (mysqli_query($strcon,$sql)){
        echo "Registro criado com sucesso";
    } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($strcon); 
    }
mysqli_close($strcon);



echo "<br><a href='index.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique aqui para realizar uma consulta</a><br>";
?>