<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Warzywniak</title>
        <link rel="stylesheet" href="styl2.css">
    </head>
    <body>
        <div id="lewy"><h1>Internetowy sklep z eko-warzywami</h1></div>
        <div id="prawy">
            <ol>
                <li>warzywa</li>
                <li>owoce</li>
                <li><a href="https://terapiasokami.pl/" target="_blank">soki</a></li>
            </ol>
        </div>
        <div id="glowny">
            <?php
            $conn=mysqli_connect('localhost','root','','egzamin7');
            $zap=mysqli_query($conn, 'select nazwa, ilosc,opis,cena,zdjecie from produkty where Rodzaje_id in (1,2)');
            while($tab=$zap->fetch_array()){
                echo '<div id="produkt"><img src="'.$tab[4].'" alt="warzywniak"><br><h5>'.$tab[0].'</h5><br>
                <p>opis: '.$tab[2].'</p><br><p>na stanie: '.$tab[1].'</p><br><h2>'.$tab[3].' zl</h2></div>';
            }
            ?>
        </div>
        <div id="stopka">
            <form method="post">
                Nazwa: <input type="text" name="nazwa">
                Cena: <input type="text" name="cena">
                <input type="submit" value="Dodaj produkt"><br>
                Stronę wykonał: 15293876152986735
            </form>
            <?php
            if(isset($_POST["nazwa"]) || isset($_POST["cena"])){
                $zap=mysqli_query($conn,
                'INSERT INTO `produkty` (`id`, `Rodzaje_id`, `Producenci_id`, `nazwa`, `ilosc`, `opis`, `cena`, `zdjecie`) VALUES (NULL, "1", "4", "'.$_POST["nazwa"].'", "10", NULL, "'.$_POST["cena"].'", "owoce.jpg");');
            }
            mysqli_close($conn);
            ?>
        </div>
    </body>
</html>