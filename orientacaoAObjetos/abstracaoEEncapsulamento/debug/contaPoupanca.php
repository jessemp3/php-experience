<?php

require __dir__ . '/../vendor/autoload.php';

use App\contasTipo\ContaPoupanca;
use App\contrato\DadosContaBancariaInterface;
use App\contrato\OperacoesContaBancariaInterface;


function executarOperacoes(OperacoesContaBancariaInterface $conta):void
{
    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->depositar(500);
    echo PHP_EOL;

    echo $conta->obterSaldo();
    echo PHP_EOL;

    echo $conta->sacar(200);
    echo PHP_EOL;

    echo $conta->obterSaldo();
    echo PHP_EOL;
}

function exibirDados(DadosContaBancariaInterface $conta):void
{
    echo $conta->getBanco();
    echo PHP_EOL;

    echo "ag./conta:" . $conta->getNumeroAgencia() . "/" . $conta->getNumeroConta();
    echo PHP_EOL;

    echo "Titular: " . $conta->getNomeTitular();
    echo PHP_EOL;

    echo "---------------------------------";
    echo PHP_EOL;
}

$conta = new ContaPoupanca(
    'Banco do Brasil',
    'Fulano de Tal',
    '1234-5',
    '12345-6',
    1000
);

exibirDados($conta);
executarOperacoes($conta);

