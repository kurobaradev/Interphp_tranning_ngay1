<?php
        //Enter your code here, enjoy!
 $greeting = 'hoc php can ban';

 echo 'Chuỗi ban đầu: '."<br>".$greeting."<br>";

 echo "<br>".'Thay thế chữ căn bản thành nâng cao: '."<br>";
 
 $new_greeting = str_replace('can ban', 'nang cao', $greeting);
 echo $new_greeting;
