<?php
session_start();

?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
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


    </div>
    <div id="mainContainer">



        <div id="formContainer">
            <form action="include/signup.inc.php" method="POST" onsubmit="checkParams(event)">
                <ul>
                    <li><label for="firstname">Nume</label></li>
                    <input type="text" name="firstname" placeholder="" />

                    <li><label for="firstname">Prenume</label></li>
                    <input type="text" name="lastname" placeholder="" />

                    <li><label for="firstname">Email</label></li>
                    <input type="text" name="email" placeholder="" />

                    <li><label for="firstname">Paroloa</label></li>
                    <input type="password" name="pass" placeholder="" />

                    <li><label for="firstname">Repeta Parola</label></li>
                    <input type="password" name="passConfirm" placeholder="" />

                    <li><label for="address">Adresa</label></li>
                    <input type="text" name="address" placeholder="" />
                    <p id="errorMsg"></p>
                    <li><button class="btn" type="submit" name="submit">Submit</button></li>
                </ul>
            </form>
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

    <script src="scripts/check.js"></script>
    <script src="scripts/error.js"></script>
    <script src="scripts/homescript.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>