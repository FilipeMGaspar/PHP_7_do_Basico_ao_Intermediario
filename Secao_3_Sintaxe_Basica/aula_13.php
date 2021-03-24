<?php

$idade = 17;
$senha = "1234";

/*if($idade >= 18){
    echo "OK";
}else{
    echo "Inválido!!!";
}*/

if($senha == "123"){
    echo "Acesso autorisado! Nivel 1";
}elseif ($senha == "1234") {
    echo "Acesso autorizado! Nivel 2";
}else{
    echo "Acesso Inválido!";
}