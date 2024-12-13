<?php
$nome = "kaique";
//echo $nome;

$valorDia = 80;
$gorjeta = 20;
$diaria = $valorDia + $gorjeta;
//echo $diaria;

//definição de constantes

define("nome", "Kaique");
define("idade", 20);
//echo nome . " tem " . idade . " anos";

//tipo de variáveis

$nome  = "Kaique"; //string
$idade = 20; //int
$ano = 2021; //long , long é para números muito grandes
$peso = 70.5; //float
$casado = false; //boolean
$filhos = null; //null
//echo gettype($nome); // forma de saber o tipo de variável
//var_dump($ano); // forma de saber o tipo de variável

//echo "<h1>Olá</h1>";


//datas
$myYear = new DateTime("2004-11-25");
$myAge = new DateTime();

$interval = $myYear->diff($myAge);
echo $interval->y;
echo "<br>";


date_default_timezone_set('America/Sao_Paulo'); //definindo o fuso horário
echo date('h:i:s a');  // h = hora, i = minuto, s = segundo, a = am ou pm
?>

