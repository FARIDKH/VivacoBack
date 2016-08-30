<!DOCTYPE html>
<html>
    <head>
        <title>PHP - ADMIN PANEL</title>
    </head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <body>
       <div class="container">
            <h1>PHP CRUD GRID</h1>
            <button class="alert alert-danger"><a href="about/about.php">ABOUT</a></button>
            <button class="alert alert-success"><a href="lorem/lorem.php">LOREM</a></button>
            <button class="alert alert-warning"><a href="features/feature.php">FEATURES</a></button>
            <button class="alert alert-danger"><a href="clients/client.php">CLIENTS</a></button>
                <?php

                session_start();


               if(!$_SESSION['login'] == true){
                   header('Location:login.php');
               } ?>




            <BUTTON class="alert alert-success pull-right"><a href='logout.php'>LOGOUT</a></BUTTON>
            <BUTTON class="alert alert-warning pull-right"><a href='../index.php'>BACK TO INDEX.PHP</a></BUTTON>

        </div>
    </body>
</html>
