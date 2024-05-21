
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="icon" href="images/favicon.png">
    <title>HOMEPAGE</title>
    <meta name="author" content="Zdeněk Rut, Jakub Váňa, Tomáš Ungr">
    <meta name="description" content="Webová aplikace">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <span class="link">
            <a href="men.html" draggable="false">MEN</a>
            <a href="woman.html" draggable="false">WOMAN</a>
        </span>
        <nav class="navigation">
            <a href="./homepage.html" draggable="false">SPHERE</a>
        </nav>
        <span class="about">
            <a href="about.html" draggable="false">ABOUT</a>
            <a href="cart.php" draggable="false">CART</a>
        </span>
</header>
<!-- produkt -->


<div class="container">
    <div id="slideshow">
        <!-- Add your images here -->
        <?php switch ($_GET['id']) {
            case 1:
                ?>
                
                <img src="./images/jordan1-reversemocha-1.webp" alt="Shoe 1">
                <img src="./images/jordan1-reversemocha-2.webp" alt="Shoe 2">
                <img src="./images/jordan1-reversemocha-3.webp" alt="Shoe 2">
                <?php

                break;

            case 2:
                ?>
                
                <img src="./images/airmax-dn-2.webp" alt="Shoe 2">
                <img src="./images/airmax-dn-1.webp" alt="Shoe 1">
                <img src="./images/airmax-dn-3.webp" alt="Shoe 2">

                <?php
                break;

            case 3:
                ?>
                <img src="./images/jordan5-1.webp" alt="Shoe 1">
                <img src="./images/jordan5-2.webp" alt="Shoe 2">
                <img src="./images/jordan5-3.webp" alt="Shoe 2">
                <?php
                break;

            case 4:
                ?>
                <img src="./images/rickowens-1.webp" alt="Shoe 1">
                <img src="./images/rickowens-2.webp" alt="Shoe 2">
                <img src="./images/rickowens-3.webp" alt="Shoe 2">
                <?php
                break;

            case 5:
                    ?>
                <img src="./images/sbdunk-ebay-1.webp" alt="Shoe 1">
                <img src="./images/sbdunk-ebay-2.webp" alt="Shoe 2">
                <img src="./images/sbdunk-ebay-3.webp" alt="Shoe 2">
                    <?php
                    break;

            case 6:
                    ?>
                <img src="./images/supreme-timberland-1.webp" alt="Shoe 1">
                <img src="./images/supreme-timberland-2.webp" alt="Shoe 2">
                <img src="./images/supreme-timberland-3.webp" alt="Shoe 2">
                    <?php
                    break;

            case 7:
                    ?>
                <img src="./images/adidas-walesbonner-1.webp" alt="Shoe 1">
                <img src="./images/adidas-walesbonner-2.webp" alt="Shoe 2">
                <img src="./images/adidas-walesbonner-3.webp" alt="Shoe 2">
                    <?php
                    break;

            case 8:
                    ?>
                <img src="./images/sbdunk-huf-1.webp" alt="Shoe 1">
                <img src="./images/sbdunk-huf-2.webp" alt="Shoe 2">
                <img src="./images/sbdunk-huf-3.webp" alt="Shoe 2">
                    <?php
                    break;

            case 9:
                    ?>
                <img src="./images/salomon-xt-6-1.webp" alt="Shoe 1">
                <img src="./images/salomon-xt-6-2.webp" alt="Shoe 2">
                <img src="./images/salomon-xt-6-3.webp" alt="Shoe 2">
                    <?php
                    break;

            case 10:
                    ?>
                <img src="./images/airmax-plus-1.webp" alt="Shoe 1">
                <img src="./images/airmax-plus-2.webp" alt="Shoe 2">
                <img src="./images/airmax-plus-3.webp" alt="Shoe 2">
                    <?php
                    break;

            case 11:
                        ?>
                <img src="./images/dunk-blueconcord-1.webp" alt="Shoe 1">
                <img src="./images/dunk-blueconcord-2.webp" alt="Shoe 2">
                <img src="./images/dunk-blueconcord-3.webp" alt="Shoe 2">
                        <?php
                        break;

            case 12:
                        ?>
                <img src="./images/jordan4-hyperviolet-1.webp" alt="Shoe 1">
                <img src="./images/jordan4-hyperviolet-2.webp" alt="Shoe 2">
                <img src="./images/jordan4-hyperviolet-3.webp" alt="Shoe 2">
                        <?php
                        break;

            case 13:
                        ?>
                <img src="./images/jordan4-frozenmoments-1.webp" alt="Shoe 1">
                <img src="./images/jordan4-frozenmoments-2.webp" alt="Shoe 2">
                <img src="./images/jordan4-frozenmoments-3.webp" alt="Shoe 2">
                        <?php
                        break;

            case 14:
                        ?>
                <img src="./images/bapesta-1.webp" alt="Shoe 1">
                <img src="./images/bapesta-2.webp" alt="Shoe 2">
                <img src="./images/bapesta-3.webp" alt="Shoe 2">
                        <?php
                        break;

            case 15:
                            ?>
                <img src="./images/rickowens-converse-1.webp" alt="Shoe 1">
                <img src="./images/rickowens-converse-2.webp" alt="Shoe 2">
                <img src="./images/rickowens-converse-3.webp" alt="Shoe 2">
                            <?php
                            break;

            case 16:
                            ?>
                <img src="./images/supreme-airmax-1.webp" alt="Shoe 1">
                <img src="./images/supreme-airmax-2.webp" alt="Shoe 2">
                <img src="./images/supreme-airmax-3.webp" alt="Shoe 2">
                            <?php
                            break;

            case 17:
                            ?>
                <img src="./images/adidas-gazelle-1.webp" alt="Shoe 1">
                <img src="./images/adidas-gazelle-2.webp" alt="Shoe 2">
                <img src="./images/adidas-gazelle-3.webp" alt="Shoe 2">
                            <?php
                            break;

            case 18:
                            ?>
                <img src="./images/newballance-1.webp" alt="Shoe 1">
                <img src="./images/newballance-2.webp" alt="Shoe 2">
                <img src="./images/newballance-3.webp" alt="Shoe 2">
                            <?php
                            break;

            case 19:
                            ?>
                <img src="./images/jordan3-peach-1.webp" alt="Shoe 1">
                <img src="./images/jordan3-peach-2.webp" alt="Shoe 2">
                <img src="./images/jordan3-peach-3.webp" alt="Shoe 2">
                
                            <?php
                            break;

            case 20:
                            ?>
                <img src="./images/jordan4-offwhite-1.webp" alt="Shoe 1">
                <img src="./images/jordan4-offwhite-2.webp" alt="Shoe 2">
                <img src="./images/jordan4-offwhite-3.webp" alt="Shoe 2">
                            <?php
                            break;
            default:
                # code...
                break;
        }
        ?>
    </div>
    <div class="details">
        <h1 id="shoeName"> <?php echo shoeName()?></h1>
        <p id="shoeDescription"><?php echo description()?></p>
