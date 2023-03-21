<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jana KOTAK</title>
</head>
<center>

    <body>
        <h3>JANA KOTAK</h3>
        <form method="POST">
            <label for="tig">Tinggi</label>
            <input type="number" name="tinggi">
            <label for="leb">Lebar</label>
            <input type="number" name="lebar">
            <button name="submit" value="submit" id="submit">Jana</button>
        </form>
        <p>Selepas Memasukan Nombor sila tekan Button Jana</p>
    </body>
</center>

</html>

<?php
if ($_POST['submit']) {
    $tinggi = $_POST['tinggi'];
    $lebar = $_POST['lebar'];
    echo "<table border='1' align='center' width='50%' height='50%' cellpadding='2' cellspacing='0' style='text-align: center;'>";

    for ($row = 0; $row <= $tinggi; $row++) {
        echo "<tr> \n";
        for ($col = 0; $col <= $lebar; $col++) {
            $submit = $tinggi + $lebar;
            echo "<td>" . (($row >= $submit ? $submit - $row : $row) + ($col >= $submit ? $submit = $col : $col)) . "</td> \n";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
