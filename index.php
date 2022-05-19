<?php
    require "includes/connect.php";
    $sql = "SELECT * FROM webbserver";
    $result  = $dbh->prepare($sql);
    $result->execute();
    $result = $result->get_result();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Webbshop</title>
</head>
<body>
    <div class="wrapper">

<?php include 'includes/Sidhuvud.php'; ?>
        
        
<main>
            <table>
                <thead>
                    <tr>
                        <th>Namn</th>
                        <th>Beskrivning</th>
                        <th>Pris</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($row=$result->fetch_assoc()){
                        echo <<< TR
                        <tr>
                            <td> $row['Namn'] </td>
                            <td> $row['Beskrivning'] </td>
                            <td> $row['Pris'] </td>
                        </tr>
TR;
                    }
                    ?>

                </tbody>
            </table>
            
        </main>
        <?php include 'includes/Meny.php'; ?>
        <?php include 'includes/Sidfot.php'; ?>
    </div>
</body>
</html>