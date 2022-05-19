<?php
    include ‘connect.php’;
    $dbh = new mysqli("localhost", "dbUser", "qwe123", "produker");
    if(!$dbh){
    echo "ingen anslutning till databasen";
    exit(1);
}

   /*
    $sql = "SELECT * FROM products";

    $result = $dbh->prepare($sql);
    $result->execute();

    $result = $result->get_result();

        echo "<table><tr>"
        echo "<th>Namn</th><th>Beskrivning</th>Pris</tr>";
        while($row = $result->fetch_object()){
        echo "<tr><td>";
        echo $row->name;
        echo "</td><td>";
        echo $row->price;
        echo "</td></tr>";
    }
    echo "</table>";
    */
?>