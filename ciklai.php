<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
$zvaigzdute = '*';
foreach(range(1, 400) as $i){
    if ($zvaigzdute){echo "<div class='display'>$zvaigzdute</div>";}
};
echo '<br>';// 1


$zvaigzdute = '*';
foreach(range(1, 400) as $i){
    if ($i%50 !== 0){echo $zvaigzdute;}
    else {echo "$zvaigzdute<br>";}
};
echo '<br>';

//2
$didesniuKiekis = 0;
foreach(range(1, 300) as $i){
    $skaicius = rand(0, 300);
    if ($skaicius>250){echo "<a class='red'>$skaicius </a>";
        $didesniuKiekis++;
    } elseif ($skaicius>150){echo "<a>$skaicius </a>";
        $didesniuKiekis++;
    }else {echo "<a>$skaicius </a>";
    }
};
echo '<br>';
echo "Didesniu uz 150 kiekis: $didesniuKiekis";
echo '<br>';

//3
//echo '<pre>';
$atsitiktinis = rand(3000, 4000);
foreach(range(1, $atsitiktinis) as $i){
    if (($i < floor($atsitiktinis / 77)*77) && $i % 77 == 0){echo "<div class='display'>$i,</div>";}
    elseif ($i==floor($atsitiktinis / 77)*77){echo "<div class='display'>$i</div>";}
};
echo '<br>';

/*/4,5
$zvaigzdute = '*';
foreach(range(1, 1000) as $i){
    if ($i == 1) {echo "<div class='box display colored'>$zvaigzdute</div>";}
    elseif ($i == 100){echo "<div class='box display colored'>$zvaigzdute</div><br>";}
    elseif(($i-1)%111 == 0) {echo "<div class='box display colored'>$zvaigzdute</div>";}
    elseif(100 + 89*(floor($i/100)) == $i) {echo "<div class='box display colored'>$zvaigzdute</div>";}
    elseif ($i%100 !== 0){echo "<div class='box display'>$zvaigzdute</div>";}
    else {echo "<div class='box display'>$zvaigzdute</div><br>";}
};*/
echo '<br>'; 

$count = 0;
while ($count != 1){
    $metimas = rand(0, 1);
    if ($metimas == 0){
        echo 'S';
    } else {echo 'H';
        $count++;
    }
    
};
echo '<br>';
$count = 0;
while ($count != 3){
    $metimas = rand(0, 1);
    if ($metimas == 0){
        echo 'S';
    } else {echo 'H';
        $count++;
    }
    
};
echo '<br>';
$count = 0;
while ($count != 3){
    $metimas = rand(0, 1);
    if ($metimas == 0){
        echo 'S';
        $count = 0;
    } else {echo 'H';
        $count++;
    }
    
};
echo '<br>';
$pTotal = 0;
$kTotal = 0;
while ($kTotal < 222 || $pTotal < 222){
    $petras = rand(10, 20);
    $kazys = rand(5, 25);
 echo ($petras > $kazys) ? ("Partiją laimėjo: ​Petras , $petras <br>") : ("Partiją laimėjo: Kazys , $kazys <br>");
    $pTotal = $pTotal + $petras;
    $kTotal = $kTotal + $kazys;
};
echo ($pTotal > $kTotal) ? "Zaidima laimejo Petras su $pTotal tasku." : "Zaidima laimejo Kazys su $kTotal tasku.";
echo '<pre>';
/*
$viniesIlgis = 85;
$smugiai = 0;
$kiekReikiaSmugiu = 0;
do {
   $vienasSmugis = rand(5,20);
    echo "<br>rand smugis";
   echo $vienasSmugis;
   echo "<br>kiek";
   echo $kiekReikiaSmugiu++;
   echo "<br>suma";
   echo $smugiai += $vienasSmugis;
   echo "<br>";
}
while($smugiai <= $viniesIlgis * 5);
echo $kiekReikiaSmugiu; */  /*
$visoSmugiu = 0;
foreach(range(1, 5) as $_){
    $vinisIkalta = 0;
    do { $smugis = rand(5, 20);
        echo "$smugis<br>";
         $visoSmugiu++;
         $vinisIkalta += $smugis;
        echo "Vinies progresas: $vinisIkalta <br>";}
         while ($vinisIkalta <= 85)
;}
echo $visoSmugiu;  */

echo '<br>';

$visoSmugiu = 0;
foreach(range(1, 5) as $_){
    $vinisIkalta = 0;
    do {
    $smugis = rand(0, 1);
if ($smugis == 1){
    $taiklusSmugis = rand(20, 30);
    $vinisIkalta += $taiklusSmugis;
    echo "$vinisIkalta <br>";
    $visoSmugiu++;
} else {$visoSmugiu++;
    echo "nepataike <br>";};
}
while ($vinisIkalta < 85);
};
echo '<br>';
echo '<br>';
echo $visoSmugiu; 





?>

</body>
</html>