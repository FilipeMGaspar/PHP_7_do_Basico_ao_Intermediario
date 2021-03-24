<?php

$nome_completo = "Curso de PHP 7";
$sexo = 'F';
$salario = 745.85;
$idade = 16;
$valido = true;

echo $nome_completo."<br>";
echo gettype($nome_completo)."<br>";

//echo $nome_completo; // Comentário de uma linha
/* Comentário 
 * de multiplas 
 * Linhas
 */

echo $sexo."<br>";
echo gettype($sexo)."<br>";

echo $salario."<br>";
echo gettype($salario)."<br>";

echo $idade."<br>";
echo gettype($idade)."<br>";

echo $valido."<br>";
echo gettype($valido);
