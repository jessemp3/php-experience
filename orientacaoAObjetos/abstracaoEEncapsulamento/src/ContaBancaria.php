<?php

declare(strict_types=1);//tipagem estrita para o arquivo inteiro

namespace App;
use App\contrato\DadosContaBancariaInterface;
use App\contrato\OperacoesContaBancariaInterface;

abstract class ContaBancaria implements DadosContaBancariaInterface , OperacoesContaBancariaInterface{
    protected string $banco ;

    public function getBanco(): string
    {
        return $this->banco;
    }//atributo
    protected string $nomeTitular = 'Fulano de Tal';

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }//atributo
    protected string $numeroAgencia = '1234-5';

    public function getNumeroAgencia(): string
    {
        return $this->numeroAgencia;
    }//atributo
    protected string $numeroConta = '12345-6';

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }//atributo
    protected float $saldo;


    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float $saldo
    )//metodo construtor
    {
       $this->banco = $banco;
       $this->nomeTitular = $nomeTitular;
       $this->numeroAgencia = $numeroAgencia;
       $this->numeroConta = $numeroConta;
       $this->saldo = $saldo;

    }


    public function  depositar(float $valor):string
    {
        $this->saldo += $valor;
        return "Deposito de R$ " . number_format($valor , 2 , "," , "") . " realizado com sucesso";
    }

    public function sacar(float $valor):string
    {
        $this->saldo -= $valor;
        return "Saque de R$ " . number_format($valor , 2 , "," , "") . " realizado com sucesso";
    }

    public abstract function obterSaldo(): string;

    //metodo
//    public function exibirNomeEConta():array//definindo o tipo de retorno que no caso é um array
//    {
//        return [
//            "banco" => $this->banco,//this é uma palavra reservada que faz referencia ao objeto que está sendo instanciado
//            "nomeTitular" => $this->nomeTitular,
//            "numeroAgencia" => $this->numeroAgencia,
//            "numeroConta" => $this->numeroConta,
//            "saldo" => $this->saldo
//
//        ];
//    }

//    public function setBanco(string $banco):void//void é o tipo de retorno que não retorna nada
//        //sets são metodos que setam valores para os atributos privados
//    {
//        $this->banco = $banco;
//    }

//    public function getSaldo():string//tem que ser do mesmo tipo que o atributo
////        gets são metodos que retornam valores dos atributos privados
//
//    {
//        return $this->banco;
//    }

}
