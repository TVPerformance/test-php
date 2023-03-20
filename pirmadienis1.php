<?php

define('COLORS', ['red', 'green', 'blue']);
//$text = $_GET['text'] ?? '';
// $color = $_GET['color'] ?? 'ffffff';
if (preg_match('/^[0-9a-f]{6}/', $_GET['color'] ?? '')) {
    $color = '#'.$_GET['color'];
    $error = 0;
} elseif (in_array($_GET['color'] ?? '', COLORS)){
    $color = $_GET['color'];
    $error = 0;
}
else {
   $error = 1;
}
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main1.css">
    <title>Get</title>
</head>

<body>
    <?php if(!$error) : ?>
     <div class="sq" style="background-color: <?= $color ?>;"><?= $color ?></div>
    <?php else : ?>
        <h2>Bad color code</h2>
    <?php endif ?>

     <form action="http://localhost/test-php/pirmadienis1.php" method="get">
    <input type="text" name="color">
    <button type="submit">GO</button>
 </form>
</body>
</html>