<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $username = mysqli_real_escape_string($connect, $data->username);       
      $password = mysqli_real_escape_string($connect, $data->password);         
 
           $query = "UPDATE loginpage SET Pass_word = '$password' WHERE Username='$username'";  
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