<?php

class Briedis extends Zveris {
    public $color = 'brown';
    public $age = 11;
    public $isLive = true;
    public $browse = 'TIK TOK';



    public function __construct()
    {
        parent::__construct();
        echo '<h1>briedzio konstruktorius</h1>';
    }

    // public function __construct()
    // {
    //    echo $this->wealth; 
    // }

    public function __get($prop)
    {
        if ($prop == 'blabla'){
            return 'neidomu';
        }
        if(!in_array($prop, ['color', 'isLive']))
            {
                return 'no go';
            }
        return $this->$prop;
    }

    public function __set($prop, $what)
    {
        $this->$prop = $what. 'bu'; // atspausdins yellowbu kaip savybes reiksme!!!
    }



}


