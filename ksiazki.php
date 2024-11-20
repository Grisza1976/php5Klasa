<?php
include_once("connect.php");
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
        $sql = 'SELECT ksiazki.ksiazka_id,ksiazki.tytul,autorzy.imie,autorzy.nazwisko, ksiazki.gatunek FROM ksiazki JOIN autorzy ON ksiazki.autor_id = autorzy.autor_id';
        $zapytanie = mysqli_query($conn,$sql);
        echo "<table border=1><th>ID</th><th>Tytuł</th><th>Imie</th><th>Nazwisko</th><th>Gatunek</th>";
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