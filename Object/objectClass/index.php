<?php
require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';
require __DIR__ . '/Stikline.php';
require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';
require __DIR__ . '/Cart.php';
require __DIR__ . '/Kibiras2.php';
require __DIR__ . '/Medziaga.php';
require __DIR__ . '/Kiauras.php';
require __DIR__ . '/Pinigine.php';
// echo '<pre>';

// require(__DIR__ . '/Bebras.php');

// $bebras1 = new Bebras('red');
// $bebras2 = new Bebras('blue');

// $bebras1->setAge(38);
// $bebras2->setAge(88);

// var_dump($bebras1);
// var_dump($bebras2);

// echo '<br>';
// print_r($bebras1);
// echo '<br><br>';
// print_r($bebras2);
// echo '<br><br>';
// echo $bebras2->isHeAlive();
// echo '<br><br>';

// print_r($bebras1);
// print_r($bebras2);

//echo $bebras1->color();
// Bebro reikalai!!!!!!!!!!

// require __DIR__ . '/Miskas.php';
// require __DIR__ . '/Zveris.php';
// require __DIR__ . '/Briedis.php';

// $briedis1 = new Briedis;
// $briedis2 = new Briedis;

// $briedis1->color = 'yellow';
// echo $briedis1->color;
// echo '<br>';
// echo $briedis2->blabla;
// echo '<pre>';
// echo $briedis2->age;
// echo '<pre>';

// print_r($briedis1);
// echo '<pre>';
// var_dump($briedis2);
// $briedis1->aidas();
// Misko/zveries/briedzio reikalai

require __DIR__ . '/Duobe.php';
require __DIR__ . '/Kibiras1.php';

$kibiras1 = new Kibiras1;
$kibiras2 = new Kibiras1(11, 'red');

$kibiras1->idetiVienaAkmeni();
$kibiras1->idetiVienaAkmeni();
$kibiras1->idetiDaugAkmenu(7);
$kibiras1->kiekPririnktaAkmenu();
echo '<pre>';
$kibiras2->kiekPririnktaAkmenu();
echo '<pre>';
$kibiras2->ispilti([]);
print_r($kibiras2);
echo '<pre>';
$kibiras2->kiekPririnktaAkmenu();
// kibiro reikalai



$mano = new Pinigine;

$mano->ideti(1);
echo '<pre>';
$mano->ideti(3);
echo '<pre>';
$mano->ideti(4);
echo '<pre>';
$mano->ideti(6.6);
echo '<pre>';
$mano->skaiciuoti();
echo '<pre>';

var_dump($kibiras1 instanceof Kibiras1);

// (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.

Kibiras2::akmenuKiekisVisuoseKibiruose();

$k1 = new Kibiras2;
$k2 = new Kibiras2;
$k3 = new Kibiras2;

echo '<pre>';

$k1->rinkti(3);
$k2->rinkti(7);
$k3->rinkti(20);

Kibiras2::akmenuKiekisVisuoseKibiruose();
echo '<pre>';

$vezimas = Cart::getCart();
$vezimas1 = Cart::getCart();
echo '<h1>'.$vezimas->id.'</h1>';
echo '<h1>'.$vezimas1->id.'</h1>';
echo '<pre>';

$kib = new KibirasNePo1;

$kib->idetiDaugAkmenu(3);
$kib->idetiVienaAkmeni();
$kib->kiekPririnktaAkmenu();
echo '<pre>';


$stakanas1 = new Stikline(100);
$stakanas2 = new Stikline(150);
$stakanas3 = new Stikline(200);
echo '<pre>';

$stakanas3->ipilti(1000);
$stakanas2->ipilti($stakanas3->ispilti());
$stakanas1->ipilti($stakanas2->ispilti());

print_r($stakanas1);
print_r($stakanas2);
print_r($stakanas3);
echo '<pre>';

$krep = new Krepsys;

while($krep->grybauti(new Grybas)){};
print_r($krep);


