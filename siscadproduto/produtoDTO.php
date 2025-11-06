<?php 
    class ProdutoDTO{
        private $id;
        private $nome;
        private $valor;
        private $quantidade;
        private $descricao;
        
        public function __contruct(){
            
        }
        
        public function __setId($id){
            $this->$id = $id;
        }
        
        public function __getId($id){
            return $this->$id;
        }

        public function __setNome($nome){
            $this->$nome = $nome;
        }
        
        public function __getNome($nome){
            return $this->$nome;
        }

        public function __setValor($valor){
            $this->$valor = $valor;
        }
        
        public function __getValor($valor){
            return $this->$valor;
        }

        public function __setQuantidade($quantidade){
            $this->$quantidade = $quantidade;
        }
        
        public function __getQuantidade($quantidade){
            return $this->$quantidade;
        }
        
        public function __setDescricao($descricao){
            $this->$descricao = $descricao;
        }
        
        public function __getDescricao($descricao){
            return $this->$descricao;
        }
    }
?>