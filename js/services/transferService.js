app.factory('transferService', function() {
  var username = "";
  var productID ="";
  var hoseType ="";
  var loggedin = false;

  var setUsername = function(name) {
      username = name;
  };

  var getUsername = function(){
      return username;
  };

   var setProductID = function(id) {
     productID = id;
   };

 var getProductID = function(){
     return productID;
 };

 var setHoseType = function(hose) {
  hoseType = hose;
};

var getHoseType = function(){
  return hoseType;
};

var login = function() {
  loggedin = true;
  //alert("logged in!");
};

var signOut = function() {
  loggedin = false;
 // alert("logged in!");
};

var isloggedin = function(){
  return loggedin;
};


  return {
    setUsername: setUsername,
    getUsername: getUsername,
    setProductID: setProductID,
    getProductID: getProductID,
    setHoseType: setHoseType,
    getHoseType: getHoseType,
    login:login,
    signOut:signOut,
    isloggedin:isloggedin
  };

});