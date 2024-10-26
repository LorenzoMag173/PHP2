<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');
    require_once('Pessoa.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    Class Cliente extends Pessoa{
        private float $precoTotal;

        public function __construct(string $cpf,
                                    string $nome,
                                    string $telefone,
                                    Endereco $endereco

        )                            
        {
            parent::__construct($cpf,$nome,$telefone,$endereco);
            $this->precoTotal = $precoTotal;
        }//fim do contrutor

        //metodos gets e sets
        public function __get(string $nome){
            return $this->nome;

        }//fim do get set

        public function __set(string $nomeVariavel, string $novoDado):void 
        {

            $this->nomeVariavel = $novoDado;
        }//fim do metodo set 
        
        public function imprimir():string 
        {
            return parent::imprimir().      
                    "<br>Preço total:  ".this->precoTotal;
        }//fim do imprimir



    }//fim da classe

?>