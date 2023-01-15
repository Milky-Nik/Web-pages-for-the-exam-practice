<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Komis Samochodowy</title>
        <link rel="stylesheet" href="auto.css">
    </head>
    <body>
        <div id="baner">
            <h1>SAMOCHODY</h1>
        </div>
        <div id="lewy">
            <h2>Wykaz samochodów</h2>
            <ul>
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin13');
                $zap=mysqli_query($conn,'select id,marka,model from samochody');
                while($tab=mysqli_fetch_row($zap)){
                    echo"
                    <li>".$tab[0]." ".$tab[1]." ".$tab[1]."</li>
                    ";
                }
            ?>
            </ul>
            <h2>Zamówienia</h2>
            <ul>
            <?php
                $zap1=mysqli_query($conn,'select id,Klient from zamowienia');
                while($tab=mysqli_fetch_row($zap1)){
                    echo"
                    <li>".$tab[0]." ".$tab[1]."</li>
                    ";
                }
            ?>
            </ul>
        </div>
        <div id="prawy">
            <h2>Pełne dane: Fiat</h2>
            <!-- skrypt3 -->
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin13');
                $zap2=mysqli_query($conn,'select id,marka,model,rocznik,kolor,stan from samochody where marka="Fiat"');
                while($tab=mysqli_fetch_row($zap2)){
                    echo"
                    ".$tab[0]." / ".$tab[1]." / ".$tab[2]."
                    ".$tab[3]." / ".$tab[4]." / ".$tab[5]."<br>
                    ";
                }
                mysqli_close($conn);
            ?>
        </div>
        <div id="stopka">
            <table>
                <tr><td><a href="kwerendy.txt">Kwerendy</a></td>
                    <td>Autor: 31692876318726</td>
                    <td><img src="auto.png" alt="komis samochodowy"></td></tr>
            </table>
        </div>
    </body>
</html>