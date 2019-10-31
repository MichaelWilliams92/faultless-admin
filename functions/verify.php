<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $Username = mysqli_real_escape_string($connect, $data->username);
      $Password = mysqli_real_escape_string($connect, $data->password);
     // $query = "SELECT * FROM product WHERE ProductID LIKE '$ProductID' AND Username LIKE '$Username' AND CustomerPO LIKE '$CustomerPO' AND OrderNum LIKE '$OrderNum' AND Part LIKE '$Part' AND Fittings LIKE '$Fittings' AND testDate LIKE '$TestDate' AND TestedBy LIKE '$TestedBy' AND HoseType LIKE '$HoseType' AND Pressure LIKE '$Pressure' AND HoseDiameter LIKE '$HoseDiameter' AND HoseLength LIKE '$HoseLength' AND Temperature LIKE '$Temperature' AND CRN LIKE '$CRN' AND InService LIKE '$InService' ";  
     $query = "SELECT Username FROM loginpage WHERE Username = '$Username' AND Pass_word = '$Password'";

     $result = mysqli_query($connect, $query);  

        if(mysqli_num_rows($result) > 0)  
        {  
            while($row = mysqli_fetch_array($result))  
            {  
                    $output[] = $row;  
            }  
            echo json_encode($output);  
        }   

 }  
 ?>  