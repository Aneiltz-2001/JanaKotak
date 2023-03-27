<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jana KOTAK</title>
</head>


    <body>
        <h3>JANA KOTAK</h3>
        <form method="POST">
            <label for="tinggi">Tinggi :</label>
            <input type="number" name="tinggi" id="tinggi" size="5">
            <br><br>
            <label for="lebar">Lebar :</label>
            <input type="number" name="lebar" id="lebar" size="5">
            <br><br>
            <input type="sumbit" name="submit" value="Jana" id="submit">
            <br><br>
        </form>
        <p>Selepas Memasukan Nombor sila tekan Button Jana</p>
    </body>


</html>

<?php
if ($_POST['submit']) {
    $tinggi = $_POST['tinggi'];
    $lebar = $_POST['lebar'];
    echo "<table>";

    for ($row = 1; $row <= $tinggi; $row++) {
        echo "<tr> \n";
        for ($col = 1; $col <= $lebar; $col++) {
            $submit = $tinggi + $lebar;
            echo "<td></td> \n";
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
