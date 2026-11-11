<?php 
    include("header.php");
?>

    <h1>Moikka <?php echo $_GET["nimi"] ? $_GET["nimi"] : "anon"; ?></h1>

    <form action="oivallus_lisaa.php" method="get">
        <label for="oivallus">Lisää uusi:</label><br>
        <input type="text" name="oivallus" placeholder="tähän oivalluksesi"><br>
        <label for="kategoria">Valitse kategoria:</label><br>
        <select name="kategoria">
            <option value="järjestelmä">Järjestelmä</option>
            <option value="Ohjelmointi">Ohjelmointi</option>
            <option value="PHP">PHP</option>
        </select><br>
        <input type="submit" value="lisää">
    </form>

    
    <?php include("oivallus_listaa.php"); ?>

<?php 
    include("footer.php");
?>