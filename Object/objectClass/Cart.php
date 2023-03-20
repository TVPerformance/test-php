<?php


class Cart {
    private $Id;
    private static $cart;

    public static function getCart() : self
    {
        return self::$cart ?? self::$cart = new self;
    }

    private function __construct()
    {
        $this->Id = rand(1, 1000);
    }

    public function __get($prop)
    {
        return $this->Id;
    }
}