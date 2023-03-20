<?php

class KibirasNePo1 extends Kibiras3 {
   
   
   
    public function idetiVienaAkmeni() : void
    {
        $this->akmenuKiekis = $this->akmenuKiekis + rand(2, 5);
    }

}