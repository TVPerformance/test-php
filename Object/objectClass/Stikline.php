<?php

class Stikline {
    private $turis;
    private $kiekis = 0;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        if($kiekis > $this->turis){
            $this->kiekis = $this->turis;
        }
    }

    public function ispilti()
    {
        $ispilta = $this->kiekis;
        $this->kiekis = 0;
        return $ispilta;
    }



}