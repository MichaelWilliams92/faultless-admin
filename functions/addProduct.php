<?php
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $productID = mysqli_real_escape_string($connect, $data->productID);
      $PRusername = mysqli_real_escape_string($connect, $data->PRusername);
      $customerPO = mysqli_real_escape_string($connect, $data->customerPO);
      $orderNum = mysqli_real_escape_string($connect, $data->orderNum);
      $part = mysqli_real_escape_string($connect, $data->part);
      $fittings = mysqli_real_escape_string($connect, $data->fittings);
      $testDate = mysqli_real_escape_string($connect, $data->testDate);
      $testedBy = mysqli_real_escape_string($connect, $data->testedBy);
      $type = mysqli_real_escape_string($connect, $data->type);
      $pressure = mysqli_real_escape_string($connect, $data->pressure);
      $diameter = mysqli_real_escape_string($connect, $data->diameter);
      $length = mysqli_real_escape_string($connect, $data->length);
      $temperature = mysqli_real_escape_string($connect, $data->temperature);
      $crn = mysqli_real_escape_string($connect, $data->crn);
      $inService = mysqli_real_escape_string($connect, $data->inService);
      $timestamp = date("Y-m-d H:i:s");
      $timestamp = mysqli_real_escape_string($connect, $timestamp);

     //  echo $productID;
     //  echo $PRusername;
     //  echo $customerPO;
     //  echo $orderNum;
     //  echo $part;
     //  echo $fittings;
     //  echo $testDate;
     //  echo $testedBy;
     //  echo $type;
     //  echo $pressure;
     //  echo $diameter;
     //  echo $length;
     //  echo $temperature;
     //  echo $crn;
     //  echo $inService;
     //  echo $timestamp;

     $sql = "INSERT INTO product VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
 
     $stmt = mysqli_stmt_init($connect);
    if(!mysqli_stmt_prepare($stmt, $sql)){
          echo "SQL statement failed!";
     } else {
          mysqli_stmt_bind_param($stmt, "ssssssssssssssss", $productID, $PRusername, $customerPO, $orderNum, $part, $fittings, $testDate, $timestamp, $testedBy, $type, $pressure, $diameter, $length, $temperature, $crn, $inService );
          $result = mysqli_stmt_execute($stmt);
          echo "$result";
        
     }

     //  $query = "INSERT INTO product VALUES ('$productID', '$PRusername', '$customerPO', '$orderNum', '$part', '$fittings', '$testDate', '$timestamp','$testedBy', '$type', '$pressure', '$diameter', '$length', '$temperature', '$crn', '$inService')";  
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