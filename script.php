<?php

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
switch (true)
{
case (empty($nome)):
  echo "O nome não pode ser vazio";
  break;
case (strlen($nome)) < 3:
  echo "O nome deve conter mais de 3 caracteres";
  break;
case (strlen($nome)) > 30:
  echo "O nome informado é muito extenso!";
  break;
}

// Estrutura responsável por verificar a categoria correspondente a idade
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
// Imprime o nome e a categoria identificada pela idade informada
echo "O(A) nadador(a) ", $nome, " compete na categoria ", $categoria_final; 

?>