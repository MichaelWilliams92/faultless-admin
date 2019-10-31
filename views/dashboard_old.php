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
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Faultless Hoses</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#/!">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#!profile">Company Profile<span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

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
            <a href="#!search"><button>Search</button></a>
            <p> Find a Company Page</p>
            <a href="#!search"><button>Search</button></a>
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

        <div class="row my-row">
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
                          <tr ng-repeat='a in names'>

                            <th scope="row">{{a.ProductID}}</th>

                      
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

                          <th scope="row">{{a.ProductID}}</th>


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
                    Collapsible Group Item #3
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
                            <th scope="col">Date of test</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names3'>

                        <th scope="row">{{a.ProductID}}</th>


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
                  <h3>content</h3>
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

                    <div class="col-5 my-col">
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

                    <!-- <div class="col-5 my-col">
                      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div> -->
                  </div>
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
                <div class="col-3 my-col">
                  <h3>content</h3>
                </div>

                <div class="col-9 my-col">
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

                    <div class="col-5 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Fittings" aria-label="testname" id='fittings'>
                    </div>

                    <div class="col-2 my-col">
                      <b>LAst inspection</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Last inspection" aria-label="temprange" id='lastInspection'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>Next Inspection</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Website" aria-label="temprange" id='nextInspection'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>Tested By</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Profile Pic" aria-label="temprange" id='testedBy'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>Hose Type</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="hose Type" aria-label="temprange" id='type'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>Pressure</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Pressure" aria-label="temprange" id='pressure'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>Diameter</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Diameter" aria-label="temprange" id='diameter'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>Length</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="length" aria-label="temprange" id='length'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>Temperature</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="tempeature" aria-label="temprange" id='temperature'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>CRN or NON CRN</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="CRNORNOT" aria-label="temprange" id='crn'>
                    </div>
                  </div>

                  <div class="col-2 my-col">
                      <b>In or Out of Service</b>
                    </div>

                    <div class="col-4 my-col">
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
              <div class="row my-row">
                <div class="col-3 my-col">
                  <h3>content</h3>
                </div>

                <div class="col-9 my-col">
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Hose type</b>
                    </div>

                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="newHose" aria-label="crnnumber" id='newHose'>
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>url</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="url" aria-label="licensenum" id='url'>
                    </div>

                    <div class="col-2 my-col">
                      <b>description</b>
                    </div>

                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="description" aria-label="ordernum" id='description'>
                    </div>
                  </div>

                 
                  </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary">Add Another</button>
              <button type="button" class="btn btn-primary" ng-click='addHose()'>Add</button>
            </div>
          </div>
        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html>  -->