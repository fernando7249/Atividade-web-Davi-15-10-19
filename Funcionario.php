<?php 

class Funcionario{

private $nome;
private $idade;
private $dataEntrada;
protected $cargo;
private $cpf;
private $contato;

public function __construct($nomeParametro, $idadeParametro, $dataEntradaParametro, $cpfParametro, $contatoParametro){
    $this->setNome($nomeParametro);
    $this->setIdade($idadeParametro);
    $this->setCPF($cpfParametro);
    $this->setContato($contatoParametro);
    $this->setDataEntrada($dataEntradaParametro);
    $this->setCargo();
}
public function dadosFuncionario(){
    $this->getNome();
    $this->getIdade();
    $this->getCPF();
    $this->getContato();   
    $this->getDataEntrada();
    $this->getCargo();
    echo "<br>";
}
public function setNome($nomeParametro){
    $this->nome = $nomeParametro;
}
public function getNome(){
    echo "Nome: ",$this->nome;
    echo "<br>";
}
public function setIdade($idadeParametro){
    $this->idade = $idadeParametro;
}
public function getIdade(){
    echo "Idade: ",$this->idade;
    echo "<br>";
}
public function setDataEntrada($dataEntradaParametro){
    $this->dataEntrada = $dataEntradaParametro;
}
public function getDataEntrada(){
    echo "Data de entrada: ",$this->dataEntrada;
    echo "<br>";
}
public function setCargo(){
    $this->cargo = "Sem cargo";
}
public function getCargo(){
    echo "Cargo: ",$this->cargo;
    echo "<br>";

}
public function setCpf($cpfParametro){
    $this->cpf = $cpfParametro;
}
public function getCpf(){
    echo "CPF: ",$this->cpf;
    echo "<br>";
}
public function setContato($contatoParametro){
    $this->contato = $contatoParametro;
}
public function getContato(){
    echo "Contato: ",$this->contato;
    echo "<br>";
}
}
?>