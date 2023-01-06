<!DOCTYPE HTML>
<html lang ="pl">
<head>
    <meta charset="utf-8">
    <title>ORGANIZER</title>
    <link rel="stylesheet" href="styl6.css">
</head>
    <body>  
        <div id ="calosc">
            <div id="flexbox">
                <div id ="baner_nazwa">
                MÓJ ORGANIZER
                </div>
                <div id="baner_wydarzenia">
                    <br>
                    <form action="organizer.php" method="post">
                    Wpis wydarzenia: <input type="text" name="pole_edycyjne">
                    <input type="submit" value="ZAPISZ">
                </div>
                <div id="baner_obraz">
                    <img src="logo2.png" alt="Mój organizer">
                </div>
            </div>
            <div id="glowny">
                <?php

                $host = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'egzamin6';
                $conn = mysqli_connect($host,$username,$password,$dbname);

                $sql= mysqli_query($conn, "SELECT * FROM zadania");

                while($tablica=$sql->fetch_array())
                {
                    echo "<div id=\"block\"> $tablica[1],$tablica[3]<br><br>$tablica[2] </div>";
                }
                ?>
            </div>
            <div id="stopka">
                <?php
                $miesiac = array(1 => 'styczen', 'luty', 'marzec', 'kwiecien', 'maj', 'czerwic', 'lipiec', 'sierpien', 'wrześien', 'październik', 'listopad', 'grudzien');
                echo "miesiac: ".$miesiac[date("m")].", Rok: ".date("Y")."<br><br>Prace wykonal:1098273487147";
                mysqli_close($conn);

                // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                //     $name = $_POST['pole_edycyjne']; }
                ?>
            </div>
        </div>
    </body>
</html>