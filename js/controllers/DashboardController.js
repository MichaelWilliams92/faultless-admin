app.controller('DashboardController', function($scope, $http, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  document.getElementById("navigation").style.visibility = 'visible';
  var hoseCount = 0;
  var newHoseCount = 0;
  $scope.companyCount = 0;
  $scope.productCount = 0;
  //$scope.id = 'D432223';

  $scope.displayData = function(){  
    $http.get("functions/selectDash.php", {'id':$scope.id}).then(function(response){  
      alert(response.data);   
      $scope.names = response.data;}
    );  
  }
  
  $scope.init = function(){
    transferService.setUsername("ID432223");
    var name = transferService.getUsername();

      $http.post("functions/hoseCount.php").then(function(response){  
        hoseCount = parseInt(response.data[0].H, 10);
       // alert(response.data[0].H);
       //alert($scope.names1);
      });
       $http.post("functions/companyCount.php").then(function(response){  
         $scope.companyCount = response.data;
       //  alert(response.data[0].C);
       
        //alert($scope.names1);
       });
       $http.post("functions/productCount.php").then(function(response){  
         $scope.productCount = response.data;
        // alert(response.data[0].P);
        //alert($scope.names1);
       });
    
  
    $http.post("functions/selectDash.php", {'name':name}).then(function(response){  
      $scope.names1 = response.data;
     //alert($scope.names1);
    });
    $http.post("functions/selectDash2.php", {'name':name}).then(function(response){  
      $scope.names2 = response.data;
     //alert($scope.names);
    });
    $http.post("functions/selectDash3.php", {'name':name}).then(function(response){  
      $scope.names3 = response.data;
     //alert($scope.names);
    });
    $http.post("functions/selectDash4.php").then(function(response){  
      $scope.names4 = response.data;
    // alert($scope.names1);
    });
    $http.post("functions/selectDash5.php").then(function(response){  
      $scope.names5 = response.data;
     //alert($scope.names);
    });
    $http.post("functions/selectDash6.php").then(function(response){  
      $scope.names6 = response.data;
     //alert($scope.names);
    });
  };

  $scope.goToProduct1 = function(index){
     transferService.setProductID($scope.names1[index].ProductID);
     transferService.setHoseType($scope.names1[index].HoseType);
  }

  $scope.goToProduct2 = function(index){
    transferService.setProductID($scope.names2[index].ProductID);
    transferService.setHoseType($scope.names2[index].HoseType);
 }

 $scope.goToProduct3 = function(index){
  transferService.setProductID($scope.names3[index].ProductID);
  transferService.setHoseType($scope.names3[index].HoseType);
}

$scope.goToProduct4 = function(index){
  transferService.setProductID($scope.names4[index].ProductID);
  transferService.setHoseType($scope.names4[index].HoseType);
  transferService.setUsername($scope.names4[index].Username);
}

$scope.goToProfile = function(index){
  //transferService.setProductID($scope.names5[index].ProductID);
 // transferService.setHoseType($scope.names5[index].HoseType);
  transferService.setUsername($scope.names5[index].Username);
}

$scope.goToProduct6 = function(index){
  transferService.setProductID($scope.names6[index].ProductID);
  transferService.setHoseType($scope.names6[index].HoseType);
  transferService.setUsername($scope.names6[index].Username);
}
  //function names need to change (functions too)

  $scope.addCompany = function(){  
    var username = document.getElementById('username').value; //
    var companyName = document.getElementById('CompanyName').value; //
    var location = document.getElementById('location').value;  //
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value; //
    var email = document.getElementById('email').value; //
    var phoneNumber = document.getElementById('phoneNumber').value; //
    var Ext = document.getElementById('Ext').value; //
    var CompanyNumber = document.getElementById('CompanyNumber').value; //
    var website = document.getElementById('website').value; //
   // var pic = document.getElementById('pic').value; //
    alert(firstName);
    $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'pic':pic}).then(function(response){  
       alert('new Company Added!');   
       $scope.names = response.data;}
     );  
  };

  $scope.clearCompany = function(){  
    document.getElementById('username').value = ""; //
    document.getElementById('CompanyName').value = "";  //
    document.getElementById('location').value = "";   //
    document.getElementById('firstName').value = ""; 
    document.getElementById('lastName').value = ""; //
    document.getElementById('email').value = ""; //
    document.getElementById('phoneNumber').value = ""; //
    doucment.getElementById('Ext').value = ""; 
    document.getElementById('CompanyNumber').value = "";  //
    document.getElementById('website').value = ""; //
   // var pic = document.getElementById('pic').value; //
  //   alert(firstName);
  //   $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'pic':pic}).then(function(response){  
  //      alert('new Company Added!');   
  //      $scope.names = response.data;}
  //    );  
   };

   $scope.clearHose = function(){  
    // alert("function called");

     $http.post("functions/hoseCount.php").then(function(response){  
       newHoseCount = parseInt(response.data[0].H, 10);
     // alert(response.data[0].H);
    //alert($scope.names1);
   // hoseCount = parseInt(text, 10);

   //alert(newHoseCount + 1);

      if(newHoseCount == hoseCount + 1){
        alert("should remove info");
    // //   document.getElementById('newHose').value = ""; //
    // //   document.getElementById("file").value = "";
     }

    
      //alert("Hose count is " + hoseCount + 1);
      //alert("New hose count is " + newHoseCount); 
     });
    

    
   // var pic = document.getElementById('pic').value; //
  //   alert(firstName);
  //   $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'pic':pic}).then(function(response){  
  //      alert('new Company Added!');   
  //      $scope.names = response.data;}
  //    );  
   };

  $scope.addProduct = function(){  
    var productID = document.getElementById('productID').value; //
    var PRusername = document.getElementById('PRusername').value; //
    var customerPO = document.getElementById('customerPO').value;  //
    var orderNum = document.getElementById('orderNum').value;
    var part = document.getElementById('part').value; //
    var fittings = document.getElementById('fittings').value; //
    var testDate = document.getElementById('testDate').value; //
    var testedBy = document.getElementById('testedBy').value; //
    var type = document.getElementById('type').value;  //
    var pressure = document.getElementById('pressure').value;
    var diameter = document.getElementById('diameter').value; //
    var length = document.getElementById('length').value; //
    var temperature = document.getElementById('temperature').value; //
    var crn = document.getElementById('crn').value; //
    var inService = document.getElementById('inService').value; //
    $http.post("functions/addProduct.php", {'productID':productID, 'PRusername':PRusername, 'customerPO':customerPO, 'orderNum':orderNum, 'part':part, 'fittings':fittings, 'testDate':testDate, 'testedBy':testedBy, 'type':type, 'pressure':pressure, 'diameter':diameter, 'length':length, 'temperature':temperature, 'crn':crn, 'inService':inService}).then(function(response){  
       alert(response.data);
    //   if(response.data == "Data Inserted"){
    //     alert("now clear fields");
    //  }
    //  else {
    //    alert("error with submitting form.  Please make sure all mandatory fields are correctl filled");
    //  }

      // alert(response.data);   
      //  $scope.names = response.data;
      // $scope.init()
      // document.getElementById('productID').value = ""; //
      // document.getElementById('PRusername').value = ""; //
      // document.getElementById('customerPO').value = "";  //
      // document.getElementById('orderNum').value = "";
      // document.getElementById('part').value = ""; //
      // document.getElementById('fittings').value = "";//
      // document.getElementById('testDate').value = "";//
      // document.getElementById('testedBy').value = ""; //
      // document.getElementById('type')..value = ""; //
      // document.getElementById('pressure').value = "";
      // document.getElementById('diameter').value = ""; //
      // document.getElementById('length').value = "";//
      // document.getElementById('temperature').value = "";//
      // document.getElementById('crn').value = "";//
      // document.getElementById('inService').value = "";//
    });  

    //  document.getElementById('productID').value=""; //
    //  document.getElementById('PRusername').value=""; //
    //  document.getElementById('customerPO').value="";  //
    //  document.getElementById('orderNum').value="";
    //  document.getElementById('part').value=""; //
    //  document.getElementById('fittings').value=""; //
    //  document.getElementById('testDate').value=""; //
    //  document.getElementById('testedBy').value=""; //
    //  document.getElementById('type').value;  //
    //  document.getElementById('pressure').value;
    //  document.getElementById('diameter').value; //
    //  document.getElementById('length').value; //
    //  document.getElementById('temperature').value; //
    //  document.getElementById('crn').value; //
    //  document.getElementById('inService').value; //

  };

  $scope.addHose = function(){  
    //alert(document.getElementById("wizard-picture").value);
    var newHose = document.getElementById('newHose').value; //
    var ext = document.getElementById("file").value;
    var ext2 = ext.split('.');
    //alert(ext2);
    var ext3 = ext2[ext2.length-1].toLowerCase();
    //alert(ext3);
    //var ext3 = strtolower(end(ext2));
    
    var url = document.getElementById('newHose').value.concat("_hose", ".", ext3,); //
    alert(url);
    var description = document.getElementById('description').value;  //
    $http.post("functions/addHose.php", {'newHose':newHose, 'url':url, 'description':description}).then(function(response){  
       alert(response.data);   
       $scope.names = response.data;}
     );  

     
  };

  $scope.addHose2 = function(){
    alert($scope.file);
    // $http.post("functions/upload.php").then(function(response){  
    //   alert(response.data);
    //});

  }

  $scope.signOut = function(){
    alert("sign out now!");
  }

  //may need to call 2 additional function calls for the other collapseables

  //main Point of this controller is to call and display the accordians.
  //Accordings for external are currently as such:

//Ideally, we will store the USername in a variable, that we can call when needed.
//That variable will be connected to the controller (prob through ng-model)
//THen, we pass that variable through the function and return data.

//Will need to change the GROUP BY value later on

});

