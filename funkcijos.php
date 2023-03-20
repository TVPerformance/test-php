<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcijos</title>
</head>
<body>
  
<?php
echo('------');
echo '<pre>';

$a = 5;
$b = 6;
function sum(int $a, int $b) : int 
{
    $a = $a + $a;
    $ab = $a + $b;
    return $ab;
}


echo sum($a, $b);
echo '<br>';
echo $a;
echo '<br><br>';

// function foo($reset = 0){
//     static $index = 0;
//     if ($reset){
//         $index = 0;
//     } else {
//         $index++;
//     echo "$index\n";
//     }
// };
// foo();
// foo();
// foo();
// foo();
// foo();
// foo();

function iam($int){
    echo $int, '<br>';
    if ($int < 3){
        iam($int + 1);
    }
    echo $int, '<br>';
    return;
}
$start = 1;
iam($start);
echo '<pre>';

function labas($x){
    echo "<h1>$x</h1>";
}
$pasisveikinimas = 'Labas tomai';
labas($pasisveikinimas);

echo '<pre>';

function labas2($a, $b){
    echo "<h$b>$a</h$b>";
}
$pasisveikinimas = 'Labas tomai';
$tagoDydis = rand(1, 6);
labas2($pasisveikinimas, $tagoDydis);

$anon = function(){
    echo '<h1>anonimas</h1>';
};
$anon();
echo '<br>';

function kita(closure $arg) : void
{
    echo '<h1>kitas</h1>';
    $arg();
};
kita($anon);
kita(function(){
    echo '<h1>anonimas2</h1>';
});

// $mas = [
//     ['b', 'a'],
//     ['b', 'p'],
//     ['s', 'c'],
//     ['d', 't']
// ];
// function sortiravimas($a, $b){
//     return $a[1] <=> $b[1];
// };
// usort($mas, 'sortiravimas');
// print_r($mas);

$isorinis = 'red';
$hahaha = function() use ($isorinis) : void {
    echo "<h2>anonimas $isorinis</h2>";
};
$hahaha();

echo '<pre>';
do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
$sk1 = 0;
$sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}
echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
$sum = 0;
foreach($c as $val){
    $sum += $val;
}
echo $sum;
echo '<pre>';
$sum1 = 0;
foreach(range(1, 1000000) as $_){
    $sum1 += $c[rand(0, count($c) - 1)];
}
$ats = ($sum1 / 1000000);
echo $ats;




















?>

</body>
</html>