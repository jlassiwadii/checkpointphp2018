<?php
$number=rand(0,108);
$myNumber=108;
$con ="Congratulations !";
$pos="+";
$neg="-";
 $message=($number===$myNumber)? $con:(($number<$myNumber)?$pos:$neg);
 echo $message;