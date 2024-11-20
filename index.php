<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <div class="aaa">
            <label>Metoda: Fetch Array</label><br>
            <?php
            $sql = 'SELECT COUNT(autorzy.autor_id) FROM autorzy';
            $zapytanie = mysqli_query($conn,$sql);
            $wynik = mysqli_fetch_array($zapytanie);
            echo '<p> W Bazie danych jest: '.$wynik[0] . ' <a href="autorzy.php">Autorów</a>';
            ?>
        </div>
        <div class="aaa">
            <label>Metoda: Fetch Assoc</label>
            <?php
            $sql1 = 'SELECT COUNT(ksiazki.ksiazka_id) AS ile FROM ksiazki';
            $zapytanie1 = mysqli_query($conn,$sql1);
            $wynik1 = mysqli_fetch_assoc($zapytanie1);
            echo '<p> W Bazie danych jest: '.$wynik1['ile'] . ' <a href="ksiazki.php">Książek</a>';
            ?>
        </div>
        <div class="aaa">
            <label>Metoda: Num Rows</label>
            <?php
            $sql2 = 'SELECT wypozyczenia.wypozyczenie_id FROM wypozyczenia';
            $zapytanie2 = mysqli_query($conn,$sql2);
            $wynik2 = mysqli_num_rows($zapytanie2);
            echo '<p> W Bazie danych jest: '.$wynik2 . ' <a href="wypozyczenia.php">Wypożyczeń</a>';
            ?>
        </div>
</div>
</body>
</html>