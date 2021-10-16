<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="2172030 Femmy Friscilla">
    <title>hasil 2</title>
</head>
<body>
    <table cellspacing="0" align="center" border="3">
        <form>
            <tr>
                <td colspan="2" align="middle" style="background-color: rgb(166,210,98);"><b>Kalkulator</b></td>
            </tr>
            <tr>
                <td bgcolor='6FA61D'>Angka Pertama </td>
                <?php
                echo"<td width='80' align='middle'>$_GET[angka1]</td>";
                ?>
            </tr>
            <tr>
                <td bgcolor='6FA61D'>Angka Kedua</td>
                <?php
                echo"<td align='middle'>$_GET[angka2]</td>";
                ?>
            </tr>
            <tr>
                <td bgcolor='6FA61D'>Operator</td>
                <?php
                echo"<td align='middle'>$_GET[operator]</td>";
                ?>
            </tr>
            <tr>
                <td coldspan="2" style="background-color: rgb(166,210,98);" align="middle"> Hasil = 
                    <?php 
                    $num1 = $_GET["angka1"];
                    $num2 = $_GET["angka2"];
                    $oper = $_GET["operator"];

                    if ($oper =="+") {echo $num1+$num2;}
                    else if ($oper =="-") {echo $num1-$num2;}
                    else if ($oper =="*") {echo $num1*$num2;}
                    else if ($oper =="/") {echo $num1/$num2;}
                    ?>
                </td>
            </tr>
        </form>

    </table>
</body>
</html>