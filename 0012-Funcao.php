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
function CalArray($array){
    $soma = 0;
    foreach($array as $values ){
        $soma +=  $values; 
    }
   echo $soma;
}
echo "<br>";
CalArray($numeros);

echo "<hr>";



function Soma($arg, $arg2){
  $resultado  = $arg + $arg2;
  //echo resultado; // 300
  return $resultado  ; 
  // saida de um valor(variavel/array) 
}

$valor =  Soma(100, 200);
echo Soma(20,100);
echo $valor;
/*
  quero pegar o valor ? e continuar no 
   script geral
  */


  // usar a função so para somar e valor
  // retornado usar script global para fazer
  // o calculo e o numero e par/ impar
  function MsgNumero($arg){
      if($arg != 0){
          echo "Impar";
      }else{
          echo "Par";
      }
  }

  $valores = Soma(300, 45);// retorno 345

  if( ( $valores % 2) == 0 ){
      
  }



 
?>