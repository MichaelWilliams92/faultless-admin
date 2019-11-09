<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $newHose = mysqli_real_escape_string($connect, $data->newHose);
      //$url = mysqli_real_escape_string($connect, $data->url);
      $description = mysqli_real_escape_string($connect, $data->description);
      $img = mysqli_real_escape_string($connect, $data->img);
      
      $sql = "INSERT INTO hose VALUES (?,?,?)";
 
      $stmt = mysqli_stmt_init($connect);
     if(!mysqli_stmt_prepare($stmt, $sql)){
           echo "SQL statement failed!";
      } else {
           mysqli_stmt_bind_param($stmt, "sss", $newHose, $description, $img);
           $result = mysqli_stmt_execute($stmt);
           echo "$result";
         
      }

     //  $query = "INSERT INTO hose VALUES ('$newHose', '$description', '$img')";  
     //  if(mysqli_query($connect, $query))  
     //  {  
     //       echo "1";  
     //  }  
     //  else  
     //  {  
     //       echo "0";  
     //  }  
 }  
 ?>  