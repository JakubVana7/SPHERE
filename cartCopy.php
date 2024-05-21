
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    
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
            <a href="prevodnik.html" draggable="false">ABOUT</a>
            <a href="cart.html" draggable="false">CART</a>
    </header>

    <main>
        <section class="cart-section">
            <div class="left-section">
                <!-- Scrollable container for products added to the cart -->
                <div class="scrollable-container">
                    <!-- Product block with image, name, price, and colorway -->
                    <?php 
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "vanaj";
                        
                        
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $i=0;
                            $sql = "SELECT idK FROM kosik" ;
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                $idKosik = $row["idK"] + $i;
                                


                    ?>
                    <div class="product-block">
                        <img src="<?php echo image1()?>" alt="Product Image">
                        <div class="product-info">
                            <p class="product-name">
                            <?php

                            $sql = "SELECT idB FROM kosik WHERE idK = '$idKosik'" ;
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            $idBota = $row["idB"];
                            }

                            $sql = "SELECT shoeName FROM boty WHERE idB = '$idBota'";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                            echo $row["shoeName"];
                                return $row["shoeName"];
                            }
                            ?></p>

                            <p class="product-size"><?php
                                $sql = "SELECT size FROM kosik WHERE idK = '$idKosik'";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) { 
                                    echo $row["size"];
                                return $row["size"];
                            }
                            ?></p>
                            <p class="product-price"><?php echo  price()." €"?>  </p>
                        </div>
                        
                    </div>
                    <?php
                        $i++;
                        }


                            ?>
                    
                    <div class="summary">
                        <p class="price-product-summary"><?php echo summary()." €"?></p>

                        <p class="Shipping-summary"></p>
                        <p class="finalprice-summary"></p>
                    </div>
                    <!-- More product blocks... -->
                </div>
            </div>
            <div class="right-section">
                <form class="scrollable-container">

                    <!-- Contact information -->
        <form action="" method="post">
            <div>
                <h1 class="nadpis">CONTACT INFO</h1>
                    <div class="contact-info">
                        <input type="text" name="name" placeholder="NAME">
                        <input type="text" name="surname" placeholder="SURNAME">
                        <input type="text" name="email" placeholder="E-MAIL">
                        <input type="text" name="phone" placeholder="PHONE">

                </div>
            </div>
                    <!-- Shipping details -->

                    <div>
                        <h1 class="nadpis">SHIPPING DETAILS</h1>
                        <div class="shipping-details">
                            <input type="text" name="address1" placeholder="ADDRESS LINE 1">
                            <input type="text" name="address2" placeholder="ADDRESS LINE 2">
                            <input type="text" name="city" placeholder="CITY">
                            <input type="text" name="country" placeholder="COUNTRY">
                            <input type="text" name="psc" placeholder="ZIP CODE">
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
                    <!-- Fill out information for credit card, PayPal, etc. -->
                    <div class="payment-form">
                        <!-- Payment form fields -->
                        <h1 class="nadpis">PAYMENT DETAILS</h1>
                        <!-- Card payment-->
                        <input type="text" name="cardNumber" placeholder="CARD NUMBER">
                        <input type="text" name="cvv" placeholder="CVV">
                        <select name="expM" class="dropdown" >
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
                            <select name="expY" class="dropdown" >
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
                        <!-- paypal,apple payment-->
                        <input type="text" name="email2" placeholder="E-MAIL">
                    </div>
                    <!-- Checkout button -->
                    <div class="checkout-button-container">
                        <button class="checkout-button" type="submit" name="checkout">CHECKOUT</button>
        </form>
                    </div>
                </form>
            </div>
        </section>
    </main>
 
    <script src="sricpt.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>

<?php
function image1() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT idB FROM kosik" ;
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        $idBota = $row["idB"];
        }

    $sql = "SELECT img1 FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {  
    return $row["img1"];
    }
}

function shoeSize(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT idB FROM kosik" ;
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        $idBota = $row["idB"];
        }

    $sql = "SELECT size FROM kosik WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {  
    return $row["size"];
}}

function summary(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        $sql = "SELECT idB FROM kosik" ;
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

function getID() {
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    $sql = "SELECT idB FROM objednavka" ;
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



function price() {
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT idB FROM kosik" ;
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

function shoeName() {
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    
    
 

    $sql = "SELECT shoeName FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    return $row["shoeName"];
    }
}

if(isset($_POST["payment-method"])){
switch ($_POST["payment-method"]) {
    case 'apple-pay':
        # code...
        break;
    
    case 'paypal':
        # code...
        break;
        
    case 'master-card':
                # code...
         break;

     case 'visa':
                    # code...
        break;

    default:
        # code...
        break;
}
}





     if(isset($_POST["checkout"]) && isset($_POST["name"]) && isset($_POST["surname"])&& isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["address1"]) && isset($_POST["city"]) && isset($_POST["country"]) && isset($_POST["psc"]) && isset($_POST["payment-method"])) {
        
        
        if (isset($_POST['addToCart'])) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "rutz";
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        
            $sql = "INSERT INTO objednavka (Cname, surname, email, phone, address1, address2, city, country, zip, cardNumber,cvv, expM,expY,email2)
            VALUES ('".$_POST["Cname"]."',
            '".$_POST['surname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['address1']."','".$_POST['address2']."','".$_POST['city']."','".$_POST['country']."','".$_POST['psc']."','".$_POST['cardNumber']."','".$_POST['cvv']."','".$_POST['expM']."','".$_POST['expY']."','".$_POST['email2']."')";
        
            if (mysqli_query($conn, $sql)){
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>"  . mysqli_error($conn);
            }
        } else {
            echo "Nedostatečné vyplnění informací";
        }
    }        

?>