<?php 
    class calculadora{
        public $numero1;
        public $numero2;
        
        public function __construct($numero1,$numero2){
            $this->numero1 = $numero1;
            $this->numero2 = $numero2;
        }

        public function somaNumeros(){
            echo nl2br("$this->numero1 + $this->numero2 = ".$this->numero1 + $this->numero2."\n");

            
        }

        public function subtraiNumeros(){
            echo nl2br("$this->numero1 - $this->numero2 = ".$this->numero1 - $this->numero2."\n");

            
        }

        public function multiplicaNumeros(){
            echo nl2br("$this->numero1 * $this->numero2 = ".$this->numero1 * $this->numero2."\n");

            
        }

        public function divideNumeros(){
            echo nl2br("$this->numero1 / $this->numero2 = ".$this->numero1 / $this->numero2."\n");   
        }
    }
?>