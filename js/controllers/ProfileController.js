app.controller('ProfileController', function($scope, $http, $location, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "image";
 // $scope.img = "/functions/uploads/mark7_hose.jpg";

  $scope.init = function(){
    // alert("re initialize everything");
    // alert($scope.names);
    //$scope.id = id;
    $http.post("functions/selectProfile.php", {'id':transferService.getUsername()}).then(function(response){  
      $scope.names = response.data;
     
       var x = $scope.names[0].Pic;
       $scope.img = "/functions/uploads/".concat(x) + '?' + new Date().getTime();
      // alert($scope.img);
    });

    // var x = names[0].Pic;
    // $scope.img = "/functions/uploads/".concat(x);
    // alert($scope.img);

    $http.post("functions/selectPassword.php", {'id':transferService.getUsername()}).then(function(response){  
      $scope.pw = response.data;
    // alert($scope.pw);
    });

      // var f = document.forms['toggle'];
      // for(var i=0,fLen=f.length;i<fLen;i++){
      //     f.elements[i].readOnly = true;
      //   }
      //   //f.elements[i].readOnly = true;
  
  };

//need to include function to get # of hoses owned
//Need to also fix the problem with the new tabs opening up new sections

  $scope.updatePersonalInfo = function(){
    var FirstName = document.getElementById('FirstName').value; //
    var LastName = document.getElementById('LastName').value; //
    var PersonalPhone = document.getElementById('PersonalPhone').value;  //
    var Ext = document.getElementById('Ext').value;
    var Email = document.getElementById('Email').value;

    $http.post("functions/UpdatePersonal.php", {'FirstName':FirstName, 'LastName':LastName, 'PersonalPhone':PersonalPhone, 'Ext':Ext, 'Email':Email}).then(function(response){  
      $scope.names = response.data;
     //alert($scope.names);

     $scope.init();
     //alert("init works!");

    })

  };
  
  //updateCompany php needs to be updates, currently the username is fixed
  $scope.updateCompanyInfo = function(){
    var username = transferService.getUsername();
    var CompanyName = document.getElementById('CompanyName').value; //
    var Location = document.getElementById('Location').value; //
    var CompanyPhone = document.getElementById('CompanyPhone').value;  //
    var Website = document.getElementById('Website').value;
    var DateJoined = document.getElementById('DateJoined').value;

    $http.post("functions/updateCompany.php", {'Username':username, 'CompanyName':CompanyName, 'Location':Location, 'CompanyPhone':CompanyPhone, 'Website':Website, 'DateJoined':DateJoined}).then(function(response){  
      $scope.names = response.data;
    // alert($scope.names);

    $scope.init();

    })
  };

  $scope.updatePic = function(){
    var username = transferService.getUsername();

    
    var ext = document.getElementById("file").value;
    var ext2 = ext.split('.');
    //alert(ext2);
    var ext3 = ext2[ext2.length-1].toLowerCase();
    var pic ="";
    //alert(ext3);
    //var ext3 = strtolower(end(ext2));
    
    var pic = pic.concat("Profile_", username, ".", ext3,); //

    //create profile name, profile_ID433323
   // var pic = document.getElementById('file').value; 

    $http.post("functions/updateProfilePic.php", {'Username':username, 'Pic':pic}).then(function(response){  
      $scope.pic = response.data;
    // alert($scope.names);
      alert("New profile pic uploaded! Please sign out and sign back in to see changes.");

    $scope.init();

    })
  };

  $scope.updatePassword = function(){
    var pw = document.getElementById('pw').value;
    var newpw = document.getElementById('newpw').value;
    var newpw2 = document.getElementById('newpw2').value;

    if(pw == $scope.pw[0].Pass_word && newpw == newpw2) {

      $http.post("functions/updatepw.php", {'username':$scope.pw[0].Username, 'password':newpw}).then(function(response){  
        $scope.info2 = response.data;

        alert("Password Changed! Please sign back in");
        transferService.signOut();
        $location.path('/dashboard');
  
      });
      
     
      //if this works, you need to update the Password and navigate back to the login screen
    } else {
      alert("pw does not match records, or new passwords do not match.  Please try again.");
    }

    
  };

  $scope.toggle1 = function() {

      var f = document.forms['toggle'];
      //var x = document.getElementByID("UserID");
      for(var i=0,fLen=f.length;i<fLen;i++){
        if (f.elements[i].readOnly && f.elements[i].id != "UserID" && f.elements[i].id != "CompanyName" && f.elements[i].id != "Location"){
          f.elements[i].readOnly = false;
          //alert(f.elements[i].id);
        } else {
          f.elements[i].readOnly = true;
        }
        //f.elements[i].readOnly = true;
      }

    }

});

