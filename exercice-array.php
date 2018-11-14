<?php
$arr=range(1,63);
print_r($arr);//affichage du arr
echo "<br>";
$count=10;
for($i=0;$i<$count;$i++)
{
    $r = rand(0, 6.3);

    $arr1[$i]=$r;
}
print_r($arr);//affichage du arr1
?>


<html>
<body>
<table  border=1 bgcolor="aqua" align="center" width="200">
    <tr align="center"><td align="center">X</td><td>SIN(X)</td></tr>
    <?php
$arr2=array();
$count=20;//taille du tableau
for($i=0;$i<$count;$i++)
{
    $arr2[rand(0, 6.3)]=Sin(rand(0, 6.3));


}
foreach($arr2 as $key=>$val)
{

    echo "<tr>";
    echo "<td>$key</td>";
     echo "<td>$val</td>";
    echo "</tr>";    //affichage du arr2
}



?>

</table>
</body>
</html>
