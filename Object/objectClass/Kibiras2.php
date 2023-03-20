<?php


class Kibiras2 {
    public $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose = 0;

    public static function akmenuKiekisVisuoseKibiruose() : void
    {
        echo '<h1>Pririnkta viso :'.self::$akmenuKiekisVisuoseKibiruose.'</h1>';
    }

    public function __construct()
    {
        $this->akmenuKiekis = 0;
    }

    public function __get($akmenuKiekisVisuoseKibiruose)
    {
        echo '<h2>'.self::$akmenuKiekisVisuoseKibiruose.'</h2>';
    }

    public function rinkti(int $kiekis)
    {
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }


}