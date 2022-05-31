<?php

$servername = "localhost";
$username ="root";
$password = "";
$database = "form";

$conn = mysqli_connect( $servername , $username, $password, $database);

if($conn) {
    echo "successfully connected to database <br>";
}
else{
    die("cannot connect to database" .mysqli_connect_error());
}

?>