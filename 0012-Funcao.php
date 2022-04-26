<?php
/*
   1 - Para que serve Função ?
   2 - forma de declarar função ?
   3 - Temos funções pré-definidas, funções de usuário
*/

// Exemplo 1° função nomeada sem argumento
MensagemUsuario();

 function MensagemUsuario (){
     echo "Será que estou entendendo?";
 } 

 // chama um função que se encontra na memoria
 MensagemUsuario();
echo "<hr>";
 // Exemplo 2° função com argumento

 function Saudacao($arg){
    echo "Seja bem vindo, $arg";
 }
 
 //
 $nome_x = "Emerson";
  Saudacao($nome_x);
 echo "<br>";
  $x = "Paulo";
 Saudacao($x);
 echo "<br>";
 Saudacao("Sorocaba");
echo "<hr>";
 // passando com mais de um argumento
 function Adicao($arg1 , $arg2){
     $n1=  $arg1;
     $n2 = $arg2;
     $resultado = $n1 + $n2;
    echo "valor : " .$resultado;
    }

// passar os valores atraves de variavel
$numero1= 10;
$numero2 = 11;

Adicao($numero1, $numero2);

$numeros = [10,4, 50, 10, 5];
$op ="/";
function CalArray($array ,$op){
    $soma = 0;
    foreach($array as $values ){
        $soma = eval($soma $op $values); 
    }
   echo $soma;
}
echo "<br>";
CalArray($numeros);




 
?>