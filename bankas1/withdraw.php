<?php

$users = unserialize(file_get_contents(__DIR__ . '/data'));

$id = (int) $_GET['id'];
$path = 'Location: http://localhost/test-php/bank/';

foreach($users as $index => $user) {
    if ($user['id'] == $id && $users[$index]['eL'] - $_POST['eL'] >= 0 ){
     $users[$index]['eL'] -= (int) $_POST['eL']; 
     break;
    } elseif ($user['id'] == $id && $users[$index]['eL'] - $_POST['eL'] < 0 ) {$path = 'Location: http://localhost/test-php/bank/errorNoCredit.php';
    break;}

};
file_put_contents(__DIR__ . '/data', serialize($users));
header($path);