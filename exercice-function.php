<?php
echo '1)-'.'<br>';
function compare($premier,$second)
{

   if($premier<$second)
       echo $premier.' est inférieur à '.$second .'<br>';
   else if($premier>$second)
        echo $premier.' est supérieur à '.$second.'<br>';

    else
        echo $premier .' et '. $second .' sont égaux '.'<br>';

}

 compare(5,2);
compare(10,10);
compare(8,10);

echo '2)-'.'<br>';

function mesureangle($angle)
{
    $radian = $angle * pi() / 180;
   echo sin($radian).' in radian';
}
mesureangle(45);

