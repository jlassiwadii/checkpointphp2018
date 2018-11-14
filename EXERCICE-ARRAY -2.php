<html>

<body style=" background:red;">
<table  style=" background:white;" border="1" width="200" align="center" width="300">
    <tr align="center" style=" background:orange;"><td align="center">Nom Constante</td><td>Valeur</td></tr>

<?php
$arr=get_defined_constants();
foreach($arr as $x=>$val)
{echo  "<tr>";
    echo "<td> $x </td>";
    echo "<td> $val</td>";
    echo  "</tr>";

}
?>
</table>
</body>
</html>

