app.controller('ProductController', function($scope, $http, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";

  $scope.init = function(id, hoseType){
    //$scope.id = id;
     // $route.reload();
       $scope.hoseType = transferService.getHoseType();
       $scope.id = transferService.getUsername();
       $scope.productID = transferService.getProductID();
    //   alert(transferService.getProductID());
     $http.post("functions/selectProducts.php", {'id':$scope.id, 'hoseType':$scope.hoseType}).then(function(response){  
       $scope.names = response.data;
     });

     //run function to collect image info from hose table, then assign to the image field
     //Do this by assigning its value to $scope.img
     $http.post("functions/getProductPic.php", {'hoseType':$scope.hoseType}).then(function(response){  
      $scope.productPic = response.data;
      //alert("comments displayed");
      var img = $scope.productPic[0].PicURL;
      $scope.img = "/functions/uploads/".concat(img);
      alert($scope.img);
      
     });

     

     $http.post("functions/initProduct.php", {'id':$scope.productID}).then(function(response){  
      $scope.initUser = response.data;

     $scope.productID = $scope.initUser[0].ProductID;
     $scope.username = $scope.initUser[0].Username;
     $scope.customerPO = $scope.initUser[0].CustomerPO;
     $scope.orderNum = $scope.initUser[0].OrderNum;
     $scope.part = $scope.initUser[0].Part;
     $scope.fittings = $scope.initUser[0].Fittings;
     $scope.testDate = $scope.initUser[0].testDate;
     $scope.testedBy = $scope.initUser[0].TestedBy;
     $scope.pressure = $scope.initUser[0].Pressure;
     $scope.diameter = $scope.initUser[0].HoseDiameter;
     $scope.length = $scope.initUser[0].HoseLength;
     $scope.temp = $scope.initUser[0].Temperature;
     $scope.crn = $scope.initUser[0].CRN;
     $scope.inService = $scope.initUser[0].InService;
     $scope.description = $scope.initUser[0].description;
    //alert($scope.names[0]);

    var productID = $scope.productID;
    $http.post("functions/selectComments.php", {'productID':productID}).then(function(response){  
      $scope.listOfComments = response.data;
      alert("comments displayed");
    });

    



    });

  };

  $scope.details = function(index){
    
    $scope.productID = $scope.names[index].ProductID;
     $scope.username = $scope.names[index].Username;
     $scope.customerPO = $scope.names[index].CustomerPO;
     $scope.orderNum = $scope.names[index].OrderNum;
     $scope.part = $scope.names[index].Part;
     $scope.fittings = $scope.names[index].Fittings;
     $scope.testDate = $scope.names[index].testDate;
     $scope.testedBy = $scope.names[index].TestedBy;
     $scope.pressure = $scope.names[index].Pressure;
     $scope.diameter = $scope.names[index].HoseDiameter;
     $scope.length = $scope.names[index].HoseLength;
     $scope.temp = $scope.names[index].Temperature;
     $scope.crn = $scope.names[index].CRN;
     $scope.inService = $scope.names[index].InService;
     $scope.description = $scope.names[index].description;
    //alert($scope.names[0]);
    $scope.currentIndex = index;

    var productID = $scope.productID;
    $http.post("functions/selectComments.php", {'productID':productID}).then(function(response){  
      $scope.listOfComments = response.data;
      alert("comments displayed");
    });

  }

  $scope.addComment = function(){
    var Comment = document.getElementById('Comment').value; 
    var productID = $scope.productID;

    $http.post("functions/addComment.php", {'productID':productID, 'Comment':Comment}).then(function(response){  
      $scope.comments = response.data;
      $scope.details($scope.currentIndex);
      document.getElementById('Comment').value="";
    });
  }

  $scope.generate = function() {
    var x;
    //var y;
    var checkboxes = document.getElementsByName("checkboxes");
    //ar indexes = [];
    var productIDs = [];
    
    // $scope('#checkboxes input:checked').each(function () {
    //     selected.push($(this).attr('id'));
    // });
    for(x = 0; x < checkboxes.length; x++){
      if (checkboxes[x].checked){
        productIDs.push($scope.names[x].ProductID);
      }
    };

      alert(productIDs);
      //Once certificate is actually created, we will take the productIDs array and add it to our service
      //Then, we can use those productIDs to determine which certficates we need to generate.  
      //Then generating placeholder data is simple.
      //Make sure certificates open in a new tab/window


    // for (y = 0; y < indexes.length; y++){
    //   alert($scope.names[indexes[y]].ProductID);
    // }

  }

 

});
