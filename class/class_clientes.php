<?php

class Cliente{
	public $cpf;
	public $endereco;
	public $nome;
	public $sobrenome;
	
	public function __construct($nome, $sobrenome, $cpf, $endereco){
		$this->nome = $nome;
		$this->sobrenome = $sobrenome;
		$this->cpf = $cpf;
		$this->endereco = $endereco;
	
	}
	public function getNome(){
		return $this->nome . ' ' . $this->sobrenome;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function getEndereco(){
		return $this->endereco;
	}
}

$cliente1 = new Cliente('Rafael' , 'Triolo', '319.179.478.60' , 'Rua 1');
$cliente2 = new Cliente('Lucas' , 'Triolo', '733.335.419-98' , 'Rua 2');
$cliente3 = new Cliente('Laís' , 'Triolo', '929.426.621-40' , 'Rua 3');
$cliente4 = new Cliente('Patrícia' , 'Triolo', '195.733.016-36' , 'Rua 4');
$cliente5 = new Cliente('Adriana' , 'Triolo', '753.623.834-77' , 'Rua 5');
$cliente6 = new Cliente('Thaís' , 'Araújo', '965.476.649-37' , 'Rua 6');
$cliente7 = new Cliente('Henrique' , 'Triolo', '671.660.485-57' , 'Rua 7');
$cliente8 = new Cliente('Bruna' , 'Prado', '649.797.084-39' , 'Rua 8');
$cliente9 = new Cliente('Luis' , 'Piazza', '493.727.020-64' , 'Rua 9');
$cliente10 = new Cliente('Felipe' , 'Robert', '693.084.177-37' , 'Rua 10');

$clientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);


