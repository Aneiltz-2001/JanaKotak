<!DOCTYPE html>
<html lang="en">

<head>
    <title>Jana KOTAK</title>
    <link rel="stylesheet" href="style.css">
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
            <input type="submit" name="submit" id="submit" value="Jana" >
            <br><br>
        </form>
    </body>
</html>

<?php
if (isset($_POST['submit'])) {
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
