<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Wędkowanie</title>
        <link rel="stylesheet" href="styl_1.css">
    </head>
    <body>
        <div id="baner"><h1>Portal dla wędkarzy</h1></div>
                <div id="lewy1">
                    <h3>Ryby zamiszkujące rzeki</h3>
                    <ol>
                        <!-- skrypt1 -->
                        <?php
                        $conn= mysqli_connect('localhost', 'root','', 'egzamin4');
                        $zap = mysqli_query($conn, "SELECT ryby.nazwa,lowisko.akwen,lowisko.wojewodztwo FROM `ryby` left join lowisko on ryby.id = lowisko.Ryby_id where lowisko.rodzaj = 3");
                        while($tab = $zap->fetch_array())
                        {
                            echo "<li>$tab[0] pływa w $tab[1], $tab[2]</li>";
                        }
                        ?>
                    </ol>
                </div>
                <div id="prawy">
                    <img src="ryba1.jpg" alt="Sum"><br>
                    <a href="kwerendy.txt">Pobierz kwerendy</a>
                </div>
                <div id="lewy2">
                    <h3>ryby drapieżne naszych wod</h3>
                    <table>
                        <tr>
                            <th>L.p</th>
                            <th>Gatunek</th>
                            <th>Występowanie</th>
                        </tr>
                        <!-- skrypt2 -->
                        <?php
                            $zap = mysqli_query($conn, "SELECT id,nazwa,wystepowanie FROM `ryby` WHERE styl_zycia = 1");
                            while($tab = $zap->fetch_array())
                            {
                                echo "<tr><td>$tab[0]</td><td>$tab[1]</td><td>$tab[2]</td></tr>";
                            }
                            mysqli_close($conn);
                        ?>
                    </table>
                </div>
            <div id="stopka">
                <p>Stronę wykonał: 12986731786263986716</p>
            </div>
    </body>
</html>