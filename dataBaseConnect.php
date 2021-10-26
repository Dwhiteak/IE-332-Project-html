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
echo "AAAA";

$email = $_POST['email'];
$pass = $_POST['pass'];

$stmt = $conn->prepare("INSERT INTO login (email, pass)
VALUES(?, ?)");
echo "prepare";
$stmt->bind_param("ss", $email, $pass);
echo "bind";
$stmt->execute();
echo "execute";
echo "successfull";


/* $result = mysqli_query($conn,$sql); */

/* echo "Before WHile";

while($row = mysqli_fetch_assoc($result)){
    echo "Player".$row["Player"]."<br>";
}

echo "After While"; */
$stmt->close();
$conn->close();
//mysqli_close($conn);
?>