<?php
/*1111111*/
$str = "Gomy CODE";
$r=ucwords(strtolower($str));
echo $r.'<br>'.'<br>';
/*2222222*/
$str2="PHP 5";
for($i=0;$i<strlen($str2);$i++)
{
    echo $str2[$i].'<br>';
}
/*3333333*/

$str1="php symfony";  $str2="html css et javascript";
$poo=strnatcmp ( $str1 , $str2 );
if($poo<0)
    echo $str1." ". $str2;

else if ($poo>0)
echo $str2." ".$str1;
else echo $str1;