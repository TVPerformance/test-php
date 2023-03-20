<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>

<body>
    
<?php    
    
    
echo '<pre>';
print_r($_GET);

?>

<a href="http://localhost/test-php/pirmadienis.php?color=blue&text=Blue">BLUE</a>
<a href="http://localhost/test-php/pirmadienis.php?color=red&text=Red">RED</a>
<a href="http://localhost/test-php/pirmadienis.php?color=black&text=Reset">RESET</a>

<form action="http://localhost/test-php/pirmadienis.php">

<input type="text" name="color">
<input type="text" name ="text">
<button type="submit">GO</button>

</form>

<h1 style="color:<?= $_GET['color'] ?? '' ?>;"><?= $_GET['text'] ?? 'no no' ?></h1>

</body>
</html>
