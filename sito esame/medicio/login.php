<?php
    session_start(); //apro la sessione

    //prendo i dati dal post
    $email = $_POST['email'];
    $password = md5($_POST['password']);



    $con = new mysqli("127.0.0.1", "root", "", "sito esame");
    if (mysqli_connect_errno()) {
        echo "Errore nella connessione al db";
        exit();
    }

    $sql = "SELECT * FROM utenti";
    $ris = mysqli_query($con, $sql) or die("Errore nella esecuzione della query");
    $accesso = false;


    foreach ($ris as $row){
        if (( $row['email'] == $email) && ($row['pw'] == $password)){
            $_SESSION['email'] = $email;
            $accesso = true;
            echo "<h3 style='text-align:center;'><b>Utente riconosciuto:</h3><br>";
            echo "<a href='index.php' style:'text-align:center;'>Torna alla home</a>";
        }
    }

    if ($accesso == false) {
        echo "<h3 style='text-align:center;'><b>Utente non riconosciuto:</h3><br>";
        echo "<a href='index.php' style:'text-align:center;'>Torna alla home</a>";
    }

    mysqli_close($con);
?>