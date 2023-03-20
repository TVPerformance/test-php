<?php


class TV {
    public $maker;
    public $owner;
    public static $channelList = [1 => 'TV3', 2 => 'LRT', 3 => 'BTV', 4 => 'LNK'];
    private $watchNow;

    public function __construct($maker, $owner)
    {
        $this->maker = $maker;
        $this->owner = $owner;
    }

    public function watch(int $a)
    {
        $this->watchNow = $a;
        echo '<h2>'.$this->owner.' --> '.self::$channelList[$this->watchNow].'</h2>';
    }

}

