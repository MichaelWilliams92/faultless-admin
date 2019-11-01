<?php  
 //insert.php  
//  $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
//  $data = json_decode(file_get_contents("php://input"));  

//alert("function call works!");

$img = "";

if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    $hose = $_REQUEST['hoseType'];
    $description = $_REQUEST['description'];
   // echo($file);
    print_r($hose);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
   // $fileType = $_FILES['file']['type'];

   if(empty($hose)) {
       echo 'Hose field must not be blank!';
       return;
   }

   if(empty($description)){
       echo 'Description field must not be blank!';
       return;
   }

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // print_r($file);
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
                if($fileSize < 1000000) {
                    $fileNameNew = $hose."_hose.".$fileActualExt;
                    $img = $fileNameNew;
                    
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
                    $data = json_decode(file_get_contents("php://input"));  
                   // if(count($data) > 0)  
                   // {  
                      //  $newHose = mysqli_real_escape_string($connect, $data->newHose);
                      //  $url = mysqli_real_escape_string($connect, $data->url);
                      //  $description = mysqli_real_escape_string($connect, $data->description);

                        $query = "INSERT INTO hose VALUES ('$hose', '$img', '$description')";  
                        if(mysqli_query($connect, $query))  
                        {  
                            echo "Data Inserted...";  
                        }  
                        else  
                        {  
                            echo 'Error';  
                        }  
                   // }  

                   // header("Location: index.php?uploadsuccess");
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
//echo "image uploaded fine!";

?>

