 <?php
echo 'Hello World!';
echo '<pre>';

// If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

// Finish the solution so that it returns the sum of all the multiples of 3 or 5 below the number passed in. Additionally, if the number is negative, return 0 (for languages that do have them).

// Note: If the number is a multiple of both 3 and 5, only count it once.

// Courtesy of projecteuler.net (Problem 1)
// $number = 9;
// function solution($number){
// $arr1 = [];
// $arr2 = [];
// if($number < 3){
//     return 0;
// } else{
//     for($i=3; $i<=$number; $i=$i+3){
//         if($i % 3 == 0){
//           $arr1[] = $i; 
//         }
//     }
// }
// if($number >= 5){
//     for($j=5; $j<=$number; $j=$j+5){
//         if($j % 5 == 0 && $j % 15 != 0){
//           $arr2[] = $j;
//         }
//     }
// }
// // print_r($arr1);
// // echo '<pre>';
// // print_r($arr2);
// // die;
// return array_sum($arr1) + array_sum($arr2);
// }
// print_r(solution(5));

// function solution($number){
//     $answ = 0;
//     if(($number -1) > 2){
//         foreach(range(3, ($number -1)) as $val){
//           if($val % 3 == 0){
//             $answ += $val; 
//           }
//           if($val % 5 == 0){
//             $answ += $val; 
//           }
//           if($val % 15 == 0){
//             $answ -= $val; 
//           }
          
//         }
//     }
//     return $answ;
// }
// print_r(solution(13));
// echo '<pre>';
// // $this->assertSame("India Foxtrot Yankee Oscar Uniform Charlie Alfa November Romeo Echo Alfa Delta", to_nato('If you can read'));
// $words = 'If you can read';
// $dictionary = ['a'=>'Alfa',
// 	'b'=>'Bravo',
// 	'c'=>'Charlie',
// 	'd'=>'Delta',
// 	'e'=>'Echo',
// 	'f'=>'Foxtrot',
// 	'g'=>'Golf',
// 	'h'=>'Hotel',
// 	'i'=>'India',
// 	'j'=>'Juliet',
// 	'k'=>'Kilo',
// 	'l'=>'Lima',
// 	'm'=>'Mike',
// 	'n'=>'November',
// 	'o'=>'Oscar',
// 	'p'=>'Papa',
// 	'q'=>'Quebec',
// 	'r'=>'Romeo',
// 	's'=>'Sierra',
// 	't'=>'Tango',
// 	'u'=>'Uniform',
// 	'v'=>'Victor',
// 	'w'=>'Whiskey',
// 	'x'=>'X-Ray',
// 	'y'=>'Yankee',
// 	'z'=>'Zulu'];
// function to_nato($words, $dictionary){
//   $output = '';
//   $input = str_split(str_replace(' ', '',(strtolower($words))));
// //   print_r($input);
// //   die;
//   foreach($input as $val){
//    foreach($dictionary as $key => $word){
//     if($val == $key){
//         $output .= $word . ' ';
//     }
//    }
//   }
//   return rtrim($output);
// }

// print_r(to_nato($words, $dictionary));
echo '<pre>';


$arr = ['XOOXO',
'XOOXO',
'OOOXO',
'XXOXO',
'OXOOO'] ;
function land_perimeter($arr) {
 return count($arr);
}
print_r(land_perimeter($arr));
echo '<pre>';
print_r(strlen($arr[0]));














