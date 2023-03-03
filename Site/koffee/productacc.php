<?php
include_once 'include/db.php';
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM accesorii WHERE idProdus=$id";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

$currentMail = "";

if (isset($_SESSION['email'])) {
    $currentMail =  $_SESSION['email'];
}


$row = mysqli_fetch_assoc($result);

$nume = $row['nume'];
$desc = $row['descriere'];
$img = $row['imagine'];
?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    echo "<title>$nume</title>";
    ?>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div id="header">
        <img src="imag/logo.png">
    </div>
    <div id="menu">
        <div id="menul">
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <button class="dropbtn">Shop</button>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="cafea.php">Cafea</a></li>
                            <li><a href="accesorii.php">Accesorii</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="about.php">About</a></li>
            </ul>
        </div>
        <div id="rightMenu">
            <?php
            if (!isset($_SESSION['email'])) {
                echo "<a href='/koffee/signup.php'>Sign up</a> <a href='/koffee/login.php'>Log in</a>";
            } else {
                echo "<p id='username'>$currentMail</p> <a href='/koffee/cart.php'>Cart<p id='cartItems'>&num</p></a> <a href='/koffee/logout.php'>Log out</a>";
            }
            ?>
        </div>


    </div>
    <div id="productContainer">
        <div id="imgContainer">
            <?php
            echo "<img src='/koffee/imag/$img'>";
            ?>

        </div>
        <div id="infoContainer">
            <?php

            echo "<p id='infoTitle'>$nume</p>";
            echo "<p id='infoDesc'>$desc</p>";
            ?>



        </div>
        <div id="comandaContainer">
            <?php
            if (isset($_SESSION['email'])) {
                echo "<button id='comanda' data-id='$id' onclick='increaseCart(this)'}>Adauga in cos</button>";
            } else {
                echo "<a href='/koffee/login.php' id='comanda'}>Log in</a>";
            }
            ?>
        </div>
    </div>


    </div>
    <footer>
        <div class="grid-container">
            <div class="item1">
                <p>Contact:<br>Telefon: 0712345678<br>Email: thecoffee@shop.ro</p>
            </div>
            <div class="item2">
                <p>Cofffe Media Holdings LTD. Inc. &#169;&#174;&#8482;</p>
            </div>
            <div class="item3">
                <p>Adresa: Strada Mihail Corotiu, Nr 7<br>Program:<br>Luni-Vineri: 9:00 - 17:00<br>Sambata: 10:00- 14:00<br>Duminica: Inchis</p>

            </div>

    </footer>
    <script src="scripts/homescript.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>