<?php
    session_start();
    $_SESSION['username'] = "salami123";
    $_SESSION['age'] = 40;

    echo $_SESSION['username'] , " age is " , $_SESSION['age'];

    echo "<br>";

    echo "it is now set";
?>