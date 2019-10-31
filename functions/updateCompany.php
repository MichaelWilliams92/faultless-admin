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
 
           $query = "UPDATE company SET CompanyName = '$CompanyName', Location = '$Location', CompanyPhone = '$CompanyPhone', Website = '$Website', DateJoined = '$DateJoined' WHERE Username = '$Username'";  
           if(mysqli_query($connect, $query))  
           {  
                echo 'Data Updated...';  
           }  
           else  
           {  
                echo 'Error';  
           }  
        
 }  
 ?>  