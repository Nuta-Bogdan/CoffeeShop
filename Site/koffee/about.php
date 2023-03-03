<?php
include_once 'include/db.php';
session_start();

$currentMail = "";

if (isset($_SESSION['email'])) {
    $currentMail =  $_SESSION['email'];
}


?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>About</title>
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
                <li><a class="active" href="about.php">About</a></li>
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

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <img src="imag/story.jpg" style="width:100%">
            <div class="text">
                <h1>Lorem ipsum</h1>
                <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo omnis, vero aperiam excepturi distinctio porro quod labore facilis sit animi, ut blanditiis aliquid, vitae magnam id voluptates sapiente recusandae error?</h3>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="imag/espresso.jpg" style="width:100%">
            <div class="text">
                <h1>Lorem ipsum</h1>
                <h3>Aenean semper iaculis imperdiet. Aenean vitae dui mauris. Integer molestie quis neque at lobortis. Nunc tempor eleifend diam, at ultrices lacus porta id. Phasellus sed ante sed leo tincidunt aliquam. Curabitur vel dui nunc. Sed ligula tellus, ullamcorper eu blandit sit amet, maximus ut lectus. Nullam pulvinar risus vel bibendum finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Quisque efficitur gravida libero, a tempor risus malesuada aliquet. Nam sit amet sem neque. Etiam at nulla ante. Integer eget consequat risus, sed consectetur eros. Nullam laoreet nulla et varius aliquam. Integer pretium nulla eu elit feugiat rutrum.

                    Pellentesque euismod consequat mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra nibh sed ante scelerisque condimentum. Curabitur vestibulum ullamcorper nisl, ut luctus ipsum dapibus id. Nam venenatis ipsum nibh, id ultricies nunc laoreet id. Phasellus ullamcorper sem nec est porttitor, non accumsan nunc accumsan. Proin non tincidunt mi. Quisque tincidunt ante et lectus consectetur, sit amet tincidunt metus vulputate. Fusce malesuada ante non sollicitudin vulputate. Integer nec nisl ut mi finibus lacinia. Curabitur in orci ut lectus efficitur convallis at sit amet dui.

                    Nulla mi erat, ultricies at cursus vitae, semper ac lorem. Ut eu orci vitae tortor porttitor congue ut non odio. Donec odio dolor, hendrerit ac aliquet nec, malesuada at urna. Donec accumsan justo quis lectus pharetra feugiat. Nunc sodales rutrum pretium. Nulla sed augue et eros ullamcorper fringilla. In commodo nulla vel leo laoreet finibus. In posuere hendrerit ante, et dapibus mi imperdiet ut. Fusce convallis nulla lacus, ut tempus ligula ornare non. Sed non viverra urna. Nulla vitae dolor vel augue cursus tincidunt vitae non turpis. Aenean mauris nisl, congue in enim id, rhoncus congue lacus.</h3>
            </div>
        </div>

        <div class="mySlides fade">
            <img src="imag/machine.jpg" style="width:100%">
            <div class="text">
                <h1>Lorem ipsum</h1>
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean elementum sem elit, vel scelerisque ex tincidunt nec. Suspendisse a sodales ligula, id tempus libero. Ut molestie enim tincidunt vehicula venenatis. Suspendisse vestibulum justo vel lacinia pellentesque. Vivamus id diam ut mauris tincidunt mollis vitae sed metus. Donec pellentesque, mauris quis ornare vehicula, enim mauris lacinia dui, at rutrum ante tellus et augue. Maecenas ex mauris, lacinia maximus lacus eget, posuere condimentum risus. Vivamus pharetra magna quis malesuada malesuada. Nam dignissim lacinia faucibus. Praesent eu tortor nec leo tincidunt fringilla eu quis lorem. Quisque faucibus, urna et pellentesque gravida, nisi nisl tincidunt diam, et bibendum mauris urna facilisis elit. Cras mauris leo, fringilla in turpis at, lacinia gravida nibh. Proin maximus sed ipsum id sodales.

                    Vivamus commodo dolor non placerat facilisis. Phasellus id dui ut ipsum pharetra volutpat. Nunc in ligula convallis, fringilla mi eu, cursus quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque, lorem ut luctus dapibus, felis velit ultricies urna, id feugiat urna purus eu erat. Integer suscipit mattis nunc a malesuada. Integer elit nibh, pellentesque ut consequat nec, scelerisque ut nisl. Nam ut quam a mi luctus condimentum et vel eros. Suspendisse pharetra interdum sagittis.

                    Nunc et libero tincidunt, pretium nisi id, hendrerit diam. Quisque at tellus molestie, scelerisque purus sit amet, vulputate metus. Pellentesque vitae ante tellus. Fusce dapibus mi non massa mollis bibendum. Aenean tellus justo, posuere quis elementum quis, gravida id justo. Praesent at vehicula massa. Maecenas fermentum eleifend ex. Morbi vestibulum sem id ex accumsan vulputate. Vivamus aliquam felis ante, eget pharetra massa aliquam vitae. Curabitur vel aliquet orci. Nulla viverra, purus sit amet facilisis sagittis, velit leo ultrices felis, condimentum rutrum tellus nisi sed justo. Vivamus interdum mollis aliquam. Aliquam erat volutpat. Praesent sollicitudin, nunc ac convallis venenatis, diam metus varius ex, in scelerisque sem libero a lectus.

                    Nam porta feugiat sapien at consequat. Sed euismod vestibulum urna, at tincidunt nulla fermentum at. Ut nec libero orci. In hac habitasse platea dictumst. Sed in nulla et leo consectetur vestibulum id eu ex. Phasellus consectetur purus neque, sed euismod nibh feugiat eu. In maximus odio at sapien ornare, vel dapibus ligula sollicitudin. Etiam quam erat, sagittis a lacus a, molestie luctus tortor. Sed mattis elit ligula, eu dapibus nunc mattis eu. Mauris facilisis hendrerit risus eget ornare. Mauris aliquet dui at purus molestie, et commodo urna tempus. Morbi viverra condimentum aliquet.</h3>
            </div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
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
                <p>Adresa: Strada Mihail Corotiu, Nr 7<br>Program:<br>Luni-Vineri: 9:00 - 17:00<br>Sambata: 10:00-
                    14:00<br>Duminica: Inchis</p>

            </div>

    </footer>
    <script src="scripts/script.js"></script>

</body>