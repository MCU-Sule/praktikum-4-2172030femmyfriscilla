<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="author" content="2172030 Femmy Frisicilla">
    <title>index 3</title>
</head>
<body>
<?php

$hitam = "<td bgcolor='black'></td>";
$putih = "<td bgcolor='white'></td>";
?>
    <form>
        <p>Create A Chess Board</p>
        <table>
            <tr>
                <td>Ukuran Board : <input type="text" name="ukuran" id="ukuran"></td>
                <td><div style="width: 100%;"><input type="submit" value="Buat Board"></div></td>
            </tr>
        </table>
    </form>
    <br>

    <table border="1" width="500" height="500" cellpadding="0">
    <?php
    $hasil = $_GET["ukuran"];
    for($kolom=1;$kolom<=$hasil;$kolom++){
        echo"<tr>";
        for ($baris=1;$baris<=$hasil;$baris++){
            $femi=$kolom+$baris;
            if($femi%2==0){   
            echo $hitam;}
            else echo $putih;
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>