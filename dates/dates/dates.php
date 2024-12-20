<?php


//echo date('d/m/Y');
//echo PHP_EOL;
//
//echo date('h:i:s a');


date_default_timezone_set('America/Sao_Paulo');
$data = new DateTime();
//echo $data -> format('d/m/y H:i:s');//pega a data e hora atual

//$intervalo = new DateInterval('PT5M');//adiciona 5 minutos , p = period, t = time, 5 = 5, m = minutes
//$data->add($intervalo);
//var_dump($data);

$intervalo = new DateInterval('P5DT10H50M');
$data->add($intervalo);
echo $data->format('d/m/y H:i:s');

//