
<?php
    // connedting to the database
    // four main variables to connect to the database are : servername, username, password, database name

    // // servername or host
    // $host = "localhost";
    // //database username
    // $dbname = "blogpost";
    // // username
    // $user = "root";
    // // password
    // $password = "Akande123!!";

    // // create a connection to the database
    // // instantiate the pdo` class
    // $conn = new PDO("mysql:host = $host; dbname = $dbname","$user","$password");

    // // check if the connection is successful
    // if ($conn == true){
    //     echo "Connection successful database is working fine ";
    // }
    // else{
    //     echo "Connection failed check it out";
    // }
    
    // Try and catch errors
    try{
        $host = "localhost";
        $dbname = "dbms1";
        $user = "root";
        $password = "Akande123!!";

        
         $conn = new PDO("mysql:host = $host; dbname = $dbname","$user","$password");
         // writing the set attribute

         $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();

            // to kill the connection
          //  die("db error");

    }
?>
