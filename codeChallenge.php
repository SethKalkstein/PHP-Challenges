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
/* 
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
 */
?>

<?php 
/* 
// Complete the solution so that it returns true if the first argument(string) passed in ends with the 2nd argument (also a string).

function solution($full, $ending){
  return strrpos( $full , $ending) === strlen($full) - strlen($ending) ? true : false;
}

echo solution('aasasasbc', 'bc'); // returns true
echo solution('sumo', 'omo'); // returns false
 */
?>

<?php 
/* 
// When you divide the successive powers of 10 by 13 you get repeating remainders.
// multiply each digit by the remainder of its corresponding place value divided by thirteen then do again for the next number
// The cycle goes on and you sum all these products. Repeat this process until the sequence of sums is stationary.

// Example: What is the remainder when 1234567 is divided by 13?

// 7×1 + 6×10 + 5×9 + 4×12 + 3×3 + 2×4 + 1×1 = 178

// We repeat the process with 178:

// 8x1 + 7x10 + 1x9 = 87

// and again with 87:

// 7x1 + 8x10 = 87

// 87 is the answer

function thirt($newNumber){
  $aNumber = $newNumber;
  $resultNumber = 0;
  $i = 0;
  do {
    $resultNumber += ($aNumber%10) * ((10**$i)%13);
    $aNumber = floor($aNumber/10);
    $i ++;
  } while ($aNumber > 0);
  return $newNumber == $resultNumber ? $resultNumber : thirt($resultNumber);
}

echo thirt(321);


// for($i = 0; $i < 18; $i++){
//   $temp = 10**$i;
//   echo "i is: ".$i." and 10^i is: ".$temp." and that number %13 is: ".($temp%13)."<br>"; 
// }


 */
?>

<?php 
/* 
// You will be given an array and a limit value. You must check that all values in the array are below or equal to the limit value. If they are, return true. Else, return false.

// You can assume all values in the array are numbers.


function smallEnough($a, $limit){return max($a) <= $limit;}

echo smallEnough([1,199],200);

//if it were the sum of the array...
// function smallEnough($a, $limit){return array_reduce($a, function($carry, $item){return $carry+$item;}) <= $limit;}
 */
?>

<?php 
/* 
// Description:

// You are the "computer expert" of a local Athletic Association (C.A.A.). Many teams of runners come to compete. Each time you get a string of all race results of every team who has run. For example here is a string showing the individual results of a team of 5 runners:

// "01|15|59, 1|47|6, 01|17|20, 1|32|34, 2|3|17"

// Each part of the string is of the form: h|m|s where h, m, s (h for hour, m for minutes, s for seconds) are positive or null integer (represented as strings) with one or two digits. There are no traps in this format.

// To compare the results of the teams you are asked for giving three statistics; range, average and median.

// Range : difference between the lowest and highest values. In {4, 6, 9, 3, 7} the lowest value is 3, and the highest is 9, so the range is 9 − 3 = 6.

// Mean or Average : To calculate mean, add together all of the numbers in a set and then divide the sum by the total count of numbers.

// Median : In statistics, the median is the number separating the higher half of a data sample from the lower half. The median of a finite list of numbers can be found by arranging all the observations from lowest value to highest value and picking the middle one (e.g., the median of {3, 3, 5, 9, 11} is 5) when there is an odd number of observations. If there is an even number of observations, then there is no single middle value; the median is then defined to be the mean of the two middle values (the median of {3, 5, 6, 9} is (5 + 6) / 2 = 5.5).

// Your task is to return a string giving these 3 values. For the example given above, the string result will be

// "Range: 00|47|18 Average: 01|35|15 Median: 01|32|34"

// of the form:

// "Range: hh|mm|ss Average: hh|mm|ss Median: hh|mm|ss"

// where hh, mm, ss are integers (represented by strings) with each 2 digits.

// Remarks:

//     if a result in seconds is ab.xy... it will be given truncated as ab.

//     if the given string is "" you will return ""

// input format: "01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17"
// output format "Range: 01|01|18 Average: 01|38|05 Median: 01|32|34"

function statAssoc($strg) {
  if($strg == ""){
    return "";
  }

  $secondsArray = array_map(function($timeString){
    $totalSeconds = 0;
    foreach(explode("|", $timeString) as $key => $value){
      $totalSeconds += intval($value) * ($key == 0 ? 3600 : ($key == 1 ? 60 : 1));
    }
    return $totalSeconds;
  }, explode(" ", $strg));

  return rangeAssoc($secondsArray) . " " . meanAssoc($secondsArray) . " " . medianAssoc($secondsArray);

}

function medianAssoc($numArray) {
  $length = count($numArray);
  $result = 0;
  sort($numArray);
  if($length % 2 == 1){
    $result = $numArray[floor($length/2)];
  } else {
    $result = floor(($numArray[$length/2] + $numArray[$length/2 - 1])/2);
  }
  return format($result, "Median");
}

function rangeAssoc($numArray){
  sort($numArray);
  return format(($numArray[count($numArray)-1] - $numArray[0]), "Range");
}

function meanAssoc($numArray) {
  return format(floor(array_sum($numArray)/count($numArray)), "Average");
}

function format($theTime, $type ) {
  $outputString = "";
  for($i = 3600; $i >= 1; $i /= 60){  
    $outputString .= sprintf("%02d" ,floor($theTime/$i));
    $outputString .= $i == 1 ? "" : "|";
    $theTime %= $i;
  }
  return $type . ": " . $outputString;
}

echo statAssoc("01|15|59, 1|47|16, 01|17|20, 1|32|34, 2|17|17");
 */
?>

<?php 

// You are going to be given a word. Your job is to return the middle character of the word. If the word's length is odd, return the middle character. If the word's length is even, return the middle 2 characters.

function getMiddle($text) {
  $length = strlen($text);
  return ($length % 2 == 0 ? $text[floor($length/2)-1] : "").$text[floor($length/2)];  
}

echo getMiddle("testing");
?>