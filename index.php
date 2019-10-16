<?php
require("Funcionario.php");
require("Supervisor.php");
require("Gerente.php");
require("Secretaria.php");
$Ana = new Secretaria("Beatriz Sagel",18,"15/10/2019","123.123.123-12","ana@hotmail.com");

$Ana->dadosFuncionario();
$Ana->dadosFinanceiro();

$Joao = new Gerente("Bino Caminhoneiro",22,"15/10/2013","123.123.123-13","joao@hotmail.com");
$Joao->dadosFuncionario();
$Joao->dadosFinanceiro();

$Jose = new Supervisor("Capitão Planeta",50,"15/10/2015","123.123.123-14","jose@hotmail.com");
$Jose->dadosFuncionario();
$Jose->dadosFinanceiro();
?>