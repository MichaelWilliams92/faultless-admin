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
     alert(response.data);
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

   // var pic = document.getElementById('pic').value; //
    //alert(firstName);
    // $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'pic':pic}).then(function(response){  
    //    alert('new Company Added!');   
    //    $scope.names = response.data;}

       
    //  );  

    if(!document.getElementById("username").value){
      alert("Username field cannot be blank!");
      return;
  }
  if(!document.getElementById("CompanyName").value){
    alert("Company name field cannot be blank!");
    return;
  }
  if(!document.getElementById("location").value){
    alert("The location field cannot be blank!");
  }

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


  var allowed = ['jpg', 'jpeg', 'png'];
  var img = "";


  //var fileType = document.getElementById("file1").files[0].type;


  //checking to see if file is provided or not
  if(document.getElementById("file2").files.length == 0) {
    alert("File not selected.  Image will be default profile pic until new image is added");
    img = "Profile_Default.jpg";


  } else {
    var fileName = document.getElementById("file2").files[0].name;
    var fileSize = document.getElementById("file2").files[0].size;
  
  
    if(fileSize > 1000000){
      alert("File is too big!");
      return;
    }

    var ext2 = fileName.split('.');
    var ext = ext2[ext2.length-1].toLowerCase();
    img = "Profile_".concat(username,".", ext);

    if(!allowed.includes(ext)){
      alert("Sorry, that type of file is not accepted.  Please enter jpg, jpeg, or png files only!");
      return;
    }

  } 


  alert(img);
  //alert("Working so far! Now do queries");

  //check if company already exists
  $http.post("functions/selectCompany.php", {'username':username}).then(function(response){  
        //  alert(response.data);   
       //    $scope.names = response.data;
          //alert(response.data);
         // var x = response.data;
         
        // var x = "pass";
        // var y = x.localeCompare("pass");
          //var n = response.data.localeCompare("1");
          //alert(y)
          var x = response.data.toString();
          alert("Answer is:" + x);
         // alert("response is" + x + "thats it");
          if(x == "1"){ 
            alert("Sorry, this company already exists!");
           //alert(response.data);
            return;
          } else {
            alert("Company does not exist ADD IT");

             //$http.post("functions/addCompany.php", {'newHose':newHose, 'img':img, 'description':description }).then(function(response){  
                   //   alert(response.data);   
                  //    $scope.names = response.data;

                  $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'img':img}).then(function(response){  
                    //    alert('new Company Added!');   
                    //    $scope.names = response.data;}
                
                    alert(response.data);
                       
                      

                 // var m = response.data.localeCompare("0");
                 var y = response.data.toString();
                 alert("Company account created!");
                // alert(y);
                 
                     if(y == "0"){
                       alert("Company was not successfully added! Please try again");
                       return;
                     } else if (img != "Profile_Default.jpg") {
                       //run submit form now
                       //alert("All good, add pic now");
                      // alert("submitting form now!");
                       document.companyForm.submit();
                      alert("New company profile pic successfully added!");
                     // $scope.addUser(username);
                      
                     }
                     $http.post("functions/addUser.php", {'username':username}).then(function(response){  
                      alert("User added!!");   
                     
                     }); 
                   // $scope.clearCompany();
                 });
          }
      });

  };

  $scope.clearCompany = function(){  
    document.getElementById('username').value = ""; //
    document.getElementById('CompanyName').value = "";  //
    document.getElementById('location').value = "";   //
    document.getElementById('firstName').value = ""; //
    document.getElementById('lastName').value = ""; //
    document.getElementById('email').value = ""; //
    document.getElementById('phoneNumber').value = ""; //
    document.getElementById('Ext').value = ""; 
    document.getElementById('CompanyNumber').value = "";  //
    document.getElementById('website').value = ""; //
    document.getElementById('file2').value = "";
   // var pic = document.getElementById('pic').value; //
  //   alert(firstName);
  //   $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'pic':pic}).then(function(response){  
  //      alert('new Company Added!');   
  //      $scope.names = response.data;}
  //    );  
   };

   $scope.addUser = function(user){
     alert(user);
     $http.post("functions/addUser.php", {'username':user, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'pic':pic}).then(function(response){  
            alert('new Company Added!');   
            $scope.names = response.data;
      }); 

   }

   $scope.clearHose = function(){  
    // alert("function called");
    document.getElementById('newHose').value = ""; //
    document.getElementById('description').value = "";  //
    document.getElementById('file1').value = "";   //
  
     }

    
      //alert("Hose count is " + hoseCount + 1);
      //alert("New hose count is " + newHoseCount); 
    
    

    
   // var pic = document.getElementById('pic').value; //
  //   alert(firstName);
  //   $http.post("functions/addCompany.php", {'username':username, 'companyName':companyName, 'location':location, 'firstName':firstName, 'lastName':lastName, 'email':email, 'phoneNumber':phoneNumber, 'Ext':Ext, 'CompanyNumber':CompanyNumber, 'website':website, 'pic':pic}).then(function(response){  
  //      alert('new Company Added!');   
  //      $scope.names = response.data;}
  //    );  
  

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

    //make sure given Username is in database and that product ID isnt in database
    $http.post("functions/selectCompany.php", {'username':PRusername}).then(function(response){  
        var x = response.data.toString();
        if(x == "0"){
          alert("Username must exist. Please check again and re-enter correct Username");
          return;
        } else {
          alert("USername exists, please proceed");
          $http.post("functions/selectProduct.php", {'productID':productID}).then(function(response){  
              var y = response.data.toString();
              if(y == "1"){
                alert("ProductID already exists.  Please enter a unique product ID");
                return;
              } else {
                alert("Product ID not in database, you can proceed");
                $http.post("functions/addProduct.php", {'productID':productID, 'PRusername':PRusername, 'customerPO':customerPO, 'orderNum':orderNum, 'part':part, 'fittings':fittings, 'testDate':testDate, 'testedBy':testedBy, 'type':type, 'pressure':pressure, 'diameter':diameter, 'length':length, 'temperature':temperature, 'crn':crn, 'inService':inService}).then(function(response){  
                      var z = response.data.toString();

                         if(z=="1"){
                           alert("New product successfully added");
                           $scope.clearProduct();
                         } else {
                           alert("New product was not added. Please check fields and try again");
                         }
                      
                     }); 
              }

          })
          
        } 

   });
    //  document.getElementById('productID').value=""; 
  };

  $scope.clearProduct = function(){
    document.getElementById('productID').value = ""; //
    document.getElementById('PRusername').value = ""; //
    document.getElementById('customerPO').value = "";  //
    document.getElementById('orderNum').value = "";
    document.getElementById('part').value = ""; //
    document.getElementById('fittings').value = ""; //
    document.getElementById('testDate').value =""; //
    document.getElementById('testedBy').value = ""; //
    document.getElementById('type').value = "";  //
    document.getElementById('pressure').value = "";
    document.getElementById('diameter').value = ""; //
    document.getElementById('length').value = ""; //
    document.getElementById('temperature').value = ""; //
    document.getElementById('crn').value = ""; //
    document.getElementById('inService').value = ""; //
  }

  $scope.addHose = function(){  
    //alert(document.getElementById("wizard-picture").value);

    //check to make sure all fields are provided
    if(!document.getElementById("newHose").value){
        alert("Hose field cannot be blank!");
        return;
    }
    if(!document.getElementById("description").value){
      alert("Description field cannot be blank!");
      return;
    }
    if(!document.getElementById("file1").value){
      alert("An image must be selected!");
    }

    var newHose = document.getElementById('newHose').value; //
    var description = document.getElementById('description').value;  //
    var fileName = document.getElementById("file1").files[0].name;
    var fileSize = document.getElementById("file1").files[0].size;
    //var fileType = document.getElementById("file1").files[0].type;
    var ext2 = fileName.split('.');
    var ext = ext2[ext2.length-1].toLowerCase();
    var img = newHose.concat('_hose.', ext);

    //make sure file is not too big and contains proper extension, and name is provided
    var allowed = ['jpg', 'jpeg', 'png'];

    if(fileSize > 1000000){
      alert("File is too big!");
      return;
    }
    if(!allowed.includes(ext)){
      alert("Sorry, that type of file is not accepted.  Please enter jpg, jpeg, or png files only!");
      return;
    }
    if(!fileName){
      alert("Error occurred.  Please try uploading image again");
      return;
    }

    //alert("Working so far! Now do queries");

    //check if hose already exists
    $http.post("functions/selectHose.php", {'newHose':newHose}).then(function(response){  
          //  alert(response.data);   
         //    $scope.names = response.data;
            //alert(response.data);
           // var x = response.data;
           
          // var x = "pass";
          // var y = x.localeCompare("pass");
            //var n = response.data.localeCompare("1");
            //alert(y)
            var x = response.data.toString();
            //alert("response is" + x + "thats it");
            if(x == "1"){ 
              alert("Sorry, this hose Type already exists!");
             //alert(response.data);
              return;
            } else {
              //alert("Hose does not exist ADD IT");

               $http.post("functions/addHose.php", {'newHose':newHose, 'img':img, 'description':description }).then(function(response){  
                     //   alert(response.data);   
                    //    $scope.names = response.data;

                   // var m = response.data.localeCompare("0");
                   var y = response.data.toString();
                       if(y == "0 "){
                         alert("Hose was not successfully added! Please try again");
                         return;
                       } else {
                         //run submit form now
                         //alert("All good, add pic now");
                         //alert("submitting form now!");
                         document.hoseForm.submit();
                        alert("New hose Type successfully added!");
                        $scope.clearHose();
                       }
                   });
            }
        });

   // alert(newHose + " " + description + " " + ext + " " + img);

   //call function to add pic and info to database
  //  $http.post("functions/upload.php", {'newHose':newHose, 'description':description, 'img':img, }).then(function(response){  
  //       alert(response.data);   
  //   //    $scope.names = response.data;
  //  });  

     
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

