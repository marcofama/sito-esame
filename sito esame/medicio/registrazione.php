<?php
session_start(); //apro la sessione

//prendo i dati dal post
$cod_fiscale = $_POST["codFiscale"];
$email = $_POST['emailR'];
$password = md5($_POST['passwordR']);



$con = new mysqli("127.0.0.1", "root", "", "sito esame");
if (mysqli_connect_errno()) {
    echo "Errore nella connessione al db";
    exit();
}

$sql = "INSERT INTO utenti (email,pw,codice_fiscale) VALUES ('" . $email . "','" . $password . "','" . $cod_fiscale . "')";
$ris = mysqli_query($con, $sql) or die("Errore nella esecuzione della query");
$accesso = false;

$_SESSION['email'] = $email;
$accesso = true;
echo "<h3 style='text-align:center;'><b>registrazione effettuata :</h3><br>";
echo "<a href='index.php' style:'text-align:center;'>Torna alla home</a>";



mysqli_close($con);
