<!-- <!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin UI</title>
       Bootstrap core CSS
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
    </head>
  <body> -->
  <div ng-init="init()"></div>
  
    <header id="header">
      <div class="container my-container mt-5">
        <div class="row">
          <div class="col-12 my-col">
            <h1>My Dashboard</h1>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-4 my-col dash-actions">
            <p> Find a Product by ID</p>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
          <div class="col-4 my-col dash-actions">
            <p> Find a Product Page</p>
            <a href="#!searchProduct"><button>Search</button></a>
            <p> Find a Company Page</p>
            <a href="#!searchCompany"><button>Search</button></a>
          </div>
          <div class="col-4 my-col dash-actions">
            <p>Add new Company</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Create</button>
            <p>Add new Product</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">Create</button>
            <p>Add new Hose Type</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">Create</button>
          </div>
        </div>
        <!-- <div class="row my-row">
          <div class="col-12 my-col">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Recently Accessed
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date of test</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat='a in names1'>
                            <th scope="row" id="{{$index}}" data-ng-click="goToProduct1($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CompanyName}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div> -->
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Upcoming Inspections
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                <div class="card-body">
                  <table class="table">
                          <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date of test</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names2'>

                        <th scope="row" id="{{$index}}" data-ng-click="goToProduct2($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CompanyName}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>

                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Recently added Products
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                <div class="card-body">
                  <table class="table">
                        <thead>
                            <tr>
                          <th scope="col">Product ID</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date Added</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names3'>
                        <th scope="row" id="{{$index}}" data-ng-click="goToProduct3($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                        <td>{{a.OrderNum}}</td>
                        <td>{{a.HoseType}}</td>
                        <td>{{a.CompanyName}}</td>
                        <td>{{a.TestedBy}}</td>
                        <td>{{a.creationDate}}</td>
                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-row">
          <div class="col-12 my-col">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Upcoming Inspections
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date of test</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat='a in names4'>
                          <th scope="row" id="{{$index}}" data-ng-click="goToProduct4($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CompanyName}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Recently created Profiles
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                <div class="card-body">
                  <table class="table">
                          <thead>
                          <tr>
                            <th scope="col">Company Name</th>
                            <th scope="col">Company Location</th>
                            <th scope="col">Date Joined</th>
                            <th scope="col">Email</th>
                            <th scope="col">Website</th>
                            <th scope="col">Contact Number</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names5'>

                        <th scope="row" id="{{$index}}" data-ng-click="goToProfile($index)"><a ng-href='#!profile'>{{a.CompanyName}}</a></th>
                            <td>{{a.Location}}</td>
                            <td>{{a.DateJoined}}</td>
                            <td>{{a.Email}}</td>
                            <td>{{a.Website}}</td>
                            <td>{{a.PersonalPhone}}</td>

                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Recently added Products
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                <div class="card-body">
                  <table class="table">
                        <thead>
                            <tr>
                          <th scope="col">Product ID</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date Added</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names6'>
                        <th scope="row" id="{{$index}}" data-ng-click="goToProduct6($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                        <td>{{a.OrderNum}}</td>
                        <td>{{a.HoseType}}</td>
                        <td>{{a.CompanyName}}</td>
                        <td>{{a.TestedBy}}</td>
                        <td>{{a.creationDate}}</td>
                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </header>
      <!-- Modal for Adding Company -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Company</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row my-row">
                <div class="col-3 my-col">
                  <div class="picture-container">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" id="wizard-picture" class="">
                    </div>
                      <b class="">Choose Picture</b>
                  </div>
                </div>
                <div class="col-9 my-col">
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Username</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="crnnumber" id='username'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Company Name</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Company Name" aria-label="licensenum" id='CompanyName'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Location:</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Location" aria-label="ordernum" id='location'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>First Name</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="First Name" aria-label="hosepressure" id='firstName'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Last Name</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Last Name" aria-label="temprange" id='lastName'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Email</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Email" aria-label="testname" id='email'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Phone number</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Phone Number" aria-label="temprange" id='phoneNumber'>
                    </div>
                  </div>
                  <div class="col-2 my-col">
                      <b>Ext.</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Extension" aria-label="temprange" id='Ext'>
                    </div>
                  </div>
                  <div class="col-2 my-col">
                      <b>Company phone number</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Cpmpany Phone Number" aria-label="temprange" id='CompanyNumber'>
                    </div>
                  </div>
                  <div class="row myrow">
                    <div class="col-2 my-col">
                      <b>Website</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Website" aria-label="temprange" id='website'>
                    </div>
                  </div>
                  <div class="col-2 my-col">
                      <b>Profile Pic</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Profile Pic" aria-label="temprange" id='pic'>
                    </div>
                  </div>
                </div>
                    <!-- <div class="col-5 my-col">
                      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div> -->
                  </div>
                </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary">Add Another</button>
              <button type="button" class="btn btn-primary" ng-click='addCompany()'>Add</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal for Adding product -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row my-row">
                <!-- <div class="col-3 my-col">
                  <h3>content</h3>
                </div> -->
                <div class="col-12 my-col">
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Product ID</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="PRoductID" aria-label="crnnumber" id='productID'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Username</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="username" aria-label="licensenum" id='PRusername'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Customer PO</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="CustomerPO" aria-label="ordernum" id='customerPO'>
                    </div>
                  </div>
                  <!-- <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>CRN:</b>
                    </div>
                    <div class="col-10 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>Choose one:</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div> -->
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Order Number</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Order #" aria-label="hosepressure" id='orderNum'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Part</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Part" aria-label="temprange" id='part'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>FIttings</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Fittings" aria-label="testname" id='fittings'>
                    </div>
                  </div>
                  <div class="row my-row">
                  <div class="col-2 my-col">
                      <b>testDate</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Website" aria-label="temprange" id='testDate'>
                    </div>
                  <div class="col-2 my-col">
                      <b>Tested By</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Profile Pic" aria-label="temprange" id='testedBy'>
                    </div>
                    </div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Hose Type</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="hose Type" aria-label="temprange" id='type'>
                    </div>
                  <div class="col-2 my-col">
                      <b>Pressure</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Pressure" aria-label="temprange" id='pressure'>
                    </div>
