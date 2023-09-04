<h1> 
    Connection To Database.
</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db";

$conn = mysqli_connect($servername, $username, $password, $database);


// This is for checking whether the connection is succesfully created or not.


if(!$conn)
{
    die("<br>Connection was not succesfull".mysql_connect_error());
}
else
echo "<br>Connection was succesfull";


?>