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
 
           $query = "UPDATE company SET FirstName = '$FirstName', LastName = '$LastName', PersonalPhone = '$PersonalPhone', Ext = '$Ext', Email = '$Email' WHERE Username = 'ID432223'";  
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