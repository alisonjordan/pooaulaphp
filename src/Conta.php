<?php

class Conta {
    private $saldo;
    private $titular;
    private $cpf;
    private $idConta;
    

    //MÉTODOS

    //MÉTODO CONSTRUTOR
    public function __construct($saldoInicial, $titular, $cpf, $idConta) {
        $this->saldo = $saldoInicial;
        $this->titular = $titular;
        $this->cpf = $cpf;
        $this->idConta = $idConta;
    }
    
    //MÉTODO TRANSFERÊNCIA
    public function transferencia($valor, $contaDestino) {
        if ($valor > $this->saldo) {
            return "Saldo insuficiente para realizar a transferência.";
        } else {
            $this->saldo -= $valor;
            $contaDestino->deposito($valor);
            return "Transferência realizada com sucesso.";
        }
    }

    //MÉTODO SAQUE
    public function saque($valor) {
        if ($valor > $this->saldo) {
            return "Saldo insuficiente para realizar o saque.";
        } else {
            $this->saldo -= $valor;
            return "Saque realizado com sucesso.";
        }
    }
    
    //MÉTODO DÉPOSITO
    public function deposito($valor) {
        $this->saldo += $valor;
        return "Depósito realizado com sucesso.";
    }
    
    //MÉTODO VISUALIZAR DADOS DA CONTA
    public function visualizarDados() {
        return "Titular: " . $this->titular . "\nCPF: " . $this->cpf . "\nID da conta: " . $this->idConta . "\nSaldo: R$ " . $this->saldo;
    }
    
    //MÉTODO VER SALDO
    public function getSaldo() {
        return $this->saldo;
    }
}
