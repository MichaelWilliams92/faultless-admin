 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "testing");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $first_name = mysqli_real_escape_string($connect, $data->firstname);       
      $last_name = mysqli_real_escape_string($connect, $data->lastname);  
      $sql = "INSERT INTO tbl_user(first_name, last_name) VALUES (?,?)";  


      $stmt = mysqli_stmt_init($connect);
      if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL statement failed!";
       } else {
            mysqli_stmt_bind_param($stmt, "ss", $first_name, $last_name);
            $result = mysqli_stmt_execute($stmt);
            echo "$result";
          
       }

     //  if(mysqli_query($connect, $query))  
     //  {  
     //       echo "Data Inserted...";  
     //  }  
     //  else  
     //  {  
     //       echo 'Error';  
     //  }  
 }  
 ?>  