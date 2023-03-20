<?php
/*
$isorinis = 'black';
$bebras = function() use ($isorinis) : void {
    echo "anonimas $isorinis";
};
$bebras();
echo '<pre>';

$mas = array_map(fn($_) => rand(5,25),range(1,30));
print_r($mas);
echo '<br>';

/* foreach(range(0,29) as $_){
    $masyvas[$_] = rand(5,25);
};
print_r($masyvas);
echo'<br>'; */
/*
$rez = [];
$rez['a'] = 0;

foreach ($mas as $val){
    if ($val > 10){$rez['a']++;}
};

print_r($rez);
echo '<br>';

$rez['b value'] = $mas[0];
$rez['b index'] = [0];
foreach ($mas as $index => $val){
    if ($val > $rez['b value'])
   {$rez['b value'] = $val;
    $rez['b index'] = [];
    $rez['b index'][] = $index;}
    elseif($val == $rez['b value']) {
    $rez['b index'][] = $index;
} 
}
print_r($rez);
echo '<br>';
$rez['c'] = 0;
foreach ($mas as $index => $val){
    if ($index % 2 == 0 && $index > 1 ){$rez['c'] += $val;}  
}
print_r($rez);
echo '<br>';
foreach(range(0,29) as $_){
    $masyvas[$_] = rand(5,25);
};
print_r($masyvas);
echo'<br>';
$rez['d'] = [];
foreach ($masyvas as $index => $val){
    $rez[] = $val - $index;
}
print_r($rez);
echo '<br>';


foreach(range(1, 10) as $_){
    $masyvas[] = rand(5, 25);
}
print_r($masyvas);  */
// $mas1 = array_map(fn($_) => rand(5, 25),range(1, 30));
// $pirmas = [];
// $antras = [];
// foreach($mas1 as $index => $_) {
//     if ($index % 2 == 0){
//         $pirmas[] = $_;
//     } else { $antras[] = $_;}
// }
// print_r($pirmas);
// echo '<br>';
// print_r($antras);
// echo '<br>';
// foreach($mas1 as &$val) {
//     $val = $val > 15 ? 0 : $val;
// }
// print_r($mas1);
// echo '<br>';
/*foreach($mas1 as $index => $_){
    if ($_ > 10){
        $mas1['h'] = $index;
        break;
    }
}
print_r($mas1);*/
/*
echo '<br>';
foreach($mas1 as $index => &$val){
    if ($index % 2 == 0){
        unset($mas1[$index]);
    }
}
$mas1 = array_values($mas1);
print_r($mas1);
 */
// echo '<pre>';
/*
 $mas = [];
 foreach(range(1, 10) as $_){
    $small = [];
    foreach(range(1, 5) as $_){
        $small[] = rand(5, 25);
    }
    $mas[] = $small;
 }
 print_r($mas);
 echo '<pre>';
 $masyvas = [];
 foreach(range(1, 200) as $index => $_){
   $raide = ['A', 'B', 'C', 'D'];
   $masyvas[] = $raide[rand(0, 3)];
 };
 print_r($masyvas);
 $masyvas['A'] = 0;
 $masyvas['B'] = 0;
 $masyvas['C'] = 0;
 $masyvas['D'] = 0;
 foreach ($masyvas as $i => $_){
    if ($_ == 'A') {$masyvas['A']++;}
    elseif ($_ == 'B') {$masyvas['B']++;}
    elseif ($_ == 'C') {$masyvas['C']++;}
    elseif ($_ == 'D') {$masyvas['D']++;}
 };
 print_r($masyvas);  */
/*
echo '<pre>';
$masyvas = [];
 foreach(range(1, 200) as $index => $_){
   $raide = ['A', 'B', 'C', 'D'];
   $masyvas[] = $raide[rand(0, 3)];
 };
 $masyvas1 = [];
 foreach(range(1, 200) as $index => $_){
   $raide = ['A', 'B', 'C', 'D'];
   $masyvas1[] = $raide[rand(0, 3)];
 };
 $masyvas2 = [];
 foreach(range(1, 200) as $index => $_){
   $raide = ['A', 'B', 'C', 'D'];
   $masyvas2[] = $raide[rand(0, 3)];
 };
 $combined = [];
 foreach(range(0, 199) as $i => $_){
 $combined[] = $masyvas[$i].$masyvas1[$i].$masyvas2[$i];
 };
 print_r(array_unique($combined));
 print_r(array_values(array_flip(array_flip($combined))));
 $combinedSorted = (array_values(array_flip(array_flip($combined))));
 echo('------------------');
 print_r($combinedSorted);
$f=[];
foreach($combinedSorted as $i => $abc){
    $abcd = str_split($abc, 1);
    $f[]= 0;
    foreach($abcd as $val){
        // print_r($f[$i]);
        if($val === 'A') {$f[$i] += 1000;}
            elseif($val === 'B') {$f[$i] += 100;}
            elseif($val === 'C') {$f[$i] += 10;}
            else{$f[$i] += 1;}
    }
}
print_r($f);
print_r(array_values(array_flip(array_flip($f))));
 */
echo '<pre>';

// $tra1 = [];
// while (count($tra1) < 100){
//     $tra1[] = rand(100, 999);
//     $tra1 = array_unique($tra1);
// };
// print_r($tra1);
// echo '<pre>';

// $tra2 = [];
// while (count($tra2) < 100){
//     $tra2[] = rand(100, 999);
//     $tra2 = array_unique($tra2);
// };
// print_r($tra2);
// echo '<pre>';

// $tra3 = [];
// foreach($tra1 as $i => $val) {
//   $tra2[] = $val;
//   $tra2 = array_unique($tra2);
//   if (count($tra2) === 101){
//     array_pop($tra2);
//     $tra3[] = $val;
// }
// }
// print_r($tra3);

// echo '<pre>';

// $tra4 = [];
// foreach($tra1 as $i => $val) {
//   $tra2[] = $val;
//   $tra2 = array_unique($tra2);
//   if (count($tra2) === 100){
    
//     $tra4[] = $val;
// } else {array_pop($tra2);}
// }
// print_r($tra4);
// echo '<pre>';
// echo '<pre>';

// $tra5 = [];
// foreach(range(0, 99) as $_){
//     $tra5[$tra1[$_]] = $tra2[$_];
// }
// print_r($tra5);

echo '<pre>';
$mas = [];
foreach(range(0, 9) as $_){
    if ($_ < 2){
        $mas[$_] = $_;
    } else {$mas[$_] = $mas[$_ - 1] + $mas[$_ -2];}
}
print_r($mas);
