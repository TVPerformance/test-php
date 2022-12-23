<?php


$data = [
    ['surname' => 'khgu', 'id' => rand(100000, 1000000), 'name' => 'Bebras',  'asmens_kodas' => '345', 'tugrik' => 10, 'sask_nr' => rand(1, 10000)],
    ['surname' => 'hhuhuh', 'id' => rand(100000, 1000000), 'name' => 'Zebras', 'asmens_kodas' => '789', 'tugrik' => 10, 'sask_nr' => rand(1, 10000)],
    ['surname' => 'sdew', 'id' => rand(100000, 1000000), 'name' => 'Vilkas', 'asmens_kodas' => '212', 'tugrik' => 10, 'sask_nr' => rand(1, 10000)],
    ['surname' => 'qwert', 'id' => rand(100000, 1000000), 'name' => 'Kiskis',  'asmens_kodas' => '999', 'tugrik' => 10, 'sask_nr' => rand(1, 10000)],
    ['surname' => 'wertyga', 'id' => rand(100000, 1000000), 'name' => 'Ceburaska', 'asmens_kodas' => '987', 'tugrik' => 10, 'sask_nr' => rand(1, 10000)],
];
file_put_contents(__DIR__ . '/data', serialize($data));