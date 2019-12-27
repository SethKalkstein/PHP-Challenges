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

// function DNA_strand($dna) {
/*     return strtr($dna, "ATCG", "TAGC");
  }

  echo DNA_strand("TAACG"); */

?>

<?php 

// Given an array of ones and zeroes, convert the equivalent binary value to an integer.

/* function binaryArrayToNumber($arr) {
  $sum = 0;
  $elements = count($arr)-1;


  for($i = 0; $i <= $elements; $i++ ){
    $sum += $arr[$i] * 2**($elements-$i);
  }

  return $sum;
}

echo binaryArrayToNumber([1,1,1,1,0,1]); */

?>

<?php 

// A bookseller has lots of books classified in 26 categories labeled A, B, ... Z. Each book has a code c of 3, 4, 5 or more capitals letters. The 1st letter of a code is the capital letter of the book category. In the bookseller's stocklist each code c is followed by a space and by a positive integer n (int n >= 0) which indicates the quantity of books of this code in stock.

// You will be given a stocklist (e.g. : L) and a list of categories in capital letters. and your task is to find all the books of L with codes belonging to each category of M and to sum their quantity according to each category. 

/* function stockList($listOfArt, $listOfCat){
  $result = "";
  
  if(empty($listOfArt) || empty($listOfCat)){
    return $result;
  }

  foreach($listOfCat as $iteration => $category) {
    $sum = 0;

    foreach($listOfArt as $article){
    
      if($category === $article[0]){
        $sum += explode(" ", $article)[1];
      }
    }
    
    $result .= "($category : $sum)".($iteration === count($listOfCat) - 1 ? "" : " - ");
  }
  
  return $result;
}

$art = ["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"];
$cat = ["A", "B"];

stockList($art, $cat); */

?>

<?php 

// In John's car the GPS records every s seconds the distance travelled from an origin (distances are measured in an arbitrary but consistent unit, x). For example, below is part of a record with s = 15:


function gps($s, $x) {

  $xLength = count($x);
  $highestInterval = 0;

  if($xLength <= 1){ 
    return $highestInterval;
  }

  for($i = 1; $i < $xLength; $i++){
    $tempInterval = floor((3600 * ($x[$i]-$x[$i-1])) / $s);
    $highestInterval = $tempInterval > $highestInterval ? $tempInterval : $highestInterval;
  }

  return $highestInterval;
}

$x = [0.0, 0.19, 0.5, 0.75, 1.0, 1.25, 1.5, 1.75, 2.0, 2.25];
$s = 15;

echo gps($s, $x);

?>