<?php
    
    require_once("Cliente.php");
    
    class ClientePF extends Cliente
    {
        
        // Atributos
        
        private int $cpf;
        private string $nome;
        
        // Métodos
        
        public function getIdentificacao()
        {
            
            return $this->nome;
            
        }
        
        public function getNroDoc()
        {
            
            return $this->cpf;
            
        }
        
        public function getTipo()
        {
            
            return "F";
            
        }
        
        // ToString
        
        public function __toString()
        {
            
            return 
            parent::__toString() .
            "CPF: " . $this->cpf . "\n" .
            "Nome: " . $this->nome . "\n";
            
        }
        
        
        // GETS & SETS
        
        /**
         * Get the value of cpf
         */
        public function getCpf(): int
        {
            return $this->cpf;
        }
        
        /**
         * Set the value of cpf
         */
        public function setCpf(int $cpf): self
        {
            $this->cpf = $cpf;
            
            return $this;
        }
        
        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
            return $this->nome;
        }
        
        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
            $this->nome = $nome;
            
            return $this;
        }
    }
    
?>