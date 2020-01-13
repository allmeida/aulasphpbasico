<?php

class Contato {
    public $nome;
    public $telefone;

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setTelefone($t) {
        $this->telefone = $t;
    }

    public function getTelefone() {
        return $this->telefone;
    }
}