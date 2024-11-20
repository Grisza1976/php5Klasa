<?php
include_once("connect.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container aaa">
        <?php
        $sql = 'SELECT autorzy.autor_id,autorzy.imie,autorzy.nazwisko,autorzy.data_urodzenia,autorzy.narodowosc  FROM autorzy';
        $zapytanie = mysqli_query($conn,$sql);
        echo "<table border=1><th>ID</th><th>Imie</th><th>Nazwisko</th><th>Data_urodzenia</th><th>Narodowosc</th>";
        while($rzad = mysqli_fetch_row($zapytanie)){
            echo "<tr><td>".$rzad[0]."</td><td>"
            .$rzad[1]."</td><td>"
            .$rzad[2]."</td><td>"
            .$rzad[3]."</td><td>"
            .$rzad[4]."</td></tr>";

        }
        echo "</table>"
        ?>
    </div>
</body>
</html>