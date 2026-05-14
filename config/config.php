<?php 



    //host
    $host = "localhost";

    //dbname

    $dbname = "Bookstore";

    //username

    $user = "root";

    //password

    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $env = parse_ini_file(__DIR__ . '/../.env');

$stripeSecret = $env['STRIPE_SECRET_KEY'];

    

    // if($conn) {
    //     echo "worked successfully";
    // } else {
    //     echo "error in db connection";
    // }


