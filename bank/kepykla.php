<?php

$users = unserialize(file_get_contents(__DIR__ . '/data'));

$naujas = [];
if (mb_strlen($_POST['surname']) >= 3){
    $naujas['surname'] = $_POST['surname'];
} else {
    header('Location: http://localhost/test-php/bank/error.php');
    die;}

$id = rand(100000, 1000000);
$naujas['id'] = $id;

if(mb_strlen($_POST['name']) >= 3){
    $naujas['name'] = $_POST['name'];
} else {header('Location: http://localhost/test-php/bank/error.php');
    die;}
    
foreach($users as $index => $user) {
    if($_POST['asmens_kodas'] == $user['asmens_kodas']) {
        header('Location: http://localhost/test-php/bank/errorAK.php');
        die;
    }
};
$naujas['asmens_kodas'] = $_POST['asmens_kodas'];
$naujas['eL'] = 0;
$naujas['sask_nr'] = $_GET['sask_nr'];
$users[] = $naujas;

file_put_contents(__DIR__ . '/data', serialize($users));
header('Location: http://localhost/test-php/bank/');