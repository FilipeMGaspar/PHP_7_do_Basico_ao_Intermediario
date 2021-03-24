<?php

define('min', 17); //Constante chamada de 'min' com o valor '17'
define('max', 45); //Constante chamada de 'max' com o valor '45'

$idade = 25; //VAriavel com a idade do cliente '25'

//------------------------------------
echo "MIN: ". min ."<br>";
echo "MAX: ". max . "<br>";
echo "IDADE: " . $idade . "<br><br>";

//--------------------------------------
if($idade >= min && $idade <= max){ // Validação de dados
    echo "Acesso liberado.."; //Retorno verdadeiro
}else{
    echo "Acesso Bloqueado"; //Retorno falso
}
