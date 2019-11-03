<?php  
 //insert.php  
//  $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
//  $data = json_decode(file_get_contents("php://input"));  

//alert("function call works!");

//$img = "";

if(isset($_POST['submit2'])){
    $file = $_FILES['file2'];
    $Username = $_REQUEST['Username'];
    $CompanyName= $_REQUEST['CompanyName'];
    $location = $_REQUEST['Location'];

    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $ext = $_REQUEST['ext'];
    $companyPhone = $_REQUEST['companyPhone'];
    $website = $_REQUEST['website'];
    $date = date("Y-m-d");

    if(empty($ext)){
        $ext = 0;
    }

    //  print_r($Username);
    //  print_r($CompanyName);
    //  print_r($location);
    // print_r($file);
    
    // print_r($firstName);
    // print_r($lastName);
    // print_r($email);
    // print_r($phone);
    // print_r($ext);
    // print_r($companyPhone);
    // print_r($website);
    // print_r($date);


   // echo($file);
   // print_r($hose);
    $fileName = $_FILES['file2']['name'];
    $fileTmpName = $_FILES['file2']['tmp_name'];
    $fileSize = $_FILES['file2']['size'];
    $fileError = $_FILES['file2']['error'];
   // $fileType = $_FILES['file']['type'];

  // print_r($file);

    if(empty($Username)) {
       echo 'User name must not be blank!';
       return;
    }

    if(empty($CompanyName)){
        echo 'Company name field must not be blank!';
        return;
    }

    if(empty($location)){
        echo 'location field must not be blank!';
        return;
    }

   // print_r($fileName);
    if(empty($fileName)){
        $img = "Profile_Default.jpg";
       // echo $img;
    } else{
       // echo 'File provided';
    

     $fileExt = explode('.', $fileName);
     $fileActualExt = strtolower(end($fileExt));
    // // print_r($file);
     $allowed = array('jpg', 'jpeg', 'png');

     if(in_array($fileActualExt, $allowed)) {
         if($fileError === 0) {
                 if($fileSize < 1000000) {
                     $fileNameNew = "Profile_".$Username.".".$fileActualExt;

                          $img = $fileNameNew;
                          
                     $fileDestination = 'uploads/'.$fileNameNew;
                     move_uploaded_file($fileTmpName, $fileDestination);
    //                 //echo "upload successful"; 

    //                  $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
    //                  $data = json_decode(file_get_contents("php://input"));  

    //                  $query = "INSERT INTO company VALUES ('$Username', '$CompanyName', '$location', '$firstName', '$lastName', '$email', '$phone', '$ext', '$companyPhone', '1', '$website', '$img', '$date')";  
    //                  if(mysqli_query($connect, $query))  
    //                  {  
    //                       echo "Data Inserted...";  
    //                  }  
    //                  else  
    //                  {  
    //                       echo 'Error';  
    //                  }  

    //                 //if(count($data) > 0)  
    //                // {  
    //                   //  $newHose = mysqli_real_escape_string($connect, $data->newHose);
    //                   //  $url = mysqli_real_escape_string($connect, $data->url);
    //                   //  $description = mysqli_real_escape_string($connect, $data->description);

    //                     // $query = "INSERT INTO hose VALUES ('$hose', '$img', '$description')";  
    //                     // if(mysqli_query($connect, $query))  
    //                     // {  
    //                     //     echo "Data Inserted...";  
    //                     // }  
    //                     // else  
    //                     // {  
    //                     //     echo 'Error';  
    //                     // }  
    //                // }  

    //                // header("Location: index.php?uploadsuccess");
                 } else {
                     echo "Your file is too big!";
                 }
         } else {
             echo "There was an error uploading your file!";
         }

     } else {
         echo "You cannot upload files of this type!";
     }
    }

                      $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
                      $data = json_decode(file_get_contents("php://input"));  

                         $Username = mysqli_real_escape_string($connect, $Username);
                         $companyName = mysqli_real_escape_string($connect, $companyName);
                         $location = mysqli_real_escape_string($connect, $location);
                         $firstName = mysqli_real_escape_string($connect, $firstName);
                         $lastName = mysqli_real_escape_string($connect, $lastName);
                         $email = mysqli_real_escape_string($connect, $email);
                         $phone = mysqli_real_escape_string($connect, $phone);
                         //$ext = mysqli_real_escape_string($connect, $ext);
                         $companyPhone = mysqli_real_escape_string($connect, $companyPhone);
                         $website = mysqli_real_escape_string($connect, $website);
                         $date = mysqli_real_escape_string($connect, $date);
                         $img = mysqli_real_escape_string($connect, $img);


                      $query = "INSERT INTO company VALUES ('$Username', '$CompanyName', '$location', '$firstName', '$lastName', '$email', '$phone', '$ext', '$companyPhone', '1', '$website', '$img', '$date')";  
                      if(mysqli_query($connect, $query))  
                      {  
                           echo "Data Inserted...";  
                      }  
                      else  
                      {  
                           echo 'Error';  
                      } 
}
//echo "image uploaded fine!";

?>

