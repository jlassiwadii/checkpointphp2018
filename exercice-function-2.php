<?php
function produit()
{
    $numargs = func_num_args();

    $arg_list = func_get_args();
    $pro=1;
    for ($i = 0; $i < $numargs; $i++)
    {if($arg_list[$i]!=0)
     $pro*= $arg_list[$i] ;

    }
    echo $pro;
}
produit(1,0, 7, 3);
