<?php

$arr=[0, 1, 2, 4, 5, 7];
$finalArr=[];

function summaryRanges($arr){
  global $finalArr;
  $tempArr=[];
  for($i=0; $i<count($arr)-1; $i++){
    if($arr[$i + 1] - $arr[$i] === 1){
      $tempArr[]=$arr[$i];
    } elseif ($arr[$i + 1] - $arr[$i] != 1){
      $tempArr[]=$arr[$i];
      $x=$tempArr[0];
      $y=$tempArr[count($tempArr)-1];
      $finalArr[]="$x->$y";
      $tempArr=[];
    }
  }
};

summaryRanges($arr);
print_r($finalArr);

?>