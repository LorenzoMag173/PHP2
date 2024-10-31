<?php
    namespace PHP\Modelo;
    require_once('tipoconsulta.php');
    require_once('hora.php');
    require_once('data.php');
   
    use PHP\Modelo\tipoconsulta;
    use PHP\Modelo\hora;
    use PHP\Modelo\data;
 
    class Consulta extends Pessoa{
 
        protected string $tipoConsulta;
        protected string $hora;
        protected string $data;
       
 
        public function __construct(string $tipoConsulta,
                                    string $hora,
                                    string $data
                                   
 
        )
 
        {
 
            $this->tipoConsulta      = $tipoConsulta;
            $this->hora     = $hora;
            $this->data =$data;
           
 
        }//fim do metodo
 
        public function __get(string $tipoConsulta)
        {
            return $this->tipoConsulta;
        }//fim do metodo
 
        public function __set(string $tipoConsultaVariavel, string $dado):void
        {
            $this->tipoConsultaVariavel = $dado;
        }//fim do metodo
 
        public function imprimir():string
        {
            return "<br>CPF:".$this->tipoConsulta.
                   "<br>Nome:".$this->hora.
                   "<br>Telefone:".$this->data;
                   
               
 
 
 
        }
 
   
    }//fim da classe
 
?>