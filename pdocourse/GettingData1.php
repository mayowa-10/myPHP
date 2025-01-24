<?php
    // Getting data with Query and Fetch 1
     // Try and catch errors
     try{
        $host = "localhost";
        $dbname = "dbms1";
        $user = "root";
        $password = "Akande123!!";

        
         $conn = new PDO("mysql:host = $host; dbname = $dbname","$user","$password");
         // writing the set attribute

         $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         // selecting the database
         $conn -> exec("USE dbms1");

        //  // creating the sql statement

        //  $rows =  $conn -> query("SELECT country_name FROM countries");

        //  while($row = $rows -> fetch()){
        //           echo $row['country_name'] . "<br>";
        //  }

    }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();

            // to kill the connection
          //  die("db error");

    }

    // creating the sql statement

    $rows =  $conn -> query("SELECT country_id FROM countries");

    while($row = $rows -> fetch()){
        echo $row['country_id'] . "<br>";
    }
?>
