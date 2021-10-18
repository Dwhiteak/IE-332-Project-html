<?php
$servername = "mydb.itap.purdue.edu";
$username = "g1118821";
$password = "puckedUp12345";
//puckedUp12345
$dbname = "g1118821";

var_dump(function_exists('mysqli_connect'));
var_dump($severname);
var_dump($username);
var_dump($password);
var_dump($dbname);

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "Connected successfully";
mysqli_close($conn);
?>