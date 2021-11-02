<?php 
$txt = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry';
$find   = 'Ipsum';
$pos = strpos($txt, $find);

echo 'Từ cần tìm: '.$find."<br>".'chuỗi ban đầu: '.$txt."<br>";
if ($pos === false) {
    echo " chuỗi '$find' không chứa trong chuỗi'$txt'";
    
} else {
    echo "'$find' có chứa trong '$txt'";
}

