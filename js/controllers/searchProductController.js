app.controller('searchProductController', function($scope, $http, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  $scope.hiddenButton = true;
  //$scope.name = "details";
  
  //$scope.id = 'D432223';

  $scope.init = function() {
    //var element = document.getElementById("goToProduct");
    // document.getElementById("goToProduct").style.visibility = hidden;
    //element.hidden = true;
    $scope.hideButton="true";
    //document.getElementById("hideLink").style.display = "none";
    //var x = document.getElementById("hideLink");
   // alert(x);
    // if (x.style.display === "none") {
    //   x.style.display = "block";
      
    // }
    // } else {
    //   x.style.display = "none";
    // }
   
  }

  $scope.yell = function(){
    alert("YEAAAA");
  }

  $scope.searchProduct = function() {  

    $scope.names="";
    $scope.productID = "";
     $scope.username ="";
     $scope.customerPO = "";
     $scope.orderNum = "";
     $scope.part = "";
    $scope.hoseType = "";
     $scope.fittings = "";
     $scope.testDate ="";
     $scope.testedBy = "";
     $scope.pressure = "";
     $scope.diameter = "";
     $scope.length = "";
     $scope.temp = "";
     $scope.crn = "";
     $scope.inService = "";
     $scope.img="";
    //$scope.init();
    //need ti clear contents of details as well
     var ProductID = "%".concat(document.getElementById('ProductID').value, "%"); 
     var Username = "%".concat(document.getElementById('Username').value, "%"); 
     var CustomerPO = "%".concat(document.getElementById('CustomerPO').value, "%");   
     var OrderNum = "%".concat(document.getElementById('OrderNum').value, "%"); 
     var Part = "%".concat(document.getElementById('Part').value, "%"); 
     var Fittings = "%".concat(document.getElementById('Fittings').value, "%"); 
     var testDate = "%".concat(document.getElementById('testDate').value, "%"); 
     var TestedBy = "%".concat(document.getElementById('TestedBy').value, "%"); 
     var HoseType = "%".concat(document.getElementById('HoseType').value, "%"); 
     var Pressure = "%".concat(document.getElementById('Pressure').value, "%"); 
     var HoseDiameter = "%".concat(document.getElementById('HoseDiameter').value, "%"); 
     var HoseLength = "%".concat(document.getElementById('HoseLength').value, "%"); 
     var Temperature = "%".concat(document.getElementById('Temperature').value, "%"); 
     var CRN = "%".concat(document.getElementById('CRN').value, "%"); 
     var InService = "%".concat(document.getElementById('InService').value, "%"); 

    if (ProductID == ""){ProductID = "%"};
    if (Username == ""){Username = "%"};
    if (CustomerPO == ""){CustomerPO = "%"};
    if (OrderNum == ""){OrderNum = "%"};
    if (Part == ""){Part = "%"};
    if (Fittings == ""){Fittings = "%"};
    if (testDate == ""){testDate = "%"};
    if (TestedBy == ""){TestedBy = "%"};
    if (HoseType == ""){HoseType = "%"};
    if (Pressure == ""){Pressure = "%"};
    if (HoseDiameter == ""){HoseDiameter = "%"};
    if (HoseLength == ""){HoseLength = "%"};
    if (Temperature == ""){Temperature = "%"};
    if (CRN == ""){CRN = "%"};
    if (InService == ""){InService = "%"};


     $http.post("functions/searchProduct.php", {'ProductID':ProductID, 'Username':Username, 'CustomerPO':CustomerPO, 'OrderNum':OrderNum, 'Part':Part, 'Fittings':Fittings, 'testDate':testDate, 'TestedBy':TestedBy, 'HoseType':HoseType, 'Pressure':Pressure, 'HoseDiameter':HoseDiameter, 'HoseLength':HoseLength, 'Temperature':Temperature, 'CRN':CRN, 'InService':InService}).then(function(response){  
         
        $scope.names = response.data;
        alert($scope.names); 
       }
        
      );  
  };

  $scope.details = function(index) {
    $scope.hideButton="false";
     $scope.productID = $scope.names[index].ProductID;
      $scope.username = $scope.names[index].Username;
      $scope.customerPO = $scope.names[index].CustomerPO;
      $scope.orderNum = $scope.names[index].OrderNum;
      $scope.part = $scope.names[index].Part;
     $scope.hoseType = $scope.names[index].HoseType;
      $scope.fittings = $scope.names[index].Fittings;
      $scope.testDate = $scope.names[index].testDate;
      $scope.testedBy = $scope.names[index].TestedBy;
      $scope.pressure = $scope.names[index].Pressure;
      $scope.diameter = $scope.names[index].HoseDiameter;
      $scope.length = $scope.names[index].HoseLength;
      $scope.temp = $scope.names[index].Temperature;
      $scope.crn = $scope.names[index].CRN;
      $scope.inService = $scope.names[index].InService;
     //alert("working");
     var x = document.getElementById("hideLink");
     //alert("hide run");
    if (x.style.display === "none") {
      x.style.display = "block";
      
    }
    // } else {
    //   x.style.display = "none";
    // }

    //  $scope.hiddenButton = true;

       transferService.setHoseType($scope.hoseType);
       transferService.setUsername($scope.username);
       transferService.setProductID($scope.productID);

       $http.post("functions/getProductPic.php", {'hoseType':$scope.hoseType}).then(function(response){  
        $scope.productPic = response.data;
        //alert("comments displayed");
        var img = $scope.productPic[0].PicURL;
        $scope.img = "/functions/uploads/".concat(img);
        //alert($scope.img);
        
       });
     //  document.getElementById("goToProduct").style.visibility = visible;
      //  $scope.hiddenButton = $scope.hiddenButton = false;
      // $scope.init();

     //alert(transferService.getHoseType());
     //alert(transferService.getUsername());
  }

  $scope.myFunction = function() {
    
  }

});

