<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Panel administratora</title>
        <link rel="stylesheet" href="styl4.css">
    </head>
    <body>
        <div id="baner"><h3>Portal Społecznościowy - panel administratora</h3></div>
        <div id="lewy">
            <h4>Użytkownicy</h4>
            <!-- skrypt1 -->
            <?php
            $conn=mysqli_connect('localhost','root','','egzamin5');
            $zap=mysqli_query($conn, "select id,imie,nazwisko,rok_urodzenia from osoby limit 30");
            while($tab = $zap->fetch_array()){
                $wiek = 2023 - $tab[3];
                echo $tab[0].". ".$tab[1]." ".$tab[2].", ".$wiek." lat<br>";
            }
            ?>
            <a href="settings.html">Inne Ustawienia</a>
        </div>
        <div id="prawy">
            <h4>Podaj id użytkownika</h4>
            <form method="post">
                <input type="number" name="num">
                <input type="submit" id="sub" value="ZOBACZ">
                <hr>
                <!-- skrypt2 -->
            </form>
                <?php
                $num = $_POST["num"];
                if($num != '')
                {
                    $zap=mysqli_query($conn, "select imie,nazwisko,rok_urodzenia,opis,zdjecie,hobby.nazwa from osoby left join hobby on osoby.Hobby_id = hobby.id where osoby.id ='".$num."'");
                    while($tab=$zap->fetch_array()){
                        echo $num.". ".$tab[0]." ".$tab[1].'<br><img src="'.$tab[4].'"><br>Rok urodzenia: '.$tab[2]."<br>Opis: ".$tab[3]."<br>Hobby: ".$tab[5];
                    }
                }
                mysqli_close($conn);
                ?>
        </div>
        <div id="stopka">Stronę wykonął: 10986723987016209873</div>
    </body>
</html>