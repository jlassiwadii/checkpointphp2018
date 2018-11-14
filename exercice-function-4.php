<?php
function extractTabByType ($tab,$type)
{$t=array();
foreach($tab as $el)
  {
    if ($type=="bool" && is_bool($el) === true)
    {array_push($t,$el);

    }

    else if ($type=="int" && is_int($el) === true)
    {array_push($t,$el);

    }

    else if ($type=="string" && is_string($el) === true)
    {array_push($t,$el);

    }
    else if ($type=="array" && is_array($el) === true)
    {array_push($t,$el);

    }
  }
    var_dump($t);


}


extractTabByType ([7,"e","t25",2,8,true,[5,2,3]],"array");
