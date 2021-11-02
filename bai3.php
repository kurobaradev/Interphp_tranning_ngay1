<?php 
$s1 = 'c';
$s2   = 'abcde';
$pos = strpos($s2, $s1);
echo 'Sâu s1: '.$s1."<br>".'Sâu s2: '.$s2."<br>";
if ($pos === false) {
    echo " sâu s1 '$s1' không chứa trong s2'$s2'";
    
} else {
    echo "sâu s1 '$s1' có chứa trong s2 '$s2'";
}
