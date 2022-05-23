<?php

$servername = "localhost";
$username = "id11031927_arpon";
$password = "qwerty25";
$dbname = "id11031927_a_letter_from_bangladesh";
$table= "admin";

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("$servername", "$username", "$password", "$dbname");
session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT Username from login where Username = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>