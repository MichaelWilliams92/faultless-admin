<?php  
 //select dashboard collapseables 
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 $name = mysqli_real_escape_string($connect, $data->name); 
 //$id_num = mysqli_real_escape_string($data->id); 

// $idd = mysqli_real_escape_string($connect, 'ID432223');

//select Upcoming inspections for External account

 $output = array();  
 $query = "SELECT * FROM product as P INNER JOIN company as C ON P.Username = C.Username WHERE P.Username = '$name' ORDER BY testDate DESC";  
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