<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $FirstName = mysqli_real_escape_string($connect, $data->FirstName);       
      $LastName = mysqli_real_escape_string($connect, $data->LastName);  
      $PersonalPhone = mysqli_real_escape_string($connect, $data->PersonalPhone);       
      $Ext = mysqli_real_escape_string($connect, $data->Ext); 
      $Email = mysqli_real_escape_string($connect, $data->Email);      
      $id = mysqli_real_escape_string($connect, $data->id);      
 
           $sql = "UPDATE company SET FirstName = ?, LastName = ?, PersonalPhone = ?, Ext = ?, Email = ? WHERE Username = '$id'";  
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
                 mysqli_stmt_bind_param($stmt, "sssss", $FirstName, $LastName, $PersonalPhone, $Ext, $Email);
                 $result = mysqli_stmt_execute($stmt);
                 echo "$result";
               
            }
         
        
 }  
 ?>  