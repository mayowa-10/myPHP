<?php
    // post gets data from a html form
    // ideally used for collecting data
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];

        echo "my username is $username and my email is $email";
    }
      // you always writh the method and action at the top of the form you are creating to specify if you are trying to get or post data
    ?>

    <html>
        <head>
            <body>
                <form method="POST" action="Post.php">
                    username : <input type="text" name="username" placeholder="username"><br><br>
                    
                    email : <input type="email" name="email" placeholder="email "><br><br>

                    <input type="submit" name="submit">

                </form>
            </body>
        </head>
    </html>

