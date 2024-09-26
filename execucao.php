<?php

require_once("modelo/Funcionario.php");
require_once("modelo/Departamento.php");

$funcionarios = array();

//Ler os 5 funcionários.
for ($i = 0; $i < 5; $i++) {

    echo "Funcionario " . $i . ".\n";

    $funcionario = new Funcionario;
    $funcionario->setNome(readline("Informe o nome do funcionário: "));
    $funcionario->setCargo(readline("Informe o cargo: \n"));
    $funcionario->setSalario(readline("Informe o salário: \n"));
    
    $depto = new Departamento;
    $depto->setNomed(readline("Informe o nome do departamento: \n"));
    $depto->setNumSala(readline("Insira o número da sala: \n"));
    $funcionario->setDepto($depto);
    
    array_push($funcionarios, $funcionario);
}

//Percorrer o arrray e exibir os dados de cada funcionário .
foreach ($funcionarios as $info) {
    echo "Dados dos sistema: \n";
    echo "Nome: " . $info->getNome() . ".\n";
    echo "Cargo: " . $info->getCargo() . ".\n";
    echo "Salário: " . $info->getSalario() . ".\n";
    echo "Departamento: " . $info->getDepto()->getNomed() . ".\n" . $info->getDepto()->getNumSala() . ".\n";
}
