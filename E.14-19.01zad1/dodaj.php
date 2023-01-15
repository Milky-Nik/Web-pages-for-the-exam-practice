<?php
$conn=mysqli_connect('localhost','root','','egzamin9');
if(isset($_POST['gatunek']))
{
    $zap=mysqli_query($conn, 
    "INSERT INTO `filmy` (`id`, `gatunki_id`, `rezyserzy_id`, `tytul`, `rok`, `ocena`)
    VALUES (NULL, '".$_POST['gatunek']."', '1', '".$_POST['tytul']."', '".$_POST['rok']."', '".$_POST['ocena']."')");
    echo "Film ".$_POST['tytul']." został dodany do bazy";
}
mysqli_close($conn);
?>