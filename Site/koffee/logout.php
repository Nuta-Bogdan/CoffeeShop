<?php 
    session_start();
    $_SESSION['email'] = NULL;
    header("Location: /koffee");
?>