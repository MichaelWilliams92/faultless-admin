<?php
  //insert.php  
//     $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
//     $data = json_decode(file_get_contents("php://input"));  
//    // if(count($data) > 0)  
//   //  {  
//          $Comment = mysqli_real_escape_string($connect, $data->Comment);
//          $productID = mysqli_real_escape_string($connect, $data->productID);
//          $date = date("Y-m-d");
//          //$query = "INSERT INTO comment (ProductID, Comment) VALUES ('$productID', '$Comment')";
     
//          $stmt = mysqli_prepare($connect, "INSERT INTO comment (ProductID, Comment) VALUES (?,?)");
//          mysqli_stmt_bind_param($stmt, "ss", $productID, $Comment);
//          $result = mysqli_stmt_execute($stmt);
//          echo "$result";
    
         //$query->bind_param("ss", $productID, $Comment);
     //     if(mysqli_query($connect, $query))  
     //     {  
     //         echo "Data Inserted...";  
     //     }  
     //    else  
     //     {  
     //          echo 'Error';  
     //     }  
   // }  

 
   $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
   $data = json_decode(file_get_contents("php://input"));  
   
   $Comment = mysqli_real_escape_string($connect, $data->Comment);
   $productID = mysqli_real_escape_string($connect, $data->productID);
          
   $sql = "INSERT INTO comment (ProductID, Comment) VALUES (?,?)";
 
   $stmt = mysqli_stmt_init($connect);
  if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed!";
   } else {
        mysqli_stmt_bind_param($stmt, "ss", $productID, $Comment);
        $result = mysqli_stmt_execute($stmt);
        echo "$result";
      
   }

 ?>