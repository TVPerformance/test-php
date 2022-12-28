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
    <link rel="stylesheet" href="./main.css">
    <title>Bank</title>
  </head>
  <body>
    <ul style="background-color: skyblue;">
      <div style="justify-content: space-between; display: flex">
       <p style="font-size: 50px; font-weight: 900; color: 	#DAA520">ELITAS</p>
       <div style="margin: 80px 50px 0 0;">
          <a style="text-decoration: none; margin-right: 10px; padding: 10px; background-color: #1170FF;
          color: #ffffff; border-radius: 5px; border: solid #000 2px" href="http://localhost/test-php/bank/nauja_sask.php">Nauja sąskaita</a>
          <a style="text-decoration: none; padding: 10px; background-color: #1170FF; color: #ffffff; border-radius: 5px; border: solid #000 2px" href="#">Prisijungti</a>
       </div>
      </div>
      <?php foreach ($users as $user) : ?>
        <li style="margin-bottom: 20px; background-color: #BFF7FF; padding: 12px">
        <div style="display: flex; justify-content: space-between">
        <div>
          <span style="font-size: 20px; font-weight: bold"><?= $user['name'] ?> <?= $user['surname'] ?></span><br>
          <span style="font-weight: 900">Balansas: <?= $user['eL'] ?> eL</span>
        </div>
          <div style="display: flex">
          <form action="http://localhost/test-php/bank/delete.php?id=<?= $user['id'] ?>" method="post">
            <button type="submit" style="padding: 10px; background-color: #808080; color: #FFFFFF; border-radius: 5px; margin-top: 13px; margin-right: 10px">Ištrinti</button>
      </form>
      <form action="http://localhost/test-php/bank/pridėtipsl.php?id=<?= $user['id'] ?>" method="post">
        <!--<input type="text" name="tugrik">-->
        <button type="submit" style="padding: 10px; background-color: #1170FF; border-radius: 5px; margin-top: -6px; margin-right: 10px; margin-top: 13px;">Pridėti lėšų</button>
      </form>
      <form action="http://localhost/test-php/bank/nuskaičiuoti.php?id=<?= $user['id'] ?>" method="post">
        <!--<input type="text" name="tugrik">-->
        <button type="submit" style="padding: 10px; background-color: #1170FF; border-radius: 5px;margin-top: -6px; margin-right: 10px;  margin-top: 13px;">Nuskaičiuoti lėšas</button>
      </form>
      </div>
      </div>
      <p style="margin: 0; font-size: large;"><?= $user['sask_nr'] ?></p>
      </li>
      <?php endforeach ?>
    </ul>
</body>
</html>