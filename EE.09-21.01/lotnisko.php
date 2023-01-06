<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Port Lotniczy</title>
        <link rel="stylesheet" href="styl5.css">
    </head> 
    <body>
        <div id="flexbox">
        <div id = "baner1"><img src="zad5.png" alt="logo lotnisko"></div>
        <div id = "baner2"><h1>Przyloty</h1></div>
        <div id = "baner3"><h3>przydatne linki</h3><a href="kwerendy.txt">Pobierz</a></div>
        </div>
        <div id = "glowny">
            <table>
                <tr>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>numer rejsu</th>
                    <th>status</th>
                </tr>
                <?php
                    $conn=mysqli_connect("localhost", "root", "", "egzamin2");
                    $zap=mysqli_query($conn, "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC;");
                    while($tab=$zap->fetch_array())
                    {
                        echo "<tr><td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td><td>$tab[3]</td></tr>";
                    };
                ?>
            <table>
        </div>
        <div id="flexbox2">
        <div id = "stopka1">
            <?php
                setcookie("visit",time(), time() + 120 * 60);
                if(isset($_COOKIE["visit"]))
                {
                    echo "<p><b>Witaj ponownie na stronie lotniska</b></p>";
                }
                else{
                    echo "<p><b>Dzień dobry! Strona lotniska używa ciasteczek</b></p>";
                }
            ?>
        </div>
        <div id = "stopka2">Autor: 16729873187263</div>
        </div>
    </body>
</html>