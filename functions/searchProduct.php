<?php
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $ProductID = mysqli_real_escape_string($connect, $data->ProductID);
      $Username = mysqli_real_escape_string($connect, $data->Username);
      $CustomerPO = mysqli_real_escape_string($connect, $data->CustomerPO);
      $OrderNum = mysqli_real_escape_string($connect, $data->OrderNum);
      $Part = mysqli_real_escape_string($connect, $data->Part);
      $Fittings = mysqli_real_escape_string($connect, $data->Fittings);
      //$testDate = mysqli_real_escape_string($connect, $data->testDate); /////
      $TestedBy = mysqli_real_escape_string($connect, $data->TestedBy);
      $HoseType = mysqli_real_escape_string($connect, $data->HoseType);
      //$Pressure = mysqli_real_escape_string($connect, $data->Pressure);
      //$HoseDiameter = mysqli_real_escape_string($connect, $data->HoseDiameter); //
     // $HoseLength = mysqli_real_escape_string($connect, $data->HoseLength); //
     //$Temperature = mysqli_real_escape_string($connect, $data->Temperature); //
      $CRN = mysqli_real_escape_string($connect, $data->CRN);
      $InService = mysqli_real_escape_string($connect, $data->InService);
      $fromDate = mysqli_real_escape_string($connect, $data->fromDate);
      $toDate = mysqli_real_escape_string($connect, $data->toDate);

      $fromPressure = mysqli_real_escape_string($connect, $data->fromPressure);
      $toPressure = mysqli_real_escape_string($connect, $data->toPressure);
      $fromDiameter = mysqli_real_escape_string($connect, $data->fromDiameter);
      $toDiameter = mysqli_real_escape_string($connect, $data->toDiameter);  //
     $fromLength = mysqli_real_escape_string($connect, $data->fromLength); 
     $toLength = mysqli_real_escape_string($connect, $data->toLength); //
     $fromTemp = mysqli_real_escape_string($connect, $data->fromTemp); 
     $toTemp = mysqli_real_escape_string($connect, $data->toTemp);

     // $query = "SELECT * FROM product WHERE ProductID LIKE '$ProductID' AND Username LIKE '$Username' AND CustomerPO LIKE '$CustomerPO' AND OrderNum LIKE '$OrderNum' AND Part LIKE '$Part' AND Fittings LIKE '$Fittings' AND testDate LIKE '$TestDate' AND TestedBy LIKE '$TestedBy' AND HoseType LIKE '$HoseType' AND Pressure LIKE '$Pressure' AND HoseDiameter LIKE '$HoseDiameter' AND HoseLength LIKE '$HoseLength' AND Temperature LIKE '$Temperature' AND CRN LIKE '$CRN' AND InService LIKE '$InService' ";  
     $sql = "SELECT * FROM product P INNER JOIN company C ON P.Username = C.Username WHERE P.ProductID LIKE ? AND P.Username LIKE ? AND P.CustomerPO LIKE ? AND P.OrderNum LIKE ? AND P.Part LIKE ? AND P.Fittings LIKE ? AND P.TestedBy LIKE ? AND P.HoseType LIKE ? AND P.CRN LIKE ? AND P.InService LIKE ? AND testDate >= ? AND testDate <= ? AND Pressure >= ? AND Pressure <= ? AND HoseDiameter >= ? AND HoseDiameter <= ? AND HoseLength >= ? AND HoseLength <= ? AND Temperature >= ? AND Temperature <= ? ORDER BY P.testDate DESC ";
     
     //$result = mysqli_query($connect, $query);  

        // if(mysqli_num_rows($result) > 0)  
        // {  
        //     while($row = mysqli_fetch_array($result))  
        //     {  
        //             $output[] = $row;  
        //     }  
        //     echo json_encode($output);  
        // }
        
        $stmt = mysqli_stmt_init($connect);
        if(!mysqli_stmt_prepare($stmt, $sql)){
              echo "SQL statement failed!";
         } else {
              mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $ProductID, $Username, $CustomerPO, $OrderNum, $Part, $Fittings, $TestedBy, $HoseType, $CRN, $InService, $fromDate, $toDate, $fromPressure, $toPressure, $fromDiameter, $toDiameter, $fromLength, $toLength, $fromTemp, $toTemp);
              mysqli_stmt_execute($stmt);
              $result = mysqli_stmt_get_result($stmt);
              
              while ($row = mysqli_fetch_assoc($result)) {
                   $output[] = $row;
              }
            
              echo json_encode($output);
         }

 }  
 ?>