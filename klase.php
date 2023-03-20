<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>

    <?php
/*
$n1 = rand(0, 2);
$n2 = rand(0, 2);
$n3 = rand(0, 2);
$n4 = rand(0, 2);
$nuliuSuma = 0;
$vienetuSuma = 0;
$dvejetuSuma = 0;
echo "$n1 $n2 $n3 $n4";
echo '<br>';
if($n1===0){
    $nuliuSuma++;
} elseif($n1===1){
    $vienetuSuma++;
} else {$dvejetuSuma++;};
if($n2===0){
    $nuliuSuma++;
} elseif($n2===1){
    $vienetuSuma++;
} else {$dvejetuSuma++;};
if($n3===0){
    $nuliuSuma++;
} elseif($n3===1){
    $vienetuSuma++;
} else {$dvejetuSuma++;};
if($n4===0){
    $nuliuSuma++;
} elseif($n4===1){
    $vienetuSuma++;
} else {$dvejetuSuma++;};
echo "Nuliukai: $nuliuSuma <br> Vienetukai: $vienetuSuma
 <br> Dvejetukai: $dvejetuSuma";
 echo '<br>';

 $atsitiktinis = rand(1, 6);
 echo "<h$atsitiktinis>$atsitiktinis</h$atsitiktinis>";
echo '<br>';

$sk1 = rand(-10, 10);
$sk2 = rand(-10, 10);
$sk3 = rand(-10, 10);
if($sk1<0) {echo "<h1 style='color: green'>$sk1</h1>";}
elseif($sk1 > 0){echo "<h1 style='color: blue'>$sk1</h1>";}
else{echo "<h1 style='color: red'>$sk1</h1>";
}; '<br>';
if($sk2<0) {echo "<h1 style='color: green'>$sk2</h1>";}
elseif($sk2 > 0){echo "<h1 style='color: blue'>$sk2</h1>";}
else{echo "<h1 style='color: red'>$sk2</h1>";
};
if($sk3<0) {echo "<h1 style='color: green'>$sk3</h1>";}
elseif($sk3 > 0){echo "<h1 style='color: blue'>$sk3</h1>";}
else{echo "<h1 style='color: red'>$sk3</h1>";
};
$zvakiuKiekis = rand(5, 3000);
if ($zvakiuKiekis>2000){
    $actual = ($zvakiuKiekis * 0.96);
    echo "Perkama $zvakiuKiekis zvakiu uz $actual EUR";
} elseif ($zvakiuKiekis>1000){
    $actual = ($zvakiuKiekis * 0.97);
    echo "Perkama $zvakiuKiekis zvakiu uz $actual EUR";
} else {echo "Perkama $zvakiuKiekis zvakiu uz $zvakiuKiekis EUR";};
echo '<br>';
$sk1 = rand(0, 100);
$sk2 = rand(0, 100);
$sk3 = rand(0, 100);
$arVid1 = round(($sk1 + $sk2 + $sk3)/3);
$arVid2 = 0;
$dalIs = 0;
if($sk1>10 && $sk1<90){
    $arVid2 += $sk1;
    $dalIs++;
};
if($sk2>10 && $sk2<90){
    $arVid2 += $sk2;
    $dalIs++;
};
if($sk3>10 && $sk3<90){
    $arVid2 += $sk3;
    $dalIs++;
};
$arVid3 = round($arVid2 / $dalIs);
echo "$sk1,$sk2,$sk3. Vidurkis pirmas: $arVid1 , Vidurkis antras: $arVid3";
echo '<br>';

$pradinisLaikas = rand(0, 86399);
$papSek = rand(0, 300);
$val = floor($pradinisLaikas / 3600);
$min = floor(($pradinisLaikas - $val*3600)/60);
$sek = $pradinisLaikas - $val*3600 -$min*60;

$naujasLaikas = $pradinisLaikas + $papSek;
$val1 = floor($naujasLaikas / 3600);
$min1 = floor(($naujasLaikas - $val1*3600)/60);
$sek1 = $naujasLaikas - $val1*3600 -$min1*60;

echo "$val : $min : $sek"; echo '<br>';
echo "Pridetas laikas: $papSek"; echo '<br>';

if ($naujasLaikas >= 86400){
    echo "00 : $min1 : $sek1";
} else {echo "$val1 : $min1 : $sek1";};
echo '<br>'; */
// 1
$vardas = 'Vytautas';
$pavarde = 'Sapranauskas';
echo ((strlen($vardas)) > (strlen($pavarde))) ? "$vardas" : "$pavarde";
echo '<br>';
// 2 
echo strtoupper($vardas);
echo strtolower($pavarde);
echo '<br>';
// 3
$vardPav = $vardas.$pavarde;
echo $vardPav;
echo '<br>';
// 4
$vardPav1 = substr($vardas, -3).substr($pavarde, -3);
echo $vardPav1;
echo '<br>';
// 5
$turistas = 'An American in Paris';
$turPak = str_ireplace('a', '*', $turistas);
echo $turPak;
echo '<br>';
// 6
echo (substr_count($turistas, 'a') + substr_count($turistas, 'A'));
echo '<br>';
// 7
$str1 = "Breakfast at Tiffany's";
$str2 = '2001: A Space Odyssey';
$str3 = "It's a Wonderful Life";
$vowels = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
echo str_replace($vowels, '', $turistas);
echo '<br>';
echo str_replace($vowels, '', $str1);
echo '<br>';
echo str_replace($vowels, '', $str2);
echo '<br>';
echo str_replace($vowels, '', $str3);
echo '<br>';
//9 
$slogan = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$slogan1 = str_word_count($slogan, 1);
print_r($slogan1);
$count = 0;
foreach($slogan1 as $i){
    strlen($i) <= 5 ? $count++ : $count === $count;
};
$slogan = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$slogan1 = explode(' ', $slogan);
var_dump($slogan1);
$count = 0;
foreach($slogan1 as $i){
    mb_strlen($i) <= 5 ? $count++ : $count === $count;
};
echo $count;
echo '<br>';
//10
$raides = 'abcdefghiyjklmnopqrstuvwxz';
echo $raides[rand(0, 25)].$raides[rand(0, 25)].$raides[rand(0, 25)];
echo '<br>';
//11
$str1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$str2 = " Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$str3 = $str1.$str2;
var_dump($str3);
$str4 = explode(' ', $str3);
print_r($str4);
$randZodis = $str4[rand(0, count($str4)-1)];
echo $randZodis;
echo '<br>';
$trysZodziai = [];

echo '<br>';
$movie = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $movie;











?>

</body>
</html>