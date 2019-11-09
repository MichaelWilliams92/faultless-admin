<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "testing");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $first_name = mysqli_real_escape_string($connect, $data->firstname);       
      $last_name = mysqli_real_escape_string($connect, $data->lastname);   

           $id = $data->id;  
           $sql = "UPDATE tbl_user SET first_name = ?, last_name = ? WHERE id = ?";  
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
                 mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $id);
                 $result = mysqli_stmt_execute($stmt);
                 echo "$result";
               
            }
         
        
 }  
 ?>  