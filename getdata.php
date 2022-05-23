<?php

$servername = "localhost";
$username = "id11031927_arpon";
$password = "qwerty25";
$dbname = "id11031927_a_letter_from_bangladesh";
$table= "reservation";

$Destination=$_POST['destination'];
$Check_in=$_POST['datepicker'];
$Number_of_Person=$_POST['person'];
$Budgets=$_POST['budget'];
$Name=$_POST['pdetails'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Country=$_POST['country'];
$City=$_POST['city'];
$travel_requirements=$_POST['textarea'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO $table
VALUES ('$Destination', '$Check_in', '$Number_of_Person', '$Budgets', '$Name', '$Email', '$Phone', '$Country', '$City', '$travel_requirements')";


if ($conn->query($sql) == TRUE) {
    header("Location: https://a-letter-from-bangladesh.000webhostapp.com/rsrvmsg.html");
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
