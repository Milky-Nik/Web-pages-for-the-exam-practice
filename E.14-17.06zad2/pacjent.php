<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Poradnia</title>
        <link rel="stylesheet" href="poradnia.css">
    </head>
    <body>
        <div id="baner"><h1>PORADNIA SPECJALISTYCZNA</h1></div>
        <div id="lewy">
            <h3>LEKARZE SPECJALIŚCI</h3>
            <tabel>
                <tr><td colspan="2">Poniedziałek</td></tr>
                <tr><td>Anna Kowalska</td><td>otolaryngolog</td></tr>
                <tr><td colspan="2">Wtorek</td></tr>
                <tr><td>Jan Nowak</td><td>kardiolog</td></tr>
            </tabel>
            <h3>LISTA PACJENTÓW</h3>
            <!-- skrypt1 -->
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin12');
                $zap=mysqli_query($conn,'select id,imie,nazwisko,choroba from pacjenci');
                while($tab=mysqli_fetch_row($zap)){
                    echo $tab[0]." ".$tab[1]." ".$tab[2]." ".$tab[3]."<br>";
                }
                mysqli_close($conn);
            ?>
            <br><br>
            <form method="post" action="pacjent.php">
                Podaj id: <input type="number" name="id"><br>
                <input type="submit" value="Pokaż szczegóły">
            </form>
        </div>
        <div id="prawy">
            <h2>KARTA PACJENTA</h2>
            <!-- skrypt2 -->
            <?php
                $conn=mysqli_connect('localhost','root','','egzamin12');
                if(isset($_POST['id']))
                {
                    $zap=mysqli_query($conn,'select imie,nazwisko,leki_przepisane,opis from pacjenci where id="'.$_POST['id'].'"');
                    while($tab=mysqli_fetch_row($zap)){
                        echo "
                        Imie i nazwisko: ".$tab[0]." ".$tab[1]."<br>
                        Przepisane leki: ".$tab[2]."<br>
                        Opis choroby: ".$tab[3]."
                        ";
                    }
                }
                mysqli_close($conn);
            ?>
        </div>
        <div id="stopka">
            <p>utworzone przez: 1726394871628793617802</p><br>
            <a href="kwerendy.txt">Kwerendy do pobrania</a>
        </div>
    </body>
</html>