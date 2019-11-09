<?php  
 //update.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $ProductID = mysqli_real_escape_string($connect, $data->ProductID); 
      $PO = mysqli_real_escape_string($connect, $data->PO);       
      $testDate = mysqli_real_escape_string($connect, $data->testDate);  
      $tester = mysqli_real_escape_string($connect, $data->tester);       
      $inService = mysqli_real_escape_string($connect, $data->inService);  
 
           $sql = "UPDATE product SET CustomerPO = ?, testDate = ?, TestedBy = ?, InService = ? WHERE ProductID = ?";  
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
                 mysqli_stmt_bind_param($stmt, "sssss", $PO, $testDate, $tester, $inService, $ProductID);
                 $result = mysqli_stmt_execute($stmt);
                 echo "$result";
               
            }
        
 }  
 ?>  