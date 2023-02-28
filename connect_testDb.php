<?php

// $con=new PDO("mysql:host=$servername;dbname=test_db",$username,$password);
// $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$con = mysqli_connect($_ENV["DB_HOSTNAME"], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"], $_ENV["DB_PORT"]);
    //echo 'connected';
