<?php
// Complete the hourglassSum function below.
function hourglassSum($arr) {
	$sum = -1000;
	$max = $sum;
	for ($i = 1; $i < count($arr) - 1; $i++) {
		for ($j = 1; $j < count($arr) - 1; $j++) {
			$upperLine = $arr[$i-1][$j-1] + $arr[$i-1][$j] + $arr[$i-1][$j+1];
			$currentLine = $arr[$i][$j];
			$bottomLine = $arr[$i+1][$j-1] + $arr[$i+1][$j] + $arr[$i+1][$j+1];
			$sum = $upperLine + $currentLine + $bottomLine;
			if ($sum > $max) {
        $max = $sum;
			}
		}
	}
	return $max;
}
/*
$arr = array(
array(1, 1, 1, 0, 0, 0),
array(0, 1, 0, 0, 0, 0),
array(1, 1, 1, 0, 0, 0),
array(0, 0, 2, 4, 4, 0),
array(0, 0, 0, 2, 0, 0),
array(0, 0, 1, 2, 4, 0)
);
*/
$arr = array(
array(-1, -1, 0, -9, -2, -2),
array(-2, -1, -6, -8, -2, -5),
array(-1, -1, -1, -2, -3, -4),
array(-1, -9, -2, -4, -4, -5),
array(-7, -3, -3, -2, -9, -9),
array(-1, -3, -1, -2, -4, -5)
);
$result = hourglassSum($arr);
var_dump($result)