<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $Username = mysqli_real_escape_string($connect, $data->Username); 
      $Pic = mysqli_real_escape_string($connect, $data->Pic);           
 
           $sql = "UPDATE company SET Pic = ? WHERE Username = ?";  
           if(mysqli_query($connect, $query))  
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
                 mysqli_stmt_bind_param($stmt, "ss", $Pic, $Username);
                 $result = mysqli_stmt_execute($stmt);
                 echo "$result";
               
            }
        
 }  
 ?>  