<?php

function h1(string $text) : string
{
    return '<h1 style="display: inline; color: red;">'.$text.'</h1>';
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcinis</title>
</head>
<body>
  <?= md5(time()) ?>
</body>
</html>