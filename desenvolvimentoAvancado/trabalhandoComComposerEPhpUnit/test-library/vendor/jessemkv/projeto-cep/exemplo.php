<?php

require_once __DIR__ . '/vendor/autoload.php';

use Wead\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('01050020');

print_r($resultado);

?>