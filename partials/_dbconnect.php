<?php
$server = "localhost";
$name = "root";
$password = "";
$database = "amskota";


$conn = mysqli_connect($server, $name, $password, $database);
if (!$conn){
//     echo "Success";
// }
// else{
    die("Error".mysqli_connect_error());
}

?>