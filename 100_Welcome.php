<?php
    // This is how we check for the session to be valid or not.
    session_start();
    if(!isset($_SESSION) || $_SESSION['loggedin']!= true)
    {
        header("location: 100_login_project.php");
        exit;
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo $_SESSION['name'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .container{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        body {
        background-image: url('https://unsplash.com/photos/Jrn5PXu-xt4');
        background-repeat: no-repeat;
        }

    </style>
  </head>
  <body>
    <?php
        require 'partials/_nav.php'
    ?>

        Welcome->
    <?php
            echo $_SESSION['name']; 
    ?>  
            <p> You can logged out by clicking on this link <a href ="/php/100_logout.php"> Click Here </a> </p>

 </body>
