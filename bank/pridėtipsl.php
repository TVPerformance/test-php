<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
</head>
<body>
<ul>
      <li>
        <a href="http://localhost/test-php/bank/nauja_sask.php">Nauja sąskaita</a>
      </li>
      <li>
        <a href="http://localhost/test-php/bank/">Sąskaitų sąrašas</a>
      </li>
    </ul>
<form action="http://localhost/test-php/bank/pridėti.php?id=<?= $_GET['id'] ?>" method="post">
        <input type="text" name="tugrik">
        <button type="submit">Pridėti</button>
      </form>
</body>
</html>