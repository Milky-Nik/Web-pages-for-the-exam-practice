<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Video On Demand</title>
        <link rel="stylesheet" href="styl3.css">
    </head>
    <body>
        <div id="banerlewy"><h1>Internetowa wypożyczalnia filmów</h1></div>
        <div id="banerprawy">
            <table>
                <tr><td>Kryminal</td><td>Horror</td><td>Przygodowy</td></tr>
                <tr><td>20</td><td>30</td><td>20</td></tr>
            </table>
        </div>
        <div id="polecamy">
            <h3>Polecamy</h3>
            <?php
            $conn=mysqli_connect('localhost','root','','egzamin6');
            $zap=mysqli_query($conn, 'select id,nazwa,opis,zdjecie from produkty where id in (18,22,23,25)');
            while($tab=$zap->fetch_array()){
                echo '<div id="film"><h4>'.$tab[0].". ".$tab[1].'</h4><br><img src="'.$tab[3].'" alt="film"><br><p>'.$tab[2].'</p></div>';
            }
            ?>
        </div>
        <div id="fantastyczne">
            <h3>Filmy fantastyczne</h3>
            <?php
            $zap=mysqli_query($conn, 'select id,nazwa,opis,zdjecie from produkty where Rodzaje_id = 12');
            while($tab=$zap->fetch_array()){
                echo '<div id="film"><h4>'.$tab[0].". ".$tab[1].'</h4><br><img src="'.$tab[3].'" alt="film"><br><p>'.$tab[2].'</p></div>';
            }
            ?>
        </div>
        <div id="stopka">
            <form method="post">
                Usun film nr.:
                <input type="number" name="id">
                <input type="submit" value="Usun Film"><br>
                Stronę wykonal: 1028730986712098731273987189
            </form>
            <?php
            if(isset($_POST['id'])){
                $zap=mysqli_query($conn, 'delete from produkty where produkty.id="'.$_POST['id'].'"');
            }
            mysqli_close($conn);
            ?>
        </div>
    </body>
</html>