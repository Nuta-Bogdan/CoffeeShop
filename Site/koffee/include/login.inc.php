<?php 
    include_once 'db.php';  

    session_start();

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM users WHERE email='$email' AND parola='$pass'";
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($result);

    if($rows > 0)
    {
        $_SESSION['email'] = $email;
        header("Location: /koffee");
    }
    else
    {
        header("Location: /koffee/login.php?error=User%20sau%20parola%20gresite");
    }

    
