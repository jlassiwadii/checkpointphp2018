<?php
  $a="0";
var_dump($a);//"0"
 $b="TRUE";
var_dump($b);//true
  $c=FALSE;
var_dump($c);//false
  $d=($a OR $b);
var_dump($d);//true
  $e=($a AND $c);
var_dump($e);//false
$f=($a XOR $b);
var_dump($f);//true