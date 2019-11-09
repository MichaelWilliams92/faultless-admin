app.controller('searchCompanyController', function($scope, $http, $location, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  //$scope.id = 'D432223';

  $scope.init = function (){

  };

  $scope.searchCompany = function() {  

    $scope.names="";
    $scope.CompanyName = "";
    $scope.Username = "";
    $scope.Location = "";
    $scope.FirstName = "";
    $scope.LastName = "";
    $scope.Email = "";
    $scope.PersonalPhone = "";
    $scope.Ext = "";
    $scope.CompanyPhone = "";
    $scope.NumberOfHoses = "";
    $scope.Website = "";
    $scope.DateJoined = "";
     $scope.img="";

     var CompanyName = "%".concat(document.getElementById('CompanyName').value, "%"); 
     var Username = "%".concat(document.getElementById('Username').value, "%");  
     var Location = "%".concat(document.getElementById('Location').value, "%"); 
     var FirstName = "%".concat(document.getElementById('FirstName').value, "%"); 
     var LastName = "%".concat(document.getElementById('LastName').value, "%"); 
     var Email = "%".concat(document.getElementById('Email').value, "%"); 
     var PersonalPhone = "%".concat(document.getElementById('PersonalPhone').value, "%"); 
     var Ext = "%".concat(document.getElementById('Ext').value, "%"); 
     var CompanyPhone = "%".concat(document.getElementById('CompanyPhone').value, "%"); 
     var NumberOfHoses = "%".concat(document.getElementById('NumberOfHoses').value, "%"); 
     var Website = "%".concat(document.getElementById('Website').value, "%"); 

     
     var fromDate = document.getElementById('fromDate').value;
     if(fromDate == "") {fromDate = "1900-01-01"};
     var toDate = document.getElementById('toDate').value;
     if(toDate == "") {toDate = "2099-12-30"};

    if (CompanyName == ""){CompanyName = "%"};
    if (Username == ""){Username = "%"};
    if (Location == ""){Location = "%"};
    if (FirstName == ""){FirstName = "%"};
    if (LastName == ""){LastName = "%"};
    if (Email == ""){Email = "%"};
    if (PersonalPhone == ""){PersonalPhone = "%"};
    if (Ext == ""){Ext = "%"};
    if (CompanyPhone == ""){CompanyPhone = "%"};
    if (NumberOfHoses == ""){NumberOfHoses = "%"};
    if (Website == ""){Website = "%"};
    if (fromDate == ""){fromDate = "%"};
    if (toDate == ""){toDate = "%"};

   // alert(toDate);

     $http.post("functions/searchCompany.php", {'CompanyName':CompanyName, 'Username':Username, 'Location':Location, 'FirstName':FirstName, 'LastName':LastName, 'Email':Email, 'PersonalPhone':PersonalPhone, 'Ext':Ext, 'CompanyPhone':CompanyPhone, 'NumberOfHoses':NumberOfHoses, 'Website':Website, 'fromDate':fromDate, 'toDate':toDate}).then(function(response){  
         
        $scope.names = response.data;
        if($scope.names == "null"){
          alert("No results found!");
        }  
       
        
      
      }
        
      );  
  };

  $scope.details = function(index){
    alert("Details have been loaded.  Please click on details tab to view info");
    $scope.CompanyName = $scope.names[index].CompanyName;
     $scope.Username = $scope.names[index].Username;
     $scope.Location = $scope.names[index].Location;
     $scope.FirstName = $scope.names[index].FirstName;
     $scope.LastName = $scope.names[index].LastName;
     $scope.Email = $scope.names[index].Email;
     $scope.PersonalPhone = $scope.names[index].PersonalPhone;
     $scope.Ext = $scope.names[index].Ext;
     $scope.CompanyPhone = $scope.names[index].CompanyPhone;
     $scope.NumberOfHoses = $scope.names[index].NumberOfHoses;
     $scope.Website = $scope.names[index].Website;
     $scope.DateJoined = $scope.names[index].DateJoined;
     var img = $scope.names[index].Pic;
     $scope.img = "/functions/uploads/".concat(img);

     var x = document.getElementById("hideLink");
     //alert("hide run");
    if (x.style.display === "none") {
      x.style.display = "block";
      
    }

     transferService.setUsername($scope.Username);
    
    //alert($scope.names[0]);

  }

  $scope.nextScreen = function(index){
    transferService.setUsername($scope.names[index].Username);
    alert(transferService.getUsername());
    $location.path('/profile');
  }


});

