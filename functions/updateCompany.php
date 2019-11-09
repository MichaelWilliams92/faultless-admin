<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $CompanyName = mysqli_real_escape_string($connect, $data->CompanyName);       
      $Location = mysqli_real_escape_string($connect, $data->Location);  
      $CompanyPhone = mysqli_real_escape_string($connect, $data->CompanyPhone);       
      $Website = mysqli_real_escape_string($connect, $data->Website); 
      $DateJoined = mysqli_real_escape_string($connect, $data->DateJoined);    
      $Username = mysqli_real_escape_string($connect, $data->Username);    
 
           $sql = "UPDATE company SET CompanyName = ?, Location = ?, CompanyPhone = ?, Website = ?, DateJoined = ? WHERE Username = ?";  
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
                 mysqli_stmt_bind_param($stmt, "ssssss", $CompanyName, $Location, $CompanyPhone, $Website, $DateJoined, $Username);
                 $result = mysqli_stmt_execute($stmt);
                 echo "$result";
               
            }
         
        
 }  
 ?>  