 app.controller('loginController', function($scope, $http, $location, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  document.getElementById("navigation").style.visibility = "hidden";
  //$scope.nav = false;
  //$scope.id = 'D432223';
    $scope.login = function(){
        //var username = $scope.username;
        //var password = $scope.password;
        var username = document.getElementById('username').value; 
        var password = document.getElementById('password').value; 
        
        
        //alert("First click calls functon");
        

         $http.post("functions/verify.php", {'username':username, 'password':password}).then(function(response){  
             $scope.info = response.data;
             alert($scope.info);
             //alert("first click makes it here");

             if ($scope.info[0].Username == username && username != "" && password!= ""){
                 //Add password in above as well
                //&& angular.equals($scope.info[0].Username, $scope.username)){
                transferService.setUsername($scope.info[0].Username);
                transferService.login();
                $location.path('/dashboard');
                //alert(username);
                //alert(transferService.getUsername());
            } else {
                alert("Login does not match, Data entered does not match Databases");
               // alert(username);
               // alert(password);
                
                // $scope.username = "";
                // $scope.password = "";
              //  $scope.info = "";
            }

           });
    } 

    $scope.init = function(){
      transferService.signOut(); 
    }

});

