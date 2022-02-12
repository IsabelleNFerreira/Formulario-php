<?php
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset = "utf.8">
  <title> "Formulario de inscrição"</title>
  <meta name = "author" content = "">
  <meta name = "description" content = "">
  <meta name = "viewport" content = "width=device-width, initial-scale=1">
</head>

<body>

<p> FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action = 'script.php' method="post">
  <?php
  //Se a mensagem de erro nao estiver vazia, imprime a mensagem correspondente
  //Para criar outras variaveis de sessão, apenas repetir os passos
    $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
    if(!empty($mensagemDeErro))
    {
      echo $mensagemDeErro;
    }
  ?>
  <p>Seu nome: <input type="text" name="nome" /></p>
  <p>Sua idade: <input type="text" name="idade" /></p>
  <p><input type="submit" value="Enviar dados do competidor" /></p>
</form>


</body>

</html>
