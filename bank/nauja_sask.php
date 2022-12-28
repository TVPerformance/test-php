<?php
$arr = unserialize(file_get_contents(__DIR__ . '/data'));


$naujaSask = 'LT'.rand(0, 9).rand(0, 9).'16180'.rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9);

foreach($arr as $index => $user){
        if ($naujaSask == $user['sask_nr']){
                die;
        }
}
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
        <h1><?= $naujaSask ?></h1>
<form action="http://localhost/test-php/bank/kepykla.php/?sask_nr=<?= $naujaSask ?>" method="post">
        <input type="hidden" value="<?= $naujaSask ?>" name="sask_nr" readonly>
        <input style="font-size: 25px; font-weight: bold" type="text" name="name">vardas</input><br><br>
        <input style="font-size: 25px; font-weight: bold" type="text" name="surname">pavardė</input><br><br>
        <input style="font-size: 25px; font-weight: bold" type="text" name="asmens_kodas">asmens kodas</input><br>
        <button style="text-decoration: none; padding: 10px; background-color: #FFD700; color: #000000; border-radius: 5px; margin-top: 20px" type="submit">Sukurti</button>
      </form>
</ul>
</body>
</html>