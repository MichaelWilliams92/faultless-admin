<?php  
 //select dashboard collapseables 
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 $productID = mysqli_real_escape_string($connect, $data->productID); 
//$id_num = mysqli_real_escape_string($connect, $data->id); 
 //$id_num = mysqli_real_escape_string($data->id); 

// $idd = mysqli_real_escape_string($connect, 'ID432223');

 $output = array();  
 
 $query = "SELECT * FROM comment WHERE ProductID = '$productID' ORDER BY DateAdded ASC";  
 //fix this into a join
 //$query = "SELECT * FROM product";  
 $result = mysqli_query($connect, $query);  

  if(mysqli_num_rows($result) > 0)  
  {  
       while($row = mysqli_fetch_array($result))  
       {  
            $output[] = $row;  
       }  
       echo json_encode($output);  
  }  
 ?> 