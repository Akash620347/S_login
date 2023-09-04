<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <style>
        .container{
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        body {
          background-image: url('https://source.unsplash.com/collection/190727/1600x900');
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
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "login";
       
        $conn = mysqli_connect($server, $username, $password, $database);
       
        if(!$conn)
        {
            die("Not Successful Connection".mysqli_connect_error());
        }
       
       if ($_SERVER['REQUEST_METHOD'] == "POST"){
               $name = $_POST['name'];
               $pass = $_POST['pass'];
       
              //  $alert = false;
       
                    $sql = "Select *from login where name = '$name'";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);

       
                   if($num == 1){
                       while($row = mysqli_fetch_assoc($result))
                       {
                            if(password_verify($pass, $row['pass'])){
                                $login = true;
                                session_start();
                                $_SESSION['loggedin'] = true;
                                $_SESSION['name'] = $name;

                                // This header is use to redirect any user to any page we want.
                                header("location: 100_Welcome.php");
                                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> You are logged in!!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"></span>
                                </button>
                            </div>';
                            }
                            else{
                              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Error!</strong> Invalid Credentials.
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true"></span>
                              </button>
                          </div>';
                          }
                       }
                      //  $alert = true;
                      

                  //  Now from here we are starting our session.
                      
                   }
             
                else{
                       echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                       <strong>Error!</strong> Invalid Credentials.
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true"></span>
                       </button>
                   </div>';
                   }
               
           }
    ?>
        <h1 class = "text-center"> Login Here </h1>
        <form action = "/php/100_login_project.php" method = "post">
            <div class="mb-6 col-md-30">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input maxlength = "11" type="text" class="form-control" id="exampleInputEmail1" name = "name" aria-describedby="emailHelp" placeholder = "Enter your Name">
            </div>
            <div class="mb-6 col-md-30">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input maxlength = "11" type="password" class="form-control" id="exampleInputPassword1" name = "pass" placeholder = "Enter your Password"> 
            </div>

                <button  style = "align-item: center" type="submit" class="btn btn-primary">Login</button>
        </form>
   
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
  </body>
</html>