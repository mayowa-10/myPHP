<?php
   

        if(isset($_GET['lang']) AND isset($_GET['course'])){
            $get = $_GET['lang'];
            $company = $_GET['course'];
            echo "my fav language is $get and my comapny name is $company";
        }
    ?>
    <html>
        <head>
            <body>
                
                <a href="Post.php?lang=php&course=webcoding">get link</a>
            </body>
        </head>
    </html>

