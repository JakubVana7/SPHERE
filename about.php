<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="author" content="Jakub Váňa, Tomáš Ungr, Zdeněk Rut">
    <meta name="keywords" content="E-shop, Boty">
    <meta name="description" content="E-shop na boty">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="body-about">
    <header>
        <span class="link">
            <a href="men.html" draggable="false">MEN</a>
            <a href="woman.html" draggable="false">WOMEN</a>
        </span>
        <nav class="navigation">
            <a href="index.html" draggable="false">SPHERE</a>
        </nav>
        <span class="about">
            <a href="about.php" draggable="false">ABOUT</a>
            <a href="cart.php" draggable="false">CART</a>
    </header>
 
    <div class="about-section">
        <div class="vrsek">
        <h1>ABOUT US</h1>

        
        <p>Webový projekt s tématem e-shop na boty</p>
        </div>
        <br>

        <div class="text-about">
        <p>Téma projektu, které jsme si zvolili je e-shop. Konkrétně se jedná o e-shop s botami.</p>
        
        <p>Náš projekt se skládá z homepage, dvou téměř identických stránek na pánský a dámský sortiment, funkčního košíku a dynamického přehledu produktů.</p>
        <br>
        <p>Design stránky je zaměřen na minimaličnost, profesionální vzhled, přehlednost a čistotu. Dosáhli jsme toho využitím pouze bílé a odstínů černé. To dodává stránce skvělý kontrast, a prostě dokonalý vzhled.</p>
        <br>
        <p>Všechny tyto části projektu jsou propojeny s naší databází pomocí PHP. Ta zákazníkovi umožňuje různé divy a především funkční košík s možnostmi platby a zápisem do databáze.</p>
        <br>
        
        <p>Jednoduše řečeno náš web je ta ideální volba na moderní a funkční e-shop s přehledným a příjemným designem.</p>
        <br>
        <br>
        </div>

        <h1 id="autori">AUTOŘI</h1>
        
        <section class="jmena">
        <ul>
            <li>
               <span>JAKUB VÁŇA</span> - Zodpovědný za vývoj Front Endu webu.
            </li>
            <li>
                <span>ZDENĚK RUT</span> - Zajistil vývoj Back Endu webu.
            </li>
            <li>
                <span>TOMÁŠ UNGR</span> - Staral se o další úkoly, jako je dokumentace projektu atd.
            </li>
        </ul>
        </section>

        
        <div class='nakupy'>
            <?php
            $servername = 'localhost'; 
            $username = 'root'; 
            $password = ''; 
            $dbname = "vanaj";
            $conn = new mysqli($servername, $username, $password, $dbname);

            $sql = "SELECT COUNT(surname) as count FROM zakaznik";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p>Kolik lidí u nás nakoupilo: " . $row["count"] . "<p>";
                }
            } else {
                echo "<p>Žádný zákazník zatím nenakoupil.<p>";
            }

            echo "<br>";

            $sql = "SELECT SUM(price) as sum FROM boty";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<p>Cena všech našich bot: " . $row["sum"] . " €<p>";
                }
            } else {
                echo "<p><p>";
            }
            ?>
        </div>
    </div>
    <script src="sricpt.js"></script>
</body>
</html>