<form action="" method="post">
    <div id="sizes">
        <button type="button" name="size" value="38">38</button>
        <button type="submit" name="size" value="38.5">38.5</button>
        <button type="submit" name="size" value="39">39</button>
        <button type="submit" name="size" value="39.5">39.5</button>
        <button type="submit" name="size" value="40">40</button>
        <button type="submit" name="size" value="40.5">40.5</button>
        <button type="submit" name="size" value="41">41</button>
        <button type="submit" name="size" value="41.5">41.5</button>
        <button type="submit" name="size" value="42">42</button>
        <button type="submit" name="size" value="42.5">42.5</button>
        <button type="submit" name="size" value="43">43</button>
        <button type="submit" name="size" value="43.5">43.5</button>
        <button type="submit" name="size" value="44">44</button>
        <button type="submit" name="size" value="44.5">44.5</button>
        <button type="submit" name="size" value="45">45</button>
        <button type="submit" name="size" value="45.5">45.5</button>
        <button type="submit" name="size" value="46">46</button>
        <button type="submit" name="size" value="46.5">46.5</button>
        <button type="submit" name="size" value="47">47</button>
        
    </div>

        
            <button id="addToCart" type="submit" name="addToCart">
             <?php echo price();?>€
            </button>
          </form>
    </div>
</div>



    <script src="./sricpt.js"></script>
</html>


<?php 

    $idBota =  $_GET['id'];


    $servername = "localhost";
    $username = "root";
 $password = "";
 $dbname ="vanaj";

 $conn = new mysqli($servername, $username, $password, $dbname);


    function description() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "vanaj";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $idBota =  $_GET['id'];
        $sql = "SELECT popisek FROM boty WHERE idB = '$idBota'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {  
        return $row["popisek"];
        }
    }

    function price() {
        $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "vanaj";
        $conn = new mysqli($servername, $username, $password, $dbname);

        $idBota =  $_GET['id'];
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

        $idBota =  $_GET['id'];
        $sql = "SELECT shoeName FROM boty WHERE idB = '$idBota'";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
        return $row["shoeName"];
        }
    }








    //sizes
    


    /*function size(){
        $size = 0;
        if(isset($_POST['size38'])) {
        $size = 38;
        echo "size38";
    }
    if(isset($_POST['size38.5'])) {
        $size = 38.5;
    }
    if(isset($_POST['size39'])) {
        $size = 39;
    }
    if(isset($_POST['size39.5'])) {
        $size = 39.5;
    }
    if(isset($_POST['size40'])) {
        $size = 40;
    }
    if(isset($_POST['size40.5'])) {
        $size = 40.5;
    }
    if(isset($_POST['size41'])) {
        $size = 41;
    }
    if(isset($_POST['size41.5'])) {
        $size = 41.5;
    }
    if(isset($_POST['size42'])) {
        $size = 42;
    }
    if(isset($_POST['size42.5'])) {
        $size = 42.5;
    }
    if(isset($_POST['size43'])) {
        $size = 43;
    }
    if(isset($_POST['size43.5'])) {
        $size = 43.5;
    }
    if(isset($_POST['size44'])) {
        $size = 44;
    }
    if(isset($_POST['size44.5'])) {
        $size = 44.5;
    }
    if(isset($_POST['size45'])) {
        $size = 45;
    }
    if(isset($_POST['size45.5'])) {
        $size = 45.5;
    }
    if(isset($_POST['size46'])) {
        $size = 46;
    }
    if(isset($_POST['size46.5'])) {
        $size = 46.5;
    }
    if(isset($_POST['size47'])) {
        $size = 47;
    }
}*/

$size = $_POST['size'];
echo "You selected size: " . $size;

/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['size'])) {
        $size = $_POST['size'];
    }
}

//if(isset($_POST["addToCart"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "INSERT INTO kosik (idB, size) VALUES ('$idBota', '$size')";

if (mysqli_query($conn, $sql)){
    echo "New record created successfully";
} else {
    echo "Error: ". $sql. "<br>" . mysqli_error($conn);
}
$conn->close();
//} */

?>


<script>
    function setSize(size) {
        document.getElementById('size').value = size;
    }
    </script>