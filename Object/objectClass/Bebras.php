<?php

class Bebras {

    public $color;
    private $age;
    private $isLive = true;
    
    public function __construct($c)
    {
        echo "<h1 style='color: $c'>Sukurta</h1>";
        $this->age = rand(1, 15);
        $this->color = $c;
    }

    public function __destruct()
    {
        echo '<h1>gone</h1>';
    }

    public function age() : string
    {
        return $this->age;
    }

    public function setAge(int $newAge) : void
    {
        if($newAge > 40)
        {
            $this->isLive = false;
        }
        $this->age = $newAge;
    }

    
    public function color() : string
    {
        return $this->color;
    }

    public function isHeAlive() : bool
    {
        return $this->isLive;
    }
}