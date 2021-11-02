<?php
// data
$min_keys = array();
$max_keys = array();
$arr = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");

echo 'Mảng ban đầu: '."<br>";
print_r($arr);

// sắp xếp mảng
echo "<br>".'sắp xếp mảng theo giá trị tăng dần '."<br>";
asort($arr);
print_r($arr);

// Tuổi bé nhất hiển thị theo tên
foreach($arr as $age => $score)
    if($score == min($arr)) array_push($min_keys, $age);

// Tuổi lớn nhất hiển thị theo tên

foreach($arr as $age => $score)
    if($score == max($arr)) array_push($max_keys, $age);
echo "<br>".'Hiển thị tuổi nhỏ nhất theo tên : ';
print($min_keys[0]);

echo "<br>".'Hiển thị tuổi lớn nhất theo tên : ';
print($max_keys[0]);
?>
