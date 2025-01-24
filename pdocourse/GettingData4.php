<?php
// Getting data with fetch column
// $hostname = "localhost";
// $username = "root";
// $password = "Akande123!!";
// $database = "dbms1";

// // Establish database connection

// try{
//     $conn = new PDO("mysql:hostname = $hostname; dbname = $database" ,$username, $password);

//     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     $conn -> exec("USE dbms1");


    
// }
// catch(PDOException $e){

// }

    require "conn.php";
    // called data anything i wanted

    $data = $conn -> query("SELECT * FROM countries");

    $one = $data -> fetchcolumn(0);

    echo $one;

?>