<?php 

    require_once("connection.php");

    $sql = "DELETE FROM idea WHERE id=" . $_GET["id"];

    $conn->query($sql);

    $conn->close();

    header("Location: " . $_SERVER["HTTP_REFERER"]);

?>