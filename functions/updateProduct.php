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
 
           $query = "UPDATE product SET CustomerPO = '$PO', testDate = '$testDate', TestedBy = '$tester', InService = '$inService' WHERE ProductID = '$ProductID'";  
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