<?php

if(isset($_POST["submit"]))

{
    include_once("config.php");

    $Nome = $_POST['Nome'];
    $Sobrenome = $_POST['Sobrenome'];
    $Data_nasc = $_POST['Data'];
    $CPF = $_POST['CPF'];
    $Rua = $_POST['Rua'];

    $dados = mysqli_query($conexao,"INSERT INTO cliente (Nome,Sobrenome,Data_nasc,CPF,Rua ) VALUES ('$Nome','$Sobrenome','$Data_nasc','$CPF','$Rua')");


}





?>







<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />

    <title>Formulario</title>
  </head>
  <body>
    <main>
      <form action="formulario.php" method="post">
        <div class="box-maior">
          <div id="Nome" class="form-text">
            <label for="inputNome" class="form-label">Nome </label>
            <input type="text" name="Nome" aria-describedby="Nome" />
            <div id="Nome" class="form-text">
              <label for="inputNome" class="form-label">Sobrenome</label>
              <input
                type="text"
                name="Sobrenome"
                aria-describedby="Sobrenome"
              />
            </div>
          </div>
          <label for="inputNome" class="form-label">Data de Nascimento</label>
          <input
            type="date"
            name="Data"
            aria-describedby="Data de Nascimento"
          />
          <div id="cpf" class="form-text">
            <label for="inputCpf" class="form-label">CPF</label>
            <input type="text" name="CPF" maxlength="14 " placeholder="CPF" />
          </div>
          <div id="rua" class="form-text">
            <label for="inputrua" class="form-label">Rua</label>
            <input type="text" name="Rua" placeholder="Rua" />
          </div>
          <button type="submit" name="submit" class="btn btn-outline-primary">Registrar</button>
        </div>
      </form>
    </main>
  </body>
</html>
