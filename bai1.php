<?php
        //Enter your code here, enjoy!
$txt = 0;

for ($i=0; $i<100; $i++){
$txt++;
if($txt % 3 == 0 && $txt % 5 ==0)
echo " FizzBuzz ";
    else if($txt % 3 == 0)
    echo " Fizz ";
    else if($txt % 5 == 0)
    echo " Buzz ";
    else echo $txt." ";
}