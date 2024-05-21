<!DOCTYPE html>
<html lang="cs">
<head>
     <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <title><?php echo shoeName() ?></title>
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <meta name="author" content="Jakub Váňa, Tomáš Ungr, Zdeněk Rut">
    <meta name="keywords" content="E-shop, Boty">
    <meta name="description" content="E-shop na boty">
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
        <img src="<?php echo image1() ?>" alt="Shoe 1">
        <img src="<?php echo image2() ?>" alt="Shoe 2">
        <img src="<?php echo image3() ?>" alt="Shoe 3">
    </div>
    <div class="details">
        <h1 id="shoeName"> <?php echo shoeName() ?></h1>
        <p id="shoeDescription"><?php echo description() ?></p>
        <form action="" method="post">
            <div id="sizes">
                <select name="size" class="shoe-size-dropdown">
                    <option id="m0-option">SELECT SIZE</option>
                    <option value="38">38</option>
                    <option value="38.5">38.5</option>
                    <option value="39">39</option>
                    <option value="39.5">39.5</option>
                    <option value="40">40</option>
                    <option value="40.5">40.5</option>
                    <option value="41">41</option>
                    <option value="41.5">41.5</option>
                    <option value="42">42</option>
                    <option value="42.5">42.5</option>
                    <option value="43">43</option>
                    <option value="43.5">43.5</option>
                    <option value="44">44</option>
                    <option value="44.5">44.5</option>
                    <option value="45">45</option>
                    <option value="45.5">45.5</option>
                    <option value="46">46</option>
                    <option value="46.5">46.5</option>
                    <option value="47">47</option>
                </select>

            </div>


            <button id="addToCart" type="submit" name="addToCart">
                <?php echo price(); ?>€
            </button>
        </form>
    </div>
</div>


<script src="./sricpt.js"></script>
</html>


<?php

$idBota = $_GET['id'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vanaj";

$conn = new mysqli($servername, $username, $password, $dbname);


function image1()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idBota = $_GET['id'];
    $sql = "SELECT img1 FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["img1"];
    }
}


function image2()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idBota = $_GET['id'];
    $sql = "SELECT img2 FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["img2"];
    }
}

function image3()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idBota = $_GET['id'];
    $sql = "SELECT img3 FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["img3"];
    }
}

function description()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idBota = $_GET['id'];
    $sql = "SELECT popisek FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["popisek"];
    }
}

function price()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idBota = $_GET['id'];
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

    $idBota = $_GET['id'];
    $sql = "SELECT shoeName FROM boty WHERE idB = '$idBota'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["shoeName"];
    }
}


/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['size'])) {
        $size = $_POST['size'];
    }
}*/

//
if (isset($_POST["size"])) {
    $size = $_POST["size"];
}

if (isset($_POST["addToCart"])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vanaj";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO kosik (idB, size) VALUES ('$idBota', '$size')";

    if (mysqli_query($conn, $sql)) {

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $conn->close();
}

?>

