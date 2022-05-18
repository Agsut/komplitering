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

<?php include 'includes/Sidhuvud.php';   ?>
        
        
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
                    <tr>
                        <td>Hammare</td>
                        <td>För att slå in spikar</td>
                        <td>150 kr</td>
                    </tr>
                    <tr>
                        <td>Färgburk</td>
                        <td>För att måla</td>
                        <td>99 kr</td>
                    </tr>
                    <tr>
                        <td>penselset</td>
                        <td>Används till färg</td>
                        <td>50 kr</td>
                    </tr>
                </tbody>
            </table>
            
        </main>
        <?php include 'includes/Meny.php'; ?>
        <?php include 'includes/Sidfot.php'; ?>
    </div>
</body>
</html>