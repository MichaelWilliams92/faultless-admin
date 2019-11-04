 <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  

      //$query = "INSERT INTO product VALUES ('$productID', '$PRusername', '$customerPO', '$orderNum', '$part', '$fittings', '$testDate', '$timestamp','$testedBy', '$type', '$pressure', '$diameter', '$length', '$temperature', '$crn', '$inService')";  
      $query = "SELECT COUNT(*) as P FROM product";
    //   if(mysqli_query($connect, $query))  
    //   {  
    //        echo "counted";  
    //   }  
    //   else  
    //   {  
    //        echo 'Error';  
    //   }  
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