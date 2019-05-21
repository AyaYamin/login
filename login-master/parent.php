<?php
  $db = new mysqli("localhost", "root", "", "project_new");
  if (!$db) die("database connection error");
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  
  
  $conn = new mysqli($servername, $username, $password, "project_new");
  
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } else {
      echo "Connected successfully";
  }

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT parn_pass FROM student WHERE part_id='$id'";
      //$check = mysqli_num_rows($result);

      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      
      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['password'] . "\n";
            if ($row['password'] == ($mypassword)) {
                header("location: index.html") ; 
            } else {
              
                echo "<script type='text/javascript'>
                        alert('make sure of id and pass')
                      </script>";
                

             header("location: login.html");
            }
        }
    }

   }


mysqli_close($conn);
?>



