<?php
 //select dashboard collapseables 
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
//$id_num = mysqli_real_escape_string($connect, $data->id); 
$productID = mysqli_real_escape_string($connect, $data->productID); 
 //$id_num = mysqli_real_escape_string($data->id); 

// $idd = mysqli_real_escape_string($connect, 'ID432223');

 $output = array();  
 $sql = "SELECT * FROM product WHERE ProductID = ?";
 
  //Username='$id_num' GROUP BY ProductID";  
 //$query = "SELECT * FROM product";  
 //$result = mysqli_query($connect, $query);  

  // if(mysqli_num_rows($result) > 0)  
  // {  
  //   echo "1";
  // }  else {
  //     echo "0";
  // }

  //maybe not adding because type is wrong? maybe blob?
  $stmt = mysqli_stmt_init($connect);
  if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed!";
   } else {
        mysqli_stmt_bind_param($stmt, "s", $productID);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        while ($row = mysqli_fetch_assoc($result)) {
             $output[] = $row;
        }
      
        //echo json_encode($output);
        if(empty($output)){
            echo "0";
        } else {
            echo "1";
        }
   }
 ?>