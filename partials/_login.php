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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];


        // $alert = false;

        $sql1 = "select * from login where name = '$name'";
        $result1 = mysqli_query($conn, $sql1);
        $numExistRow = mysqli_num_rows($result1);

        if($numExistRow > 0)
        {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Error!</strong> Username could not be same.
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true"></span>
                 </button>
             </div>';
        }

        else {
                    if($pass == $cpass)
                    {
                        // By this way we can store our password in the database in secure manner.
                        $hash = password_hash($pass, PASSWORD_DEFAULT);
                        $hash1 = password_hash($cpass,PASSWORD_DEFAULT );
                        $sql = "INSERT INTO `login` (`name`, `pass`, `cpass`, `date`) VALUES ('$name', '$hash', '$hash1', current_timestamp())";

                        $result = mysqli_query($conn, $sql);



                        if($result){
                            
                            // $alert = true;
                            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> You are succesfully singed up!!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"></span>
                            </button>
                        </div>';
                        }
                    }
                
                
                    else{
                            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error!</strong> Passwords do not match.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"></span>
                            </button>
                        </div>';
                        }          
            }   
   
 }
?>