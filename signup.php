<?php

$servername = "localhost";
$username = "id11031927_arpon";
$password = "qwerty25";
$dbname = "id11031927_a_letter_from_bangladesh";
$table= "signup";

$Name=$_POST['name'];
$Institution=$_POST['institution'];
$Phone=$_POST['phone'];
$Age=$_POST['age'];
$Address=$_POST['address'];
$Email=$_POST['email'];
$Birth=$_POST['birth'];
$Username=$_POST['username'];
$Password=$_POST['password'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $table
VALUES ('$Name', '$Institution', '$Phone', '$Age', '$Address', '$Email', '$Birth', '$Username', '$Password')";


if ($conn->query($sql) == TRUE) {
    header("Location: https://a-letter-from-bangladesh.000webhostapp.com/rsrvmsg.html");
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
