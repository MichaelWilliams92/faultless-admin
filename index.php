<?php
 // session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <base href="/">
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>Admin UI</title>
     
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
     <script src="js/app.js"></script>

     <script src="js/controllers/DashboardController.js"></script>
     <script src="js/controllers/ProfileController.js"></script>
     <script src="js/controllers/ProductController.js"></script>
     <script src="js/controllers/searchProductController.js"></script>
     <script src="js/controllers/searchCompanyController.js"></script>
     <script src="js/controllers/loginController.js"></script>

     <script src="js/services/transferService.js"></script>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>

     <link href="css/styles.css" rel="stylesheet">

  </head>
  


  <body ng-app="myApp">

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navigation">
    <a class="navbar-brand" href="#">Faultless Hoses</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#!dashboard">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#!profile">Company Profile<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#/!">Sign Out<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </nav>

    <div ng-view></div>
    
 

    <!-- Modules -->
   

    <!-- Controllers -->

   

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>
  <Script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap.min.js"></Script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</html>