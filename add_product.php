<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add product - Webbshop</title>
</head>
<body>
    <div class="wrapper">
        <header>
            <h1>Välkommen till Webbshoppen - Lägg till produkt</h1>
        </header>
        <nav>
            <ul>
                <li><a href="index.html">Visa produkter</a></li>
                <li><a href="add_product.html">Lägg till produkt</a></li>
				<li><a href="login.html">Logga in</a></li>
            </ul>
        </nav>
        <main>
            <form action="add_product.php" method="post">
                <p>
                    <label for="name">Namn:</label>
                    <input type="text" id="name" name="name">
                </p>
                
                <p>
                    <label for="description">Beskrivning:</label>
                    <input type="text" id="description" name="description">
                </p>
                
                <p>
                    <label for="price">Pris:</label>
                    <input type="text" id="price" name="price">
                </p>
                
                <p>
                    <input type="submit" value="Lägg till">
                </p>
            </form>
        </main>
        <footer>
            <p>Uppgift i webbserverprogrammering 1</p>
        </footer>
    </div>
</body>
</html>

<?php


?>