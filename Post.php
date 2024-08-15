<?php
    // post gets data from a html form
    // ideally used for collecting data
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];

        echo "my username is $username and my email is $email";
    }
    ?>
    <html>
        <head>
            <body>
                <form method="POST" action="Post.php">
                    username : <input type="text" name="username"><br>
                    
                    email : <input type="email" name="email"><br>

                    <input type="submit" name="submit">

                </form>
            </body>
        </head>
    </html>

