<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="1, initial-scale=1.0">
    <title>Document</title>
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
    <h2>Sąskaita tokiu asmens kodu jau atidaryta</h2>
    <form action="http://localhost/test-php/bank/nauja_sask.php">
        <button style="padding: 10px; background-color: #1170FF; border-radius: 5px; margin-top: -6px; margin-right: 10px;" type="submit">Grįžti</button>
    </form>
    </ul>
</body>
</html>