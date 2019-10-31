+ <?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $Comment = mysqli_real_escape_string($connect, $data->Comment);
      $productID = mysqli_real_escape_string($connect, $data->productID);

      $query = "INSERT INTO comment (ProductID, Comment) VALUES ('$productID', '$Comment')";
      if(mysqli_query($connect, $query))  
      {  
           echo "Data Inserted...";  
      }  
      else  
      {  
           echo 'Error';  
      }  
 }  
 ?>  