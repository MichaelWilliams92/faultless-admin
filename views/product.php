<!-- <!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-timgo-fit=no">

      <title>Admin UI</title>

      
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <link href="css/styles.css" rel="stylesheet">
    </head>

  <body> -->
  <div ng-init="init()"></div>

    <header id="header">
      <div class="container my-container mt-5">
        <div class="row">
          <div class="col-9 my-col">
            <h1>{{hoseType}} Hose products for Customer {{id}}</h1>
          </div>
            <div class="col-3 my-col">
            <button type="button" class="btn btn-light">toggle</button>
            <button type="button" ng-click="generate()">Generate Certificate</button>
          </div>
        </div>

        <div class="row details-table-container-vh">
          <div class="col-3 my-col details-bar">
            <a href="#"><img  ng-src="{{img}}" src="https://via.placeholder.com/250"></a>
            <h3 class ="details">Details:</h3>
            <ul>
              <!-- We will insert the specific details here later -->
              <li>{{productID}}</li>
              <li>{{username}}</li>
              <li>{{customerPO}}</li>
              <li>{{orderNum}}</li>
              <li>{{part}}</li>
              <li>{{fittings}}</li>
              <li>{{testDate}}</li>
              <li>{{testedBy}}</li>
              <li>{{pressure}}</li>
              <li>{{diameter}}</li>
              <li>{{length}}</li>
              <li>{{temp}}</li>
              <li>{{crn}}</li>
              <li>{{inService}}</li>
              <li><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit info</button></li>
            </ul>
           <!-- <h3 class ="details">Testing:</h3> 
            <ul>
              <li class="tested by">Phil Robertson</li>
              <li class="dot">01/30/19</li>
            </ul> -->
          </div>

          <div class="col-6 my-col">
            <div class="row my-row">
              <div class="col-9 my-col">
                <h3>Purchase history</h3>
              </div>

              <div class="col-3 my-col">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              </div>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product ID</th>
                  <th scope="col">Order Number</th>
                  <th scope="col">Customer PO</th>
                  <th scope="col">Part</th>
                  <th scope="col">Tested By</th>
                  <!-- <th scope="col">Date of test</th> -->
                  <th scope="col">Checked</th>
                </tr>
              </thead>
              <form id="formData">
              <tbody>
               <tr ng-repeat='a in names'>

                <th scope="row" id="{{$index}}" data-ng-click="details($index)">{{a.ProductID}}</th>

                 
                  <td>{{a.OrderNum}}</td>
                  <td>{{a.CustomerPO}}</td>
                  <td>{{a.Part}}</td>
                  <td>{{a.TestedBy}}</td>
                  <!-- <td>{{a.testDate}}</td> -->
                  <td><input type="checkbox" name="checkboxes"></td>
                  
                </tr>
                
              </tbody>
              </form>
            </table>
          </div>

          <div class="col-3 my-col sidebar">
            <h3 class ="descrip">Description</h3>
            <p>{{names[0].Description}}</p>
            <!-- <p>The Xhose Pro is the original garden hose
                that expands up to 3-times its original
                length when water courses through it. its
                reinforced high-grade drag resistant Dac-5
                polyester outer layer which is specially
                woven to make it tougher and stronger.
                The solid brass fittings and superios strain
                relief collar are crush resistant while the
                thick, specially formulated latex inner layer
                expands to produce more velocity and
                higher pressure.
            </p> -->
          
            <div ng-repeat="x in listOfComments">
              <h5>{{x.Comment}}</h5>
              <h6>Date added: {{x.DateAdded}}</h6>
            </div>
            

            <h3 class ="comments">Comments</h3>
            <input class="form-control mr-sm-2" type="text" placeholder="Comment..." aria-label="comment" id="Comment">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" ng-click='addComment()'>send</button>
          </div>
        </div>
      </div>
    </header>

      <!-- MODAL -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Generate Certificate</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Customer PO</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="crnnumber" id='PO' value="{{customerPO}}">
                    </div>
                </div>
                <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>New Test Date</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="crnnumber" id='testDate' value="{{testDate}}">
                    </div>
                </div>
                <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Tested By</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="crnnumber" id='Tester' value="{{testedBy}}">
                    </div>
                </div>
                <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>In Service?</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="crnnumber" id='inService' value="{{inService}}">
                    </div>
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" ng-click="update()">Update</button>
            </div>
          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html> -->
