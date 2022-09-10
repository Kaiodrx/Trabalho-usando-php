<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title> Testando conexão ao banco de dados </title>
</head>
<body>
  <h3 style="text-align:center;">Formulário de Cadastro de Animais</h3><br>
  <form name="formulario_animais" action="cadastrar.php" method="POST">
    <label> Nome do Animal: </label>
    <input type="text" name="nome_animal" size="45"><br><br><br>
    <label> Raça do Animal: </label>
    <input type="text" name="raca_animal" size="45"><br><br><br>
    <label> Sexo do Animal: </label>
    <select name="sexo_animal">
    <option value="M">Masculino</option>
      <option value="F">Feminino</option>
      <option value="N">Não Declarado</option>
    </select><br><br><br>
    <label>Nome do Proprietario: </label>
    <input type="text" name="nome_proprietario" size="30"><br><br><br>
    <label>Endereço do Proprietario: </label>
    <input type="text" name="endereco_proprietario" size="45"><br><br><br>
    <input type="submit" name="enviar" value="Enviar">
  </form>
</body>
</html>