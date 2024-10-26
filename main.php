<?php
    namespace PHP\Modelo;//Definir o local do projeto 
    require_once('Cliente.php');//Requisitando uma classe 
    require_once('pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Cliente;//definir a classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Funcionarios;


    $endCliente = new Endereco("Avenida senador verg",
                                400,
                                "centro",
                                "são paulo",
                                "Brasil",
                                 "03756-080");



    $cliente = new Cliente("12345","alana","1199999",$endCliente,560.60);//criar um objeto 
    $clienteDois = new Cliente("12","jorge","1188888",$endCliente,1020.25);

    echo $cliente->imprimir(); 
    echo $endCliente->imprimir()."<br>";
    
    echo $clienteDois->imprimir();
    echo $endCliente->imprimir()."<br>";
    
 


?>