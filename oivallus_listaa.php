<?php 
    
    //avataan tietokantayhteys
    require_once("connection.php");

    //luodaan kysely
    $sql = "SELECT * FROM idea";

    //ajetaan kysely
    $result = $conn->query($sql);

    //tulostetaan tiedot sivulle
    if($result->num_rows > 0){
        echo "
            <table>
                <tr>
                    <th>Päivä</th>
                    <th>Oivallus</th>
                    <th>Kategoria</th>
                    <th>Muokkaa</th>
                    <th>Poista</th>
                </tr>   
            <tbody>
        ";
        while($row = $result->fetch_assoc()){
            echo "
                <tr>
                    <td>" . $row['paiva'] . "</td>
                    <td>" . $row['idea'] . "</td>
                    <td>" . $row['kategoria'] . "</td>
                    <td>Päivitä</td>
                    <td><a href='oivallus_poista.php?id=" . $row["id"] . "'>Tuhoa</a></td>
                </tr>
            ";
        };
        echo "
            </tbody>
            </table>
        ";
    }else{
        echo "Ei tietoja tietokannassa";
    }

    $conn->close();

?>