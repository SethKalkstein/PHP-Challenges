<?php  

// function expanded_form(int $n): string {

//     $result = "";
//     foreach($arr = str_split(strval($n)) as $i => $calc){
//         // echo $calc."<br>";
//         if ($i == 0){
//             $result = $result.$calc*pow(10,count($arr)-$i);
//         }
//         elseif($calc != 0){

//             $result = $result." + ".$calc*pow(10,count($arr)-$i);
//         }
//     }

//     return $result;
// }

// echo expanded_form(32065);

?>



<?php  

// function expanded_form(int $n): string {
//     $result = "";
//     foreach($arr = str_split(strval($n)) as $i => $calc){
//         $result .= $calc ? ($i ? " + " : "").$calc*pow(10,count($arr)-$i) : "";
//     }

//     return $result;
// }

// echo expanded_form(32065);

?>



<?php  

/*function expanded_form(int $n): string {
    // $result = "";
    // foreach($arr = str_split($n) as $i => $calc){
    //     $result .= $calc ? ($i ? " + " : "").$calc*pow(10,count($arr)-$i) : "";
    // }

    return implode(" + ",array_diff(array_map(function($calc, $it){ return $calc ? $calc.str_repeat("0", $it) : 0; }, $arr = str_split($n), array_reverse(array_keys($arr))),[0]));
    // return $result

}

echo expanded_form(32065);
*/
?>

<?php 
// function maxMultiple($divisor, $bound) {
//   return ($bound - ($bound % $divisor));
// }

// echo maxMultiple(2, 7);
// echo "bark";
?>

<?php 
// function primeFact($num){
// 	$retString = "";
// 	$factArray = [];
// 	$div = 2;
// 	$numSqt = sqrt($num);
// 	while ($div <= $numSqt) {
// 		if($num % $div == 0){
// 			array_key_exists($div, $factArray) ? $factArray[$div] ++ : $factArray[$div] = 1;
// 			$num /=  $div;
// 			$numSqt = sqrt($num);
// 			$div = 2;
// 		} else {
// 			$div == 2 ? $div ++ : $div += 2;
// 		}

// 	}
// 	array_key_exists($num, $factArray) ? $factArray[$num] ++ : $factArray[$num] = 1;
// 	// echo var_dump($factArray);
// 	foreach ($factArray as $key => $value) {
// 		$retString .= $value == 1 ? "(".$key.")" : "(".$key."**".$value.")";
// 	}
// 	return $retString;
// }

// primeFact(9515167447000);

?>

<?php 
// function primeFactors($n) {
//     if ($n < 2) return "(".strval($n).")";
//     $factors = "";
//     for ($i = 2; $i <= $n; $i++) {
//         $cnt = 0;
//         while ($n % $i == 0) {
//             $cnt++;
//             $n /= $i;
//         }
//         if ($cnt) {
//             $factors .= "(".strval($i);
//             if ($cnt > 1) {
//                 $factors .= "**".strval($cnt);
//             }
//             $factors .= ")";
//         }
//     }
//     return $factors;
// }
// echo primeFact(9515167447000111000);
// echo "<br>".primeFact(0);
 ?>

<?php 

// In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". 

function DNA_strand($dna) {
    return strtr($dna, "ATCG", "TAGC");
  }

  echo DNA_strand("TAACG");

?>