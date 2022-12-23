<?php
$naujaSask = rand(1, 10000);

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
        <h1><?= $naujaSask ?></h1>
<form action="http://localhost/test-php/bank/kepykla.php/?sask_nr=<?= $naujaSask ?>" method="post">
        <input type="hidden" value="<?= $naujaSask ?>" name="sask_nr" readonly>
        <input type="text" name="name">vardas</input><br><br>
        <input type="text" name="surname">pavardė</input><br><br>
        <input type="text" name="asmens_kodas">asmens kodas</input><br><br>
        <button type="submit">Sukurti</button>
      </form>
</body>
</html>