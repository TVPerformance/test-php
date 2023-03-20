<?php


require __DIR__ . '/TV.php';


$tv1 = new TV('LG', 'Ona');
$tv2 = new TV('LG', 'Petras');
$tv3 = new TV('LG', 'Algis');

echo '<pre>';

$tv1->watch(1);
$tv2->watch(2);
$tv3->watch(3);

echo '<pre>';

TV::$channelList = [1 => 'TV3', 2 => 'TVI', 3 => 'BTV', 4 => 'LNK'];


$tv1->watch(1);
$tv2->watch(2);
$tv3->watch(3);
