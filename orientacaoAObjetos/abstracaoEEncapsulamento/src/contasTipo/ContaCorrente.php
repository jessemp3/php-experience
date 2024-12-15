<?php

namespace App\contasTipo;

use App\ContaBancaria;

class ContaCorrente extends ContaBancaria
{
    const TAXA = 25;
    const TIPO_CONTA = "Conta Corrente";

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        parent::__construct($banco, $nomeTitular, $numeroAgencia,$numeroConta,$saldo);
    }

    public function obterSaldo():string
    {
        return "Saldo atual da conta corrente de  é de R$ " . number_format(($this->saldo - self::TAXA), 2, ",", "");
    }


}