<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista przyjaciol</title>
        <link rel="stylesheet" href="styl.css">
    </head>
    <body>
        <div id="baner">
            <h1>Portal Społecznościowy - moje konto</h1>
        </div>
        <div id="glowny">
            <!-- skrypt1 -->
            <h2>Moje zainteresowania</h2>
            <ul>
                <li>muzyka</li>
                <li>film</li>
                <li>komputery</li>
            </ul>
            <h2>Moi znajomi</h2>
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin8');
                $zap=mysqli_query($conn, 'select imie,nazwisko,opis,zdjecie from osoby where Hobby_id in (1,2,6)');
                while($tab=mysqli_fetch_row($zap)){
                    echo '
                    <div id="zdjecie">
                        <img src="'.$tab[3].'" alt="przyjaciel">
                    </div>
                    <div id="opis">
                        <h3>'.$tab[0].' '.$tab[1].'</h3>
                        <p>Ostatni wpis: '.$tab[2].'</p>
                    </div>
                    <div id="linia"><hr></div>
                    ';
                }
                mysqli_close($conn);
            ?>
        </div>
        <div id="stopka1">
            Stronę wykonał: 1982670938716029873610987
        </div>
        <div id="stopka2">
            <a href="mailto:ja@portal.pl">napisz do mnie</a>
        </div>
    </body>
</html>