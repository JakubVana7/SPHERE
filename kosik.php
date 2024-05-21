<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eshop-boty";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if(isset($_POST["checkout"])){
        $sql = "INSERT INTO zakaznik (jmeno, prijmeni, adresa1, adresa2, psc, mesto, stat, tel)
        VALUES ('$_POST["name"]', '$_POST["surname"]','$_POST["address1"]', '$_POST["address2"]', '$_POST["psc"]','$_POST["city"]', '$_POST["country"]','$_POST["phone"]','$_POST["kartaCislo"]','$_POST["cvv"]','$_POST["expM"]','$_POST["expY]')";


        /*$sql = "SELECT boty * FROM eshop-boty"
        $sql = "UPDATE boty SET boty " */
    }

    

    /*function getCena(){
        $sql = "SELECT cena FROM boty";
        $result = $conn->query($sql);
            
        return $row["cena"];
    }*/



    function getcena() {
        // Your function implementation here
        // For example:
        return 100;
    }

    echo getcena();
?>
