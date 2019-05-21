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

  // if($_SERVER["REQUEST_METHOD"] == "POST") {

      $id = mysqli_real_escape_string($conn,$_POST['id']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      

  
      $sql = "SELECT password FROM teacher WHERE id='$id'";
   //   $check = mysqli_num_rows($result);

      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);

      $name="SELECT fname FROM teacher WHERE id='$id'";
      $result1 = mysqli_query($conn,$name);
      $name1=mysqli_fetch_assoc($result1);
      $x=$name1['fname'];

    if($id=="587888888"  &&  $mypassword="123456789"){
                  header("location: http://localhost:3000/dashboard/"."Mohammad");   
    }
    else{
      if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
              echo $row['password'] . "\n";
               if ($row['password'] == ($mypassword)) { 
                    header("location: http://localhost:3001/admin/Classes/");     
            } else {
                echo "<script type='text/javascript'>
                        alert('make sure of id and pass')
                      </script>";
                     // header("location: login.html");
        }
       // echo $name1['fname'];
        }
    }

 }


mysqli_close($conn);
?>



