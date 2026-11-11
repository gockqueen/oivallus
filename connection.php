<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "oivallus";

    //luodaan yhteys tietokantaserveriin
    $conn = new mysqli($servername, $username, $password);

    //tarkistetaan ja luodaan tietokanta
    $sql = "CREATE DATABASE IF NOT EXISTS " . $database;
    //tarkistetaan että tietokanta luodaan
    /* if($conn->query($sql)){
        echo "Tietokanta luotu";
    }else{
        echo "Tietokannan luonti epäonnistui: " . $conn->error;
    } */

    //luodaan yhteys tietokantaan
    $conn = new mysqli($servername, $username, $password, $database);

    //luodaan taulu
    $sql_table = "CREATE TABLE IF NOT EXISTS idea (
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        paiva DATE NOT NULL,
        idea text NOT NULL,
        kategoria text NOT NULL
    )";

    //tarkistetaan onko taulu luotu
    /* if($conn->query($sql_table)){
        echo "Taulu on luotu!";
    }else{
        echo "Virhe luodessa taulua: " . $conn->error;
    } */
?>