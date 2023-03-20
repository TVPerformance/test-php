<?php

$users = unserialize(file_get_contents(__DIR__ . '/data'));
usort ($users, fn($a, $b) => $a['surname'] <=> $b['surname']);

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
<div style="justify-content: space-between; display: flex">
       <p style="font-size: 50px; font-weight: 900; color: #DAA520">ELITAS</p>
       <div style="margin: 80px 50px 0 0;">
          <a style="text-decoration: none; margin-right: 10px; padding: 10px; background-color: #1170FF;
          color: #ffffff; border-radius: 5px; border: solid #000 2px" href="http://localhost/test-php/bank/">Sąskaitų sarašas</a>
          <a style="text-decoration: none; margin-right: 10px; padding: 10px; background-color: #1170FF;
          color: #ffffff; border-radius: 5px; border: solid #000 2px" href="http://localhost/test-php/bank/nauja_sask.php">Nauja sąskaita</a>
          <a style="text-decoration: none; padding: 10px; background-color: #1170FF; color: #ffffff; border-radius: 5px; border: solid #000 2px" href="#">Prisijungti</a>
       </div>
      </div>
      <?php foreach ($users as $user) : ?>
       <?php if ($user['id'] == $_GET['id']) : ?>
        <span style="font-size: 30px; font-style: 900"><?= $user['name'] ?></span>
        <span style="font-size: 30px; font-style: bold"><?= $user['surname'] ?></span>
        <span>Balansas: <?= $user['eL'] ?> eL</span>
        <?php endif ?>
        <?php endforeach ?>
<form action="http://localhost/test-php/bank/pridėti.php?id=<?= $_GET['id'] ?>" method="post">
        <input style="font-size: 25px; font-weight: bold" type="text" name="eL">
        <button style="padding: 10px; background-color: #1170FF; border-radius: 5px; margin-top: -6px; margin-right: 10px;" type="submit">Pridėti lėšų</button>
      </form>
    </ul>
</body>
</html>