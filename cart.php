<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="author" content="Jakub Váňa, Tomáš Ungr, Zdeněk Rut">
    <meta name="keywords" content="E-shop, Boty">
    <meta name="description" content="E-shop na boty">

</head>
<body>
<header>
        <span class="link">
            <a href="men.html" draggable="false">MEN</a>
            <a href="woman.html" draggable="false">WOMAN</a>
        </span>
    <nav class="navigation">
        <a href="homepage.html" draggable="false">SPHERE</a>
    </nav>
    <span class="about">
            <a href="about.html" draggable="false">ABOUT</a>
            <a href="cart.php" draggable="false">CART</a>
</header>

<main>
    <section class="cart-section">
        <div class="left-section">
            <div class="scrollable-container">
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
$conn = new mysqli($servername, $username, $password, $dbname);

$priceSummary=0;
$sql= "SELECT DISTINCT kosik.idK, kosik.size, boty.idB, boty.shoeName, boty.price, boty.img1 FROM kosik, boty WHERE kosik.idB = boty.idB";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

    echo '<div class="product-block">';
    echo '<img src="'.$row['img1'].'" alt="Product Image">';
    echo '<div class="product-info">';
    echo '<p class="product-name">'.$row['shoeName'].'</p>';
    echo '<p class="product-price">'.$row['price'].' €</p>';
    echo '<p class="product-size">'.$row['size'].'</p>';
    echo '</div>';
    echo '<div class="product-delete">';
    echo '<form method="post" action="">';
    echo '<input type="hidden" name="idKosik" value="'.$row['idK'].'">';//skryté ale hazí nám to id Košíku
    echo '<button class="delete-button" type="submit" name="DELETE">DELETE</button>';
    echo '</form>';
    echo '</div></div>';

    echo '<div class="price-summary1">';
    $priceSummary = $priceSummary + $row['price'];
    echo'</div>';
}


if(isset($_POST['idKosik'])){
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
$conn = new mysqli($servername, $username, $password, $dbname);  

    $idKosikDelete = $_POST['idKosik'];

    $sql="DELETE FROM kosik WHERE idK = '$idKosikDelete'";
    if ($conn->query($sql) === TRUE) {
        header("Location: ".$_SERVER['PHP_SELF']); // This will refresh the page
        exit;
      } else {
        echo "Error deleting record: " . $conn->error;
      }
    }


