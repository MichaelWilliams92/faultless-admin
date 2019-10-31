+ <?php  
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
      $CompanyNumber = mysqli_real_escape_string($connect, $data->CompanyNumber);
      $website = mysqli_real_escape_string($connect, $data->website);
      $pic = mysqli_real_escape_string($connect, $data->pic);

      $query = "INSERT INTO company VALUES ('$username', '$companyName', '$location', '$firstName', '$lastName', '$email', '$phoneNumber', '0', '$Ext', '$CompanyPhone' '$website', '$pic', '30/09/2019')";  
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