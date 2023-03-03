<?php 
    include_once 'db.php';  

    session_start();

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['passConfirm'];
    $address = $_POST['address'];

    if(empty($firstname) or empty($lastname) or empty($email) or empty($pass) or empty($pass2) or empty($address))
    {
        header("Location: /koffee/signup.php?error=Completati%20toate%20campurile");
        return;
    }

    if($pass != $pass2)
    {
        header("Location: /koffee/signup.php?error=Parolele%20nu%20corespund");
        return;
    }

    $checkSql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $checkSql);
    $rows = mysqli_num_rows($result);

    if($rows > 0)
    {
        header("Location: /koffee/signup.php?error=Acest%20email%20exista%20deja");
        return;
    }
    else
    {
        $sql = "INSERT INTO users(nume, prenume, email, parola, adresa) VALUES('$firstname', '$lastname', '$email', '$pass', '$address')";
        mysqli_query($conn, $sql);
        $_SESSION['email'] = $email;
        header("Location: /koffee");
    }

    
