<?php
// data
$arr = array('0','1','2','3','4');

echo 'Mảng ban đầu: '."<br>";
foreach ($arr as $x)   
{
echo " $x";
}

// Đếm độ dài của mảng
echo "<br>".'Độ dài mảng: '."<br>".count($arr)  ;

// Xóa phần tử thứ 3 của mảng
unset($arr[3]);
echo "<br>".'Xóa phần tử thứ 3 của mảng :  '."<br>";
foreach($arr as $playerid => $score)
 print(" ".$score);
 // Xóa phần tử đầu tiên của mảng
 echo "<br>".'Xóa phần tử đầu tiên của mảng :  '."<br>";
 array_shift($arr);
foreach($arr as $playerid => $score)
 print(" ".$score);
 // Thêm số 3 vào cuối mảng
 echo "<br>".'Thêm số 3 vào cuối mảng :  '."<br>";
 array_push ($arr,'3');
foreach($arr as $playerid => $score)
 print( " ".$score);
?>
