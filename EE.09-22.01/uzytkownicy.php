<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portal spolecznosciowy</title>
        <link rel="stylesheet" href="styl5.css">
    </head>
    <body>
        <div id="baner1"><h2>Nasze osiedle</h2></div>
        <div id="baner2">
            <!-- skrypt1 -->
            <?php
                $conn=mysqli_connect('localhost', 'root', '', 'portal');
                $zap2=mysqli_query($conn, "SELECT count(*) FROM `dane`;");
                while($tab=$zap2->fetch_array())
                {
                    echo "Liczba użytkowników portalu: $tab[0]";
                }
            ?>
        </div>
        <div id="lewy">
            <h3>Logowanie</h3>
            <!-- formularz tutaj -->
            <form method="post" name="postt">
                Login<br>
                <input type="text" name="login"><br>
                Haslo:<br>
                <input type="password" name="pass" ><br>
                <input type="submit" value="Zaloguj">
            </form>
            </div>
        <div id="prawy">
            <h3>Wizytówka</h3>
            <div id="wizytowka">
                <!-- skrypt2 -->
                <?php
                    $login = isset($_POST["login"]) ? $_POST["login"] : '';
                    $haslo = isset($_POST["pass"]) ? $_POST["pass"] : '';

                    if( $login == "" || $haslo == "")
                    {
                        echo "puste pola login i/albo haslo";
                        return;
                    }


                    $zap_login=mysqli_query($conn, "SELECT `login` FROM `uzytkownicy`");
                    while($tab=$zap_login->fetch_array())
                    {
                        if($login == $tab[0])
                        {
                            $zap_password=mysqli_query($conn, "SELECT `haslo` FROM `uzytkownicy` where login = '".$login."'");
                            while($tab_pass=$zap_password->fetch_array())
                            {
                                if($tab_pass[0] == sha1($haslo, false))
                                {
                                    $zap_password=mysqli_query($conn, "SELECT uzytkownicy.login, dane.rok_urodz, dane.przyjaciol, dane.hobby, dane.zdjecie FROM `uzytkownicy` LEFT JOIN dane ON uzytkownicy.id = dane.id WHERE login='".$login."'");
                                    while($tab_result=$zap_password->fetch_array())
                                    {
                                        $wiek = 2023 - $tab_result[1];
                                        echo 
                                        "
                                        $login<br>
                                        <img src='$tab_result[4]'><br>
                                        <h4>$login ($wiek)</h4><br>
                                        <p>hobby: $tab_result[3]</p>
                                        <h1><img src='icon-on.png'> $tab_result[2]</h1>
                                        <a href='dane.html'>Wieciej</a>
                                        ";
                                    }
                                }
                            }
                            // echo "haslo nie pasuje<br>";
                            break;
                        }
                    }
                    // echo "login nie istnieje<br>";
                    

                    
                    mysqli_close($conn);
                ?>
            </div>
            </div>
        <div id="stopka">Stronę wykonał: 167298736187092</div>
    </body>
</html>