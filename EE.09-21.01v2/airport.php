<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Odloty samolotów</title>
        <link rel="stylesheet" href="styl6.css">
    </head>
    <body>
        <div id="baner"><h2>Odloty z lotniska</h2></div>
        <div id="baner2"><img src="zdjecie_skalowane.png" alt="logotyp"></div>
        <div id="glowny">
            <h4>tabela odlotow</h4>
            <table>
                <tr>
                    <td>lp.</td>
                    <td>numer rejsu</td>
                    <td>czas</td>
                    <td>kierunek</td>
                    <td>status</td>
                </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "egzamin");
                    $zap = mysqli_query($conn, "select id, nr_rejsu, czas, kierunek, status_lotu from odloty order by czas desc;");
                    while($tab=$zap->fetch_array())
                    {
                        echo "<tr><td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td><td>$tab[3]</td><td>$tab[4]</td></tr>";
                    };
                    ?>
                </table>
            </div>
            
        <div id="stopka"><a href="zdjecie_skalowane.png" target="_blank">Pobierz obraz</a></div>
        <div id="stopka2">
            <?php
                setcookie('last_time', time(), time() + 60 * 60);
                if(isset($_COOKIE['last_time']))
                {
                    echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
                }
                else
                {
                    echo "<p><b>Dzień dobry! Sprawdź regulamin naszej strony</b></p>";
                }
            ?>
        </div>
        <div id="stopka3">Autor: 1872634716208734610874</div>
    </body>
</html>