<?php
    session_start()
?>



<html>
    <head></head>
    <body>
        <h3><?php echo $_SESSION['username'] , " age is " , $_SESSION['age']," and my favorite color is ", $_SESSION['favColor'] ; ?>
    </body>
</html>