</div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Diameter</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Diameter" aria-label="temprange" id='diameter'>
                    </div>
                  <div class="col-2 my-col">
                      <b>Length</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="length" aria-label="temprange" id='length'>
                    </div>
</div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Temperature</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="tempeature" aria-label="temprange" id='temperature'>
                    </div>
                  <div class="col-2 my-col">
                      <b>CRN?</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="CRNORNOT" aria-label="temprange" id='crn'>
                    </div>
</div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>In Service?</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="In or out" aria-label="temprange" id='inService'>
                    </div>
</div>
                    <!-- <div class="col-5 my-col">
                      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div> -->
                  </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary">Add Another</button>
              <button type="button" class="btn btn-primary" ng-click='addProduct()'>Add</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal for Adding new Hose Type -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Hose</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="functions/upload.php" target="_blank" method="POST" enctype="multipart/form-data">
                        
              <div class="row my-row">
                <div class="col-3 my-col">
                  <div class="picture-container">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                        <!-- <form action="/functions/upload.php" target="_blank" method="POST" enctype="multipart/form-data"> -->
                        <input type="file" name="file" id="file" class="">
                        <button name="submit" type="submit">Upload</button>
                        <!-- </form> -->
                        
                    </div>
                      <b class="">Choose Picture</b>
                  </div>
                </div>
                <div class="col-9 my-col">
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Hose type</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" name="hoseType" type="text" placeholder="newHose" aria-label="crnnumber" id='newHose'>
                    </div>
                  </div>
            
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>description</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" name="description" type="text" placeholder="description" aria-label="ordernum" id='description'>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary">Add Another</button> -->
              <!-- <button type="button" class="btn btn-primary" ng-click='addHose()'>Add</button> -->
              <!-- <button type="submit" name="submit" ng-click="addHose()">ADD</button> -->
                       
            </div>
            </form>
          </div>
        </div>
      </div>

  <!--  add php opening tag   
  
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    echo($file);
   //print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
   // $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // print_r($file);
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
                if($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $img = $fileNameNew;
                    
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                   // header("Location: index.php?uploadsuccess");
                } else {
                    echo "Your file is too big!";
                }
        } else {
            echo "There was an error uploading your file!";
        }

    } else {
        echo "You cannot upload files of this type!";
    }
//}


?> -->




      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html>  -->