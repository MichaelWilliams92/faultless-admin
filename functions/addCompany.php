<?php
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $username = mysqli_real_escape_string($connect, $data->username);
      $companyName = mysqli_real_escape_string($connect, $data->companyName);
      $location = mysqli_real_escape_string($connect, $data->location);
      $firstName = mysqli_real_escape_string($connect, $data->firstName);
      $lastName = mysqli_real_escape_string($connect, $data->lastName);
      $email = mysqli_real_escape_string($connect, $data->email);
      $phoneNumber = mysqli_real_escape_string($connect, $data->phoneNumber);
      $Ext = mysqli_real_escape_string($connect, $data->Ext);
      //if(empty($Ext)){$Ext = 0};
      $CompanyNumber = mysqli_real_escape_string($connect, $data->CompanyNumber);
      $hoseNum = "0";
      $website = mysqli_real_escape_string($connect, $data->website);
      $img = mysqli_real_escape_string($connect, $data->img);
      $date = date("Y-m-d");

      if($Ext == ""){$Ext = "0";}
      

      $sql = "INSERT INTO company VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)";  
     //  if(mysqli_query($connect, $query))  
     //  {  
     //       echo "1";  
     //  }  
     //  else  
     //  {  
     //       echo "0";  
     //  }  

      $stmt = mysqli_stmt_init($connect);
      if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "SQL statement failed!";
       } else {
            mysqli_stmt_bind_param($stmt, "sssssssssssss", $username, $companyName, $location, $firstName, $lastName, $email, $phoneNumber, $Ext, $CompanyNumber, $hoseNum, $website, $img, $date);
            $result = mysqli_stmt_execute($stmt);
            echo "$result";
          
       }
 }  
 ?>