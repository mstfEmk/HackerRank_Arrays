<?php
// Complete the rotLeft function below.
/* slowVersion
function rotLeft($a, $d) {
  for ($i = 0; $i < $d; $i++) {
    $tmp = array_shift($a);
    array_push($a, $tmp);
  }
  return $a;
}
*/

function rotLeft($a, $d) {
  $newArr = array();
  for ($i = $d; $i < count($a); $i++) {
    array_push($newArr, $a[$i]);
  }
  
  for ($i = 0; $i < $d; $i++) {
    array_push($newArr, $a[$i]);
  }
  return $newArr;
}

$shiftCount = 4;
$arr = array(1, 2, 3, 4, 5);
var_dump($arr);
$arr = rotLeft($arr, $shiftCount);
var_dump($arr);