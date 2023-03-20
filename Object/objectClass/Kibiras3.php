<?php

class Kibiras3 {
    protected $akmenuKiekis;

    public function __construct()
    {
        $this->akmenuKiekis = 0;
    }

    public function idetiVienaAkmeni() : void
    {
        $this->akmenuKiekis++;
    }

    public function idetiDaugAkmenu(int $kiek) : void
    {
        $this->akmenuKiekis += $kiek;
    }

    public function kiekPririnktaAkmenu() : void
    {
        echo '<h1>Pririnkta: '.$this->akmenuKiekis.'</h1>';
    }

    public function ispilti(array $a) :bool
    {
      $this->akmenuKiekis = 0;
      return true;  
    }

}