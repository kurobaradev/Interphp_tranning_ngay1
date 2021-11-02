<?php
$array = array('a', 'b', 'c');

echo 'Mảng ban đầu: '."<br>";
print_r($array);


echo "<br>".'Sau khi chuyển thành chuỗi: '."<br>";

$convert = implode($array);
echo $convert;