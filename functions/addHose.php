<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $newHose = mysqli_real_escape_string($connect, $data->newHose);
      $url = mysqli_real_escape_string($connect, $data->url);
      $description = mysqli_real_escape_string($connect, $data->description);

      $query = "INSERT INTO hose VALUES ('$newHose', '$url', '$description')";  
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  