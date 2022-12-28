<?php


$data = [
    ['surname' => 'Užtvanka', 'id' => rand(100000, 1000000), 'name' => 'Bebras',  'asmens_kodas' => '345', 'eL' => 10, 'sask_nr' => rand(1, 10000)],
    ['surname' => 'Dryžuotas', 'id' => rand(100000, 1000000), 'name' => 'Zebras', 'asmens_kodas' => '789', 'eL' => 10, 'sask_nr' => 'LT123456789012345678'],
    ['surname' => 'Pilkas', 'id' => rand(100000, 1000000), 'name' => 'Vilkas', 'asmens_kodas' => '212', 'eL' => 10, 'sask_nr' => rand(1, 10000)],
    ['surname' => 'Piškis', 'id' => rand(100000, 1000000), 'name' => 'Kiškis',  'asmens_kodas' => '999', 'eL' => 10, 'sask_nr' => rand(1, 10000)],
    ['surname' => 'Pūkuotukas', 'id' => rand(100000, 1000000), 'name' => 'Mikė', 'asmens_kodas' => '987', 'eL' => 10, 'sask_nr' => rand(1, 10000)],
];
file_put_contents(__DIR__ . '/data', serialize($data));