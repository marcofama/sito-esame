<?php
session_start(); //apro la sessione

//prendo i dati dal post
$cod_fiscale = $_POST["codFiscale"];
$genere = $_POST['genere'];
$prezzo = $_POST['prezzo'];
$date=date("Y-m-d H:i:s", strtotime($_POST["date"]));




$con = new mysqli("127.0.0.1", "root", "", "sito esame");
if (mysqli_connect_errno()) {
    echo "Errore nella connessione al db";
    exit();
}

$sql = "INSERT INTO visita (genere,data_visita,costo,Codice_fiscale) VALUES ('" . $genere . "','" . $date . "',  $prezzo ,'" . $cod_fiscale . "')";
$ris = mysqli_query($con, $sql) or die("Errore nella esecuzione della query");

echo "<h3 style='text-align:center;'><b>visita prenotata:</h3><br>";
echo "<a href='index.php' style:'text-align:center;'>Torna alla home</a>";



mysqli_close($con);