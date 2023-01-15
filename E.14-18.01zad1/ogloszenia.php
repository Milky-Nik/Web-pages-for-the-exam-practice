<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portal ogłoszeniowy</title>
        <link rel="stylesheet" href="styl1.css">
    </head>
    <body>
        <div id="baner">
            <h1>Portal Ogłoszeniowy</h1>
        </div>
        <div id="lewy">
            <h2>Kategorie ogłoszeń</h2>
            <ol type="I">
                <li>Książki</li>
                <li>Muzyka</li>
                <li>Filmy</li>
            </ol><br>
            <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę"><br>
            <table>
                <tr><td>Liczba ogloszeń</td><td>Cena ogloszenia</td><td>Bonus</td></tr>
                <tr><td>1-10</td><td>1 PLN</td><td rowspan="3">Subskrypcja newslettera to upust 0.20 PLN na ogloszenie</td></tr>
                <tr><td>11-50</td><td>0,80 PLN</td></tr>
                <tr><td>51 i wiecej</td><td>0.60 PLN</td></tr>
            </table>
        </div>
        <div id="prawy">
            <h2>Ogłoszenia kategorii książki</h2>
            <!-- skrypt -->
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin10');
                $zap1=mysqli_query($conn,
                "select id,tytul,tresc,uzytkownik_id from ogloszenie where kategoria=1");
                while($tab=mysqli_fetch_row($zap1))
                {
                    echo "
                    <h3>".$tab[0]." ".$tab[1]."</h3>
                    <p>".$tab[2]."</p>
                    <p>numer telefonu:
                    ";
                    $zap2=mysqli_query($conn,
                    "select uzytkownik.telefon from ogloszenie left join
                    uzytkownik on ogloszenie.uzytkownik_id = uzytkownik.id where ogloszenie.id ='".$tab[0]."'");
                    while($tab_num=mysqli_fetch_row($zap2))
                    {
                        echo $tab_num[0]."</p>";
                    }
                }
                mysqli_close($conn);
            ?>
        </div>
        <div id="stopka">
            Portal ogłoszeniowy opracował: 1259867351967235679
        </div>
    </body>
</html>