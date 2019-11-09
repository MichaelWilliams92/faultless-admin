<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $username = mysqli_real_escape_string($connect, $data->username);       
      $password = mysqli_real_escape_string($connect, $data->password);         
 
           $sql = "UPDATE loginpage SET Pass_word = ? WHERE Username = ?";  
          //  if(mysqli_query($connect, $query))  
          //  {  
          //       echo 'Data Updated...';  
          //  }  
          //  else  
          //  {  
          //       echo 'Error';  
          //  }  

           $stmt = mysqli_stmt_init($connect);
           if(!mysqli_stmt_prepare($stmt, $sql)){
                 echo "SQL statement failed!";
            } else {
                 mysqli_stmt_bind_param($stmt, "ss", $password, $username);
                 mysqli_stmt_execute($stmt);
                 $result = mysqli_stmt_get_result($stmt);
                 
                 while ($row = mysqli_fetch_assoc($result)) {
                      $output[] = $row;
                 }
               
                 //echo json_encode($output);
                 if(empty($output)){
                     echo "0";
                 } else {
                     echo "1";
                 }
            }
        
 }  
 ?>  