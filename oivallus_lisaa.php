<?php 

    $paiva = date("Y-m-d");
    $oivallus = $_GET["oivallus"];
    $kategoria = $_GET["kategoria"];
    //nimi = $_GET["nimi"];

    //echo $paiva . $oivallus . $kategoria;

    require_once("connection.php");

    //luodaan rivin lisääminen
    $sql = "INSERT INTO idea (paiva, idea, kategoria) VALUES (' $paiva ', ' $oivallus ', ' $kategoria ')";

    if($conn->query($sql)){
        echo "Uusi rivi syntyi ongelmitta!";
    }else{
        echo "Uusia ongelmia syntyi";
    }

    //suljetaan tietokantayhteys
    $conn->close();

    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>