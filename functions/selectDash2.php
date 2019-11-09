<?php  
 //select dashboard collapseables 
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 $name = mysqli_real_escape_string($connect, $data->name); 
 //$id_num = mysqli_real_escape_string($data->id); 

// $idd = mysqli_real_escape_string($connect, 'ID432223');

//select Upcoming inspections for External account

 $output = array();  
 $sql = "SELECT * FROM product as P INNER JOIN company as C ON P.Username = C.Username WHERE P.Username = ? ORDER BY testDate DESC";  
 //fix this into a join
 //$query = "SELECT * FROM product";  

//  $stmt = mysqli_stmt_init($connect);
//  if(!mysqli_stmt_prepare($stmt, $sql)){
//        echo "SQL statement failed!";
//   } else {
//        mysqli_stmt_bind_param($stmt, "s", $name)
//       $result = mysqli_stmt_execute($stmt);
       //$result = mysqli_stmt_get_results($stmt);
      // $row = mysqli_stmt_fetch($stmt);
      // echo "works up to this point";

     //   while ($row = mysqli_fetch_assoc($result)){
     //        $output[] = $row;
     //   }

     //   echo json_encode($output);   
     
 // }

  $stmt = mysqli_stmt_init($connect);
  if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "SQL statement failed!";
   } else {
        mysqli_stmt_bind_param($stmt, "s", $name);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        
        while ($row = mysqli_fetch_assoc($result)) {
             $output[] = $row;
        }
      
        echo json_encode($output);
   }
//



//  $result = mysqli_query($connect, $query);  

//   if(mysqli_num_rows($result) > 0)  
//   {  
//        while($row = mysqli_fetch_array($result))  
//        {  
//             $output[] = $row;  
//        }  
//        echo json_encode($output);  
//   }  
 ?> 