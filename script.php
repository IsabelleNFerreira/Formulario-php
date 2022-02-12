<?php

session_start();

// array de categorias
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST["nome"];
$idade = $_POST["idade"];

$categoria_final;

// verificação da quantidade minima e máxima de caracteres em Nome
if (empty($nome))
{
  $_SESSION['mensagem de erro'] = "O nome não pode ser vazio, preencha o formulário novamente.";
  header('Location: index.php');
  return;
}
  else if ((strlen($nome)) < 3)
  {
    
    $_SESSION['mensagem de erro'] = "O nome deve conter mais de 3 caracteres, preencha o formulário novamente.";
    header('Location: index.php');
    return;
  }
  else if ((strlen($nome)) > 40)
  {
    $_SESSION['mensagem de erro'] = "O nome informado é muito extenso, preencha o formulário novamente.";
    header('Location: index.php');
    return;
  }

// Estrutura responsável por verificar a categoria correspondente a idade e se o input é numérico
if(is_numeric($idade))
{
  switch (true)
  {
  case ($idade >= 0 && $idade <=12):
      for($i = 0; $i <=count($categorias); $i++)
      {
        if($categorias[$i] == 'infantil')
          $categoria_final = $categorias[$i];  // A variável $categoria_final recebe a categoria identificada
      }
      break;
  
  case ($idade >= 13 && $idade <=18):
      for($i = 0; $i <=count($categorias); $i++)
      {
        if($categorias[$i] == 'adolescente')
          $categoria_final = $categorias[$i];
      }
      break;

  case ($idade >= 19 && $idade <=60):
      for($i = 0; $i <=count($categorias); $i++)
      {
        if($categorias[$i] == 'adulto')
          $categoria_final = $categorias[$i];
      }
      break;

  case ($idade >= 61 && $idade <=130):
      for($i = 0; $i <=count($categorias); $i++)
      {
        if($categorias[$i] == 'idoso')
          $categoria_final = $categorias[$i];
      }
      break;
    
  }
  // Imprime no fim do switch a categoria correspondente a idade informada
  echo "O(A) nadador(a) ", $nome, " compete na categoria ", $categoria_final;
}
else
{
   $_SESSION['mensagem de erro'] = "O que foi informado no campo Idade é inválido, preencha o formulário novamente.";
  header('Location: index.php');
}

?>

<!DOCTYPE>

<html>

<form action = 'script.php' method="post">
  <p><input type="submit" value="Voltar" name="Botao" /></p>
  <meta http-equiv="Location" content="index.php">
</form>

</html>