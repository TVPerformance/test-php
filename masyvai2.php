<?php

// $mas = [];
// foreach(range(0, 9) as $_){
//     $mas[$_] = [];
//     foreach(range(0, 4) as $val){
//         $mas[$_][$val] = rand(5, 25);
//     };
// }
// echo '<pre>';
// print_r($mas);

// echo '<pre>';
// $mas['a'] = 0;
// foreach(range(0, 9) as $_){
//     foreach(range(0, 4) as $v){
//         if ($mas[$_][$v] > 10){$mas['a']++;}
//     }
// }
// print_r($mas);
// echo '<pre>';

// $mas['b'] = 0;
// foreach(range(0, 9) as $_){
//     foreach(range(0, 4) as $v){
//         if ($mas[$_][$v] > $mas['b']){$mas['b'] = $mas[$_][$v];}
//     }
// }
// print_r($mas);
// echo '<pre>';

// $mas['c'] = [0,0,0,0,0];
// foreach(range(0, 9) as $_){
//     foreach(range(0, 4) as $v){
//         $mas['c'][$v] = $mas['c'][$v] + $mas[$_][$v];}
// }
// print_r($mas);
// echo '<pre>';

// foreach(range(0, 9) as $_){
//     foreach(range(0, 1) as $v){
//         $mas[$_][] = rand(5, 25);
//     }
// }
// print_r($mas);
// echo '<pre>';

// $mas['e'] = [];
// foreach(range(0, 9) as $_){
//     $mas['e'][] = 0;
//     foreach(range(0, 6) as $v){
//         $mas['e'][$_] += $mas[$_][$v];
//     }
// }
// print_r($mas);
// echo '<pre>';
// // Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).
// echo '<pre>';
// $raides = ['A','B','C','D','E','F','G','H','I','Y','J','K','L','M','N','O','P','R','Q','S','T','U','V','W','X','Z'];

// $masyvas = [];
// foreach(range(0, 9) as $_){
//     $masyvas[$_] = [];
//     $rand = rand(2, 20);
//     foreach(range(1, $rand) as $v){
//           $masyvas[$_][] .= $raides[rand(0, 25)];
//     };
//      asort($masyvas[$_]);
//     // array_pop($masyvas[$_]);
//     $masyvas[$_] = array_values($masyvas[$_]);
// }
// asort($masyvas);
// print_r($masyvas);
// echo '<pre>';
// //Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.
// echo '<pre>';
// //echo count($masyvas);
// $masyvasSuK = [];
// $masyvasBeK = [];
// foreach($masyvas as $i => $mas){
//     foreach ($mas as $z => $val){
//         // echo '----------<br>';
//         // print_r($mas);
//         // echo $z;
//         // echo '----------<br>';
//         if ($val === 'K'){$masyvasSuK[] = $mas;break;}
//         elseif ($z + 1 === count($mas)){$masyvasBeK[] = $mas;}
//     }
// }
// print_r($masyvasSuK);
// print_r($masyvasBeK);
// $masyvasGrand = array_merge($masyvasSuK, $masyvasBeK);
// print_r($masyvasGrand);

//Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 
echo '<pre>';

$idPagalbinis = [];
$masyvas5 = [];

while(count($idPagalbinis) < 30){
    $idPagalbinis[] = rand(1, 1000000);
    $idPagalbinis = array_unique($idPagalbinis);
}
foreach($idPagalbinis as $i => $val){
      $masMazas = [];
      $masMazas['user_id'] = $idPagalbinis[$i];
      $masMazas['place_in_row'] = rand(0, 100);
      $masyvas5[] = $masMazas;
}
print_r($masyvas5);

//Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
sort($masyvas5);
print_r($masyvas5);
// $masyvas6 = [];
// foreach($masyvas5 as $val){
//     $masyvas6[] = array_reverse($val);
// }
// rsort($masyvas6);
// print_r($masyvas6);

//Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
// echo '<pre>';

// foreach($masyvas5 as &$val){
//     $val['name'] = '';
//     $val['surname'] = '';
//     foreach(range(1, rand(5, 15)) as $let){
//     $val['name'] .= chr(rand(65, 90));
// }
// foreach(range(1, rand(5, 15)) as $let){
//     $val['surname'] .= chr(rand(65, 90));
// }
// }
// print_r($masyvas5);
//Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

echo '<pre>';
$arr = [];
foreach(range(0, 9) as $i => $_){
    $rand = rand(0, 5);
    $arr[] = [0];
    if ($rand === 0){$arr[$i] = rand(0, 10);}
    else {foreach(range(1, $rand) as $val){
        $arr[$i][] .= rand(0, 10);
    }
    }
}
print_r($arr);