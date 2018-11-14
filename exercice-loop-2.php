
<html>
<body >
<table border="1" align="center">
    <tr bgcolor="yellow">
        <td bgcolor="#006400">x</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td>7</td>
        <td>8</td> <td>9</td></tr>

    <?php
    $s=1;

    for($i=1;$i<10;$i++)
    {echo "<tr bgcolor='red'>";

        echo "<td bgcolor='yellow'>$i</td>";
        for($j=1;$j<10;$j++)
        {$s=$i*$j;

            echo "<td bgcolor='red'>$s</td>";

        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>

