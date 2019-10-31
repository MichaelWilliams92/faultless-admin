var app = angular.module("myApp", ["ngRoute"]);

app.config(function ($routeProvider) { 
    $routeProvider 
    .when('/', { 
      templateUrl: 'views/login.php',
      controller: "loginController" 
    })
      .when('/dashboard', { 
        resolve: {
          check: function($location, transferService) {
            if(!transferService.isloggedin()) {
              $location.path('/');
            }
          },
        },
        templateUrl: 'views/dashboard.php',
        controller: "DashboardController" 
      })
      .when('/product', { 
        resolve: {
          check: function($location, transferService) {
            if(!transferService.isloggedin()) {
              $location.path('/');
            }
          },
        },
        templateUrl: 'views/product.php',
        controller: "ProductController"
      })
      .when('/searchProduct', { 
        resolve: {
          check: function($location, transferService) {
            if(!transferService.isloggedin()) {
              $location.path('/');
            }
          },
        },
        templateUrl: 'views/searchProduct.php',
        controller: "searchProductController"
      })
      .when('/searchCompany', { 
        resolve: {
          check: function($location, transferService) {
            if(!transferService.isloggedin()) {
              $location.path('/');
            }
          },
        },
        templateUrl: 'views/searchCompany.php',
        controller: "searchCompanyController"
      })
      .when('/profile', { 
        resolve: {
          check: function($location, transferService) {
            if(!transferService.isloggedin()) {
              $location.path('/');
            }
          },
        },
        templateUrl: 'views/profile.php',
        controller: "ProfileController"
      })
      // .otherwise({
      //     redirectTo: "/"
      // });
 
  });

  // app.run( function($rootScope, $location) {

  //   // register listener to watch route changes
  //   $rootScope.$on( "$routeChangeStart", function(event, next, current) {
  //     if ( $rootScope.loggedUser == null ) {
  //       // no logged user, we should be going to #login
  //       if ( next.templateUrl != "partials/login.html" ) {
  //         // not going to #login, we should redirect now
  //         $location.path( "/login" );
  //       }
  //     }         
  //   });