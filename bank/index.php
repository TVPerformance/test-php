<?php

$arr = unserialize(file_get_contents(__DIR__ . '/data'));
usort ($arr, fn($a, $b) => $a['surname'] <=> $b['surname']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>
<body>
    <ul style="background-color: skyblue;">
    <ul>
      <li>
        <a href="http://localhost/test-php/bank/nauja_sask.php">Nauja sąskaita</a>
      </li>
    </ul>
      <?php foreach ($arr as $user) : ?>
      <li>
      <span><?= $user['name'] ?> <?= $user['surname'] ?> Tugrik: <?= $user['tugrik'] ?></span>
      <form action="http://localhost/test-php/bank/delete.php?id=<?= $user['id'] ?>" method="post">
        <button type="submit">Ištrinti</button>
      </form>
      <form action="http://localhost/test-php/bank/pridėtipsl.php?id=<?= $user['id'] ?>" method="post">
        <!--<input type="text" name="tugrik">-->
        <button type="submit">Pridėti</button>
      </form>
      <form action="http://localhost/test-php/bank/nuskaičiuoti.php?id=<?= $user['id'] ?>" method="post">
        <!--<input type="text" name="tugrik">-->
        <button type="submit">Nuskaičiuoti</button>
      </form>
      </li>
      <?php endforeach ?>
    </ul>
</body>
</html>