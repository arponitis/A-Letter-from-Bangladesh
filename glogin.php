<?php
   ob_start();
   session_start();
?>
         
         <?php
         $servername = "localhost";
         $username = "id11031927_arpon";
         $password = "qwerty25";
         $dbname = "id11031927_a_letter_from_bangladesh";
         $table= "signup";

         // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
            
            $username='';
            $password='';



            $sql = "SELECT Username, Password FROM signup";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $username=$row["Username"];
                $password=$row["Password"];
            
               if ($_POST['username'] == $username && 
                  $_POST['password'] == $password) {
                  

                     header("Location: https://a-letter-from-bangladesh.000webhostapp.com/index.html");
               }
                  else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
               }
            }

           
        } $conn->close();
         ?>
     