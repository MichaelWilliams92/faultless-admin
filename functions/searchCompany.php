<?php  
 //insert.php  
 $connect = mysqli_connect("localhost", "root", "20152maW", "Faultless");  
 $data = json_decode(file_get_contents("php://input"));  
 if(count($data) > 0)  
 {  
      $CompanyName = mysqli_real_escape_string($connect, $data->CompanyName);
      $Username = mysqli_real_escape_string($connect, $data->Username);
      $Location = mysqli_real_escape_string($connect, $data->Location);
      $FirstName = mysqli_real_escape_string($connect, $data->FirstName);
      $LastName = mysqli_real_escape_string($connect, $data->LastName);
      $Email = mysqli_real_escape_string($connect, $data->Email);
      $PersonalPhone = mysqli_real_escape_string($connect, $data->PersonalPhone); /////
      $Ext = mysqli_real_escape_string($connect, $data->Ext);
      $CompanyPhone = mysqli_real_escape_string($connect, $data->CompanyPhone);
      $NumberOfHoses = mysqli_real_escape_string($connect, $data->NumberOfHoses);
      $Website = mysqli_real_escape_string($connect, $data->Website); //
      $fromDate = mysqli_real_escape_string($connect, $data->fromDate); //
      $toDate = mysqli_real_escape_string($connect, $data->toDate); //
      //$DateJoined = mysqli_real_escape_string($connect, $data->DateJoined); //

     // $query = "SELECT * FROM product WHERE ProductID LIKE '$ProductID' AND Username LIKE '$Username' AND CustomerPO LIKE '$CustomerPO' AND OrderNum LIKE '$OrderNum' AND Part LIKE '$Part' AND Fittings LIKE '$Fittings' AND testDate LIKE '$TestDate' AND TestedBy LIKE '$TestedBy' AND HoseType LIKE '$HoseType' AND Pressure LIKE '$Pressure' AND HoseDiameter LIKE '$HoseDiameter' AND HoseLength LIKE '$HoseLength' AND Temperature LIKE '$Temperature' AND CRN LIKE '$CRN' AND InService LIKE '$InService' ";  
     //$query = "SELECT * FROM product WHERE ProductID LIKE '$ProductID' AND Username LIKE '$Username' AND CustomerPO LIKE '$CustomerPO' AND OrderNum LIKE '$OrderNum' AND Part LIKE '$Part' AND Fittings LIKE '$Fittings' AND testDate LIKE '$testDate' AND TestedBy LIKE '$TestedBy' AND HoseType LIKE '$HoseType' AND Pressure LIKE '$Pressure' AND HoseDiameter LIKE '$HoseDiameter' AND HoseLength LIKE '$HoseLength' AND Temperature LIKE '$Temperature' AND CRN LIKE '$CRN' AND InService LIKE '$InService' ";
     $query = "SELECT * FROM company WHERE CompanyName LIKE '$CompanyName' AND Username LIKE '$Username' AND Location LIKE '$Location' AND FirstName LIKE '$FirstName' AND LastName LIKE '$LastName' AND Email LIKE '$Email' AND PersonalPhone LIKE '$PersonalPhone' AND Ext LIKE '$Ext' AND CompanyPhone LIKE '$CompanyPhone' AND NumberOfHoses LIKE '$NumberOfHoses' AND Website LIKE '$Website' AND DateJoined >= '$fromDate' AND DateJoined <= '$toDate' ORDER BY DateJoined DESC ";

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