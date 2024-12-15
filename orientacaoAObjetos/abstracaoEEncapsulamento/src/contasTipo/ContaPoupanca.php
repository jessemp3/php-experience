<?php

namespace App\contasTipo;

use App\ContaBancaria;
class ContaPoupanca extends ContaBancaria
{
    const RENDIMENTO = 25;
    const TIPO_CONTA = "Conta poupança";

    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    ) {
        parent::__construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo);
    }

    public function obterSaldo():string
    {
        return "Saldo atual da conta poupança é de R$ " . number_format(($this->saldo + ($this->saldo * self::RENDIMENTO)), 2, ",", "");
    }

}