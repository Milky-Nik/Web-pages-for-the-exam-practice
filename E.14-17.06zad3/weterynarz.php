<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Weterynarz</title>
        <link rel="stylesheet" href="weterynarz.css">
    </head>
    <body>
        <div id="baner">
            <h1>GABINET WETERYNARYJNY</h1>
        </div>
        <div id="lewy">
            <h2>PSY</h2>
            <!-- skrypt1 -->
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin11');
                $zap=mysqli_query($conn,'select id,imie,wlasciciel from Zwierzeta where rodzaj="1"');
                while($tab=mysqli_fetch_array($zap)){
                    echo $tab[0]." ".$tab[1]." ".$tab[2]."<br>";
                }
            ?>
            <h2>KOTY</h2>
            <!-- skrypt2 -->
            <?php
                $zap=mysqli_query($conn,'select id,imie,wlasciciel from Zwierzeta where rodzaj="2"');
                while($tab=mysqli_fetch_array($zap)){
                    echo $tab[0]." ".$tab[1]." ".$tab[2]."<br>";
                }
            ?>
        </div>
        <div id="srodkowy">
            <h2>SZCZEGÓŁOWA INFORMACJA O ZWIERZĘTACH</h2>
            <!-- skypt3 -->
            <?php
                $zap=mysqli_query($conn,'select imie,telefon,szczepienie,opis from Zwierzeta');
                while($tab=mysqli_fetch_array($zap)){
                    echo "
                    Pacjent: ".$tab[0]."<br>
                    Telefon wlasciciela: ".$tab[1]."
                    , ostatnie szczepienie: ".$tab[2]."
                    , informacje: ".$tab[3]."<br>
                    <hr>
                    ";
                }
                mysqli_close($conn);
            ?>
        </div>
        <div id="prawy">
            <h2>WETERYNARZ</h2>
            <a href="rys.png"><img src="rys.png"></a>
            <p>Krzysztof Nowakowski, lekarz weterynarii</p>
            <h2>GODZINY PRZYJĘĆ</h2>
            <table>
                <tr><td>Poniedziałek</td><td>15:00 - 19:00</td></tr>
                <tr><td>Wtorek</td><td>15:00 - 19:00</td></tr>
            </table>
        </div>
    </body>
</html>