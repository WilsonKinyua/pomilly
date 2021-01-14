<?php

    $host     = 'localhost';
    $db       = 'pomilly';
    $user     = 'root';
    $pass     = '';

    $conn = mysqli_connect($host,$user,$pass,$db) or die($conn->error);

?>