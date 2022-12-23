<?php

$users = unserialize(file_get_contents(__DIR__ . '/data'));

$naujas = [];
$naujas['surname'] = $_POST['surname'];
$id = rand(100000, 1000000);
$naujas['id'] = $id;
$naujas['name'] = $_POST['name'];
$naujas['asmens_kodas'] = $_POST['asmens_kodas'];
$naujas['tugrik'] = 0;
$naujas['sask_nr'] = $_GET['sask_nr'];
$users[] = $naujas;

file_put_contents(__DIR__ . '/data', serialize($users));
header('Location: http://localhost/test-php/bank/');