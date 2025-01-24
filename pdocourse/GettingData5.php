    <?php


    // try{
    //     $host = "localhost";
    //     $dbname = "blogpost";
    //     $user = "root";
    //     $password = "Akande123!!";

        
    //     $conn = new PDO("mysql:host = $host; dbname = $dbname","$user","$password");
    //     // writing the set attribute

    //     $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // }
    //     catch(PDOException $e){
    //         echo "Connection failed: " . $e->getMessage();

    //         // to kill the connection
    //     //  die("db error");

    // }
    //     // getting data using fetchAll
    //     require_once "conn.php";

    //     try {
    //         $data = $conn->query("SELECT * FROM countries");
    //         $all = $data->fetchAll(PDO::FETCH_ASSOC); 
        
    //         echo "<pre>";
    //         print_r($all); 
    //         echo "</pre>";
        
    //     } catch(PDOException $e) {
    //         echo "Query execution failed: " . $e->getMessage();
    //         die("DB Error"); // Terminate script execution
    //     }
        
        

        try {
            $host = "localhost";
            $dbname = "dbms1";
            $user = "root";
            $password = "Akande123!!";
        
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die("DB Error");
        }
        
        try {
            $data = $conn->query("SELECT * FROM countries");
            $all = $data->fetchAll(PDO::FETCH_ASSOC); 
        
            echo "<pre>";
            print_r($all); 
            echo "</pre>";
        
        } catch(PDOException $e) {
            echo "Query execution failed: " . $e->getMessage();
            die("DB Error");
        }
        
        $conn = null;
        
        

    ?>