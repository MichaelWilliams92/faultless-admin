<?php
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $username = mysqli_real_escape_string($connect, $data->username);
      $test = "test";
      $sql = "INSERT INTO loginpage VALUES (?,?)";  

      $stmt = mysqli_stmt_init($connect);
      if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL statement failed!";
       } else {
            mysqli_stmt_bind_param($stmt, "ss", $username, $test);
            $result = mysqli_stmt_execute($stmt);
            echo "$result";
       }

     //  if(mysqli_query($connect, $query))  
     //  {  
     //       echo "user added successfully!";  
     //  }  
     //  else  
     //  {  
     //       echo "user not added!";  
     //  }  
 }  
 ?>