<?php

    class Classe implements JsonSerializable{

        protected $array;
        protected $nome;

        public function __construct() {

            $A1 = new Alunno();
            $A2 = new Alunno();
            $A3 = new Alunno();

            $this->array = [$A1,$A2,$A3];

            $A1 -> set_nome("Gabriele");
            $A1 -> set_cognome("Borgi");
            $A1 -> set_eta("19");

            $A2 -> set_nome("Andrea");
            $A2 -> set_cognome("Sestini");
            $A2 -> set_eta("18");


            $A3 -> set_nome("Samuele");
            $A3 -> set_cognome("Cosma");
            $A3 -> set_eta("18");

            $this->nome = "5cia";

        }

        public function search($nome){

            for($i = 0; $i < count($this->array ); $i++) {

                if($this->array[$i]->get_nome()== $nome)
                    return $this->array[$i];    

            }
            return null;
        }

        public function toString() {

            $string = "";
            for($i = 0; $i < count($this->array); $i++) {

                $string = $string . $this->array[$i]->toString();
            }

            return $string;
        }

        public function jsonSerialize(){

            $a = [
                "Nome: " => $this->nome,
                " Alunni: " => $this->alunni
            ];
            return $a;
        }

    }

?>