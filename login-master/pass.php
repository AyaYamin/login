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

include('pass1.php');
  

  function generatePassword() {
     $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
     $count = mb_strlen($chars);
 
     for ($i = 0, $result = ''; $i < 8; $i++) {
         $index = rand(0, $count - 1);
         $result .= mb_substr($chars, $index, 1);
     }
     return $result;
 }

    $id = mysqli_real_escape_string($conn,$_POST['id']);
    $pass=generatePassword();
    $pass_e=SHA1($pass);
    echo $pass."<br>";
     $sql="UPDATE student SET password='$pass_e' where id='$id'";
    echo "<br>";
    echo $sql;
    if(mysqli_query($conn, $sql)){
        echo "<br>";
        echo "Records updated successfully.";
        echo "<br>";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        echo "<br>";
    }


header("location: pass1.php?password=+$pass");

mysqli_close($conn);
?>



