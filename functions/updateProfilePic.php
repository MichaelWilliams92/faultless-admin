<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $Username = mysqli_real_escape_string($connect, $data->Username); 
      $Pic = mysqli_real_escape_string($connect, $data->Pic);           
 
           $query = "UPDATE company SET Pic = '$Pic' WHERE Username = '$Username'";  
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