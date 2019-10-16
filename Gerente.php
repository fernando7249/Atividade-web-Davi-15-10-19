<?php 

class Gerente extends Funcionario{
    

    
    private $salario;
    private $desconto;

public function __construct($nomeParametro, $idadeParametro, $dataEntradaParametro, $cpfParametro, $contatoParametro){
    parent::__construct($nomeParametro, $idadeParametro, $dataEntradaParametro, $cpfParametro, $contatoParametro);
    $this->setCargo();
    $this->setSalario();
    $this->setDesconto();
    }
public function dadosFinanceiro(){

    $this->getSalario();    
    echo "<br><br><br>";
    }
    
public function setCargo(){
    $this->cargo = "Gerente";
    }
public function getCargo(){
    echo "Cargo: ";
    echo $this->cargo;
    echo "<br>";
    }
public function setSalario(){
    $this->salario = 7000;
    }
public function getSalario(){       
    echo "Salário R$";
    echo $this->salario;
    echo "<br>";
    echo "Desconto de: R$";
    echo $this->salario*$this->desconto; 
    echo "<br>";
    echo "Salario final: R$";
    echo $this->salario-($this->salario*$this->desconto);
    }
 public function setDesconto(){
     $this->desconto=0.20;
    }

    
    
    
}


?>