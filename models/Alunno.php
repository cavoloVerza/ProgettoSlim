<?php

    class Alunno implements JsonSerializable{

        protected $nome;
        protected $cognome;
        protected $eta;

        function set_nome($nome) {
            $this->nome = $nome;
        }
        
        function get_nome() {
            return $this->nome;
        }

        function set_cognome($cognome) {
            $this->cognome = $cognome;
        }
        
        function get_cognome() {
            return $this->cognome;
        }

        function set_eta($eta) {
            $this->eta = $eta;
        }
        
        function get_eta() {
            return $this->eta;
        }

        function toString() {

            return "Nome: " . $this->nome . ", Cognome: " . $this->cognome . ", Età: " . $this->eta;
        }

        public function jsonSerialize(){

            $a = [
                "nome" => $this->nome,
                "cognome" => $this->cognome,
                "eta" => $this->eta
            ];
            return $a;

        }

    }

?>
