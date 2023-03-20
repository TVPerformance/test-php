<?php

class Kibiras1 extends Duobe implements Kiauras, Medziaga {
    protected $akmenuKiekis;
    protected $color;

    public function __construct($count = 0, $color = 'green')
    {
        $this->akmenuKiekis = $count;
        $this->color = $color;
    }

    public function arKiauras() :bool
    {
        return false;
    }

    public function isKoPadarytas() :string
    {
         return 'plastikas';
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
        echo '<h1 style="color: '.$this->color.'">Pririnkta: '.$this->akmenuKiekis.'</h1>';
    }

    public function ispilti(array $a) :bool
    {
      $this->akmenuKiekis = 0;
      return true;  
    }
}

