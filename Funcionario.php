<?php
    namespace PHP\Modelo;
    require_once("Pessoa.php");
    use PHP\Modelo\Pessoa;


    class Funcionario extends Pessoa{

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    string $endereco,
                                    string $cargo,
                                    float  $salario

        )
        {

            parent:: __construct($cpf,$nome,$telefone,$endereco);
            $this->cargo = $cargo;
            $this->salario = $salario;
        }//fim do construtor    

        public function __get(string $nome):mixed
        {
            return $this->nome;
        }//fim do método

    public function __set(string $nomeVariavel, string $dado)



    
    }



?>