?>
            </div>
            <div class="cart-summary">
                <p>SHIPPING: </p>
                <?php 
                    echo "<p>FINAL PRICE: ".$priceSummary." €<p>";
                ?>
            </div>
        </div>
        <div class="right-section">
        <div class="scrollable-container">
            <form action="" method="get">
                <div>
                    <h1 class="nadpis">CONTACT INFO</h1>
                    <div class="contact-info">
                        <input type="text" name="Cname" placeholder="NAME" required>
                        <input type="text" name="surname" placeholder="SURNAME" required>
                        <input type="text" name="email" placeholder="E-MAIL" required>
                        <input type="text" name="phone" placeholder="PHONE" required>

                    </div>
                </div>
                <div>
                    <h1 class="nadpis">SHIPPING DETAILS</h1>
                    <div class="shipping-details">
                        <input type="text" name="address1" placeholder="ADDRESS LINE 1" required>
                        <input type="text" name="address2" placeholder="ADDRESS LINE 2">
                        <input type="text" name="city" placeholder="CITY" required>
                        <input type="text" name="country" placeholder="COUNTRY" required>
                        <input type="text" name="psc" placeholder="ZIP CODE" required>
                    </div>

                    <div>
                        <h1 class="nadpis">PAYMENT METHOD</h1>
                        <div class="payment-methods">
                            <label for="apple-pay">
                                <input type="radio" id="apple-pay" name="payment-method" value="apple-pay">
                                <img src="./images/apple-pay.png" alt="Apple Pay" class="payment-image">
                            </label>
                            <label for="paypal">
                                <input type="radio" id="paypal" name="payment-method" value="paypal">
                                <img src="./images/paypal.png" alt="PayPal" class="payment-image">
                            </label>
                            <label for="master-card">
                                <input type="radio" id="master-card" name="payment-method" value="master-card">
                                <img src="./images/mastercard.svg" alt="master card" class="payment-image">
                            </label>
                            <label for="visa">
                                <input type="radio" id="visa" name="payment-method" value="visa">
                                <img src="./images/visa.png" alt="Visa" class="payment-image">
                            </label>
                        </div>
                        
                    </div>
                    <div class="payment-form">
                        <h1 class="nadpis">PAYMENT DETAILS</h1>

                        <div class="card-information" style="display: none">
                        <input type="text" name="cardNumber" placeholder="CARD NUMBER">
                        <input type="text" name="cvv" placeholder="CVV">
                        <select name="expM" class="dropdown">
                            <option value="m0" id="m0-option">EXPIRATION MONTH</option>
                            <option value="m1">1</option>
                            <option value="m2">2</option>
                            <option value="m3">3</option>
                            <option value="m4">4</option>
                            <option value="m5">5</option>
                            <option value="m6">6</option>
                            <option value="m7">7</option>
                            <option value="m8">8</option>
                            <option value="m9">9</option>
                            <option value="m10">10</option>
                            <option value="m11">11</option>
                            <option value="m12">12</option>
                        </select>
                        <select name="expY" class="dropdown">
                            <option value="y0">EXPIRATION YEAR</option>
                            <option value="y1">2024</option>
                            <option value="y2">2025</option>
                            <option value="y3">2026</option>
                            <option value="y4">2027</option>
                            <option value="y5">2028</option>
                            <option value="y6">2029</option>
                            <option value="y7">2030</option>
                            <option value="y8">2031</option>
                            <option value="y9">2032</option>
                            <option value="y10">2033</option>
                        </select>
                        </div>

                        <div class="email2"  style="display: none">
                        <input type="text" name="email2" placeholder="E-MAIL">
                        </div>
                    </div>
                    <div class="checkout-button-container">
                        <input type="submit" class="checkout-button" name="submit" value="CHECKOUT">
                    </div>
            </form>
        </div>
        </div>
    </section>
</main>

<script src="sricpt.js"></script>
<script>
window.onload = function() {
    var paymentMethods = document.getElementsByName('payment-method');
    for (var i = 0; i < paymentMethods.length; i++) {
        paymentMethods[i].addEventListener('change', function() {
            document.querySelector('.card-information').style.display = (this.value == 'visa' || this.value == 'master-card') ? 'block' : 'none';
            document.querySelector('.email2').style.display = (this.value == 'paypal' || this.value == 'apple-pay') ? 'block' : 'none';
        });
    }
}
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

<?php


function summary()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT idB FROM objednavka";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $idBota = $row["idB"];
    }

    $price = 0;

    $sql = "SELECT price FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $price = $row["price"] + $price;
    }
    return $price;

}


function getID()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);


    $sql = "SELECT idB FROM objednavka";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {

        $idBota = $row["idB"];
    }
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";

$conn = new mysqli($servername, $username, $password, $dbname);


function price()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT idB FROM objednavka";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $idBota = $row["idB"];
    }

    $sql = "SELECT price FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["price"];
    }
}

function shoeName()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT idB FROM objednavka";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $idBota = $row["idB"];
    }


    $sql = "SELECT shoeName FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["shoeName"];
    }
}


  



if (isset($_GET["submit"])) {
    # code...
    

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO zakaznik (Cname, surname, email, phone, address1, address2, city, country, zip, cardNumber,cvv, expM,expY,email2)
        VALUES ('" . $_GET["Cname"] . "','" . $_GET['surname'] . "','" . $_GET['email'] . "','" . $_GET['phone'] . "','" . $_GET['address1'] . "','" . $_GET['address2'] . "','" . $_GET['city'] . "','" . $_GET['country'] . "','" . $_GET['psc'] . "','" . $_GET['cardNumber'] . "','" . $_GET['cvv'] . "','" . $_GET['expM'] . "','" . $_GET['expY'] . "','" . $_GET['email2'] . "')";

    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
}


?>
