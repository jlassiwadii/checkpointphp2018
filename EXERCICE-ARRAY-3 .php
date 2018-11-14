<?php
$data = "ahla";

foreach (count_chars($data, 1) as $i => $val) {
    echo  chr($i)." : ".$val."<br>" ;
}
