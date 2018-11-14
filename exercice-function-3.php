<?php


function test($tab)
{
    $timp=[];
    $tp=array();
    for($i=0;$i<count($tab);$i++)
    {

            if ($tab[$i] % 2 == 0)
                array_push($tp, $tab[$i]);
            else
                array_push($timp,$tab[$i]);



    }

    var_dump($tp);
    echo "<br>";
    var_dump($timp);

}
test([2,7,6]);

