<?php

declare(strict_types=1);

namespace App\contrato;

interface DadosContaBancariaInterface
{
     public function getBanco(): string;
    public function getNomeTitular(): string;
    public function getNumeroAgencia(): string;
    public function getNumeroConta(): string;
}