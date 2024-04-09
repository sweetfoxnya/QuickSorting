<?php
function quickSort(&$arr, $low, $high): array {
    $i = $low;
    $j = $high;
    $middle = $arr[round(( $low + $high ) / 2 )];
    do {
        while($arr[$i] < $middle) ++$i;
        while($arr[$j] > $middle) --$j;
            if($i <= $j){
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
                $i++; $j--;
            }
        }
    while($i < $j);

    if($low < $j){
        quickSort($arr, $low, $j);
    }

    if($i < $high){
        quickSort($arr, $i, $high);
    }

    return $arr;
}

$a = array();
for ($i = 0; $i < 1000000; $i++) {
    $a[$i] = mt_rand(0, 1000);
}
$count = count($a);
$sortArr = quickSort($a,0, $count);

var_dump($sortArr);


?>
