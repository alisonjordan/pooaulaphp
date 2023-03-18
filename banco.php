<?php


//ARQUIVO QUE FAZ A CHAMADA DA CLASSE E DE SEUS MÉTODOS

include 'src/Conta.php';


$contatitular1 = new Conta(100,'Titular 1','11111111111', 01);
$contatitular2 = new Conta(200,'Titular 2','22222222222', 02);


echo $contatitular1->visualizarDados() . PHP_EOL;

echo $contatitular1->saque(25) . PHP_EOL;

echo $contatitular1->deposito(100) . PHP_EOL;

echo $contatitular1->transferencia(250,$contatitular2) . PHP_EOL;

echo $contatitular1->getSaldo() . PHP_EOL;

echo $contatitular2->getSaldo() . PHP_EOL;



