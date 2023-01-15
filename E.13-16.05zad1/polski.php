<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Szkoła Ponadgimnazjalna</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <div id="baner">
        <h1>Oceny uczniów: język polski</h1>
    </div>
    <div id="lewy">
        <h2>Lista uczniów: </h2>
        <ol>
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin14');
                $zap=mysqli_query($conn,'select imie,nazwisko from uczen');
                while($tab=mysqli_fetch_row($zap)){
                    echo "
                    <li>".$tab[0]." ".$tab[1]."</li>
                    ";
                }
            ?>
        </ol>
    </div>
    <div id="prawy">
        <h2>Uczeń:
        <?php
                $zap1=mysqli_query($conn,'select imie,nazwisko from uczen where id=2');
                while($tab=mysqli_fetch_row($zap1)){
                    echo "
                    ".$tab[0]." ".$tab[1]."</h2>
                    ";
                }
        ?>
        <p>Średnia ocen z języka polskiego: 
        <?php
        $zap2=mysqli_query($conn,'select avg(ocena) from ocena where uczen_id=2 and przedmiot_id=1');
        while($tab=mysqli_fetch_row($zap2)){
            echo "
            ".$tab[0]."</p>
            ";
        }
        mysqli_close($conn);
        ?>
    </div>
    <div id="stopka">
        <h3>Zespół Szkół Ponadgimnazjalnych</h3>
        <p>Stronę opracował: 198273871623876</p>
    </div>
</html>