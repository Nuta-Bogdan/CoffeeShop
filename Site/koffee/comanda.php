<?php 
    include_once 'include/db.php';  

    session_start();

    $email = $_SESSION['email'];
    $sql = "SELECT idUser FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $id = mysqli_fetch_assoc($result)['idUser'];

    $text = $_POST['text'];

    $sqlFinal = "INSERT INTO comanda (idUser, produse) VALUES($id, '$text')";
    mysqli_query($conn, $sqlFinal);

    header("Location: /koffee/index.php");





    
