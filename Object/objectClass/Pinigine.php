<?php

class Pinigine {

    private $popieriniai;
    private $metaliniai;

    public function __construct()
    {
        $this->popieriniai = 0;
        $this->metaliniai = 0;
    }

    public function ideti(float $kiekis) : void
    {
        if($kiekis < 2){$this->metaliniai += $kiekis;}
        else{$this->popieriniai += $kiekis;}
    }

    public function skaiciuoti() : void
    {
        (float)$sum = $this->popieriniai + $this->metaliniai;
        echo '<h1>'.(float)$sum.'</h1>';
    }




}


