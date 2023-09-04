<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SingUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .container{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        body{
            background-image: url("https://source.unsplash.com/collection/190727/1600x900");
            background-size: cover;
        }
    </style>
  </head>
  <body>
    <?php
        require 'partials/_nav.php'
    ?>

   
    <div class= "container" >
        <?php
            include 'partials/_login.php';
        ?>
            <h1 class = "text-center"> SingUp Here </h1>
            <form action = "/php/100_singup.php" method = "post">
                <div class="mb-6 col-md-30">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input maxlength ="11" type="text" class="form-control" id="exampleInputEmail1" name = "name" aria-describedby="emailHelp" placeholder = "Enter your Name">
                </div>
                <div class="mb-6 col-md-30">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input maxlength ="11" type="password" class="form-control" id="exampleInputPassword1" name = "pass" placeholder = "Enter your Password"> 
                </div>
                <div class="mb-6 col-md-30">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input maxlength ="11" type="password" class="form-control" id="exampleInputPassword1" name = "cpass"  placeholder = "Confirm your password"> 
                    <div id="emailHelp" class="form-text">Confirm password is same as above password.</div>

                </div>

                    <button style = "align-item: center" type="submit" class="btn btn-primary">SingUp</button>
            </form>
   
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
  </body>
</html>