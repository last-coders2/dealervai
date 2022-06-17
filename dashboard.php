<?php 
  include "header.php";
?>
<!----
<div class="box container">
  <div class="row">
    <div class="col-md-3 bg">
      <p>Total Customer</p>
      <p>132</p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3 bg">
      <p>Total Product</p>
      <p>134</p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-3 bg">
      <p>Total Supplier</p>
      <p>352</p>
    </div>
  </div>
</div>
--->
<div class="product container mt-4">
  <div class="row">
    <div class="col-md-5 p_partone">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Product Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="lowstockproduct.php">Low Stock Items</a></td>
            <td>25</td>
          </tr>
          <tr>
            <td>All Item Groups</td>
            <td>49</td>
          </tr>
          <tr>
            <td>All Items</td>
            <td>360</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-1"></div>
    <div  class="col-md-6  p_partone">
      <table class="table">
        <thead>
          <tr>
            <th scope="col linkfixed"><a href="topsellingproduct.php">TOP SELLING ITEMS</th>
            <th scope="col nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
           
            </th>
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
    </div>
  </div>
</div>
<!---->
<!---->
<div class="product container">
  <div class="row">
    <div  class="col-md-4  p_partone">
      <table class="table">
        <thead>
          <tr>
            <th scope="col"><a href="PURCHASEORDER.php">PURCHASE ORDER</a></th>
            <th scope="col nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
           
            </th>
          </tr>
        </thead>
        <tbody>

       </tbody>
      </table>
    </div>
    <div class="col-md-1"></div>
    <div  class="col-md-7  p_partone">
      <table class="table">
        <thead>
          <tr>
            <th scope="col"><a href="SALESORDER.php">SALES ORDER</a></th>
            <th scope="col nav-item dropdown">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
           
            </th>
          </tr>
        </thead>
        <tbody>
    <tr>
      
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
      </table>
    </div>
  </div>
</div>
<!---->
<!------>
<div class="charts container">
  <div class="row">
    <div class="col-lg-12">
      <canvas id="myCanvas" width="700" height="500" style="border:1px solid #d3d3d3;background-color: white">
<script type="application/javascript">
  

  var data = [{'Product 1': 90}, {'Product 2': 80}, {'Product 3': 65}, {'Product 4': 110}, {'Product 5': 55}];
  var barcolor = ['#5c5fff', '#bb48e6', '#f12bc3', '#ff1f9c', '#ff3c75', '#ff6250', '#ff862d', '#ffa600', '#4CAF75', '#ff7354', '#ff8044'];
  var obj = {
        barId: 'myCanvas', // Need To pass canvas id  and mandatory to generate the bar graph
        barData: data, // Bar data in the form of array of object and mandatory to pass atleast 1 value
        barColour: barcolor, // Bar colour as array and the default value is '#020202'
        barStroke: 40, // Bar Stroke as per your requirement and the default value is 50
        barSpaces: 80, // Space between 2 bar graph and the default value is 80
        barInnerPadding: 80, // Padding inside all side of the canvas and the default value is 80
        barDivisionPositionFromLineX: 20, // X-Axis division position from left side of the bar graph and the deafult value is 20
        barDivisionPositionFromLineY: 20, // Y-Axis division position from bottom side of the bar graph and the deafult value is 20
        barAnimation: true, // Used to define the animation from the bottom to top position and the default value is true
        barAnimationSpeed: 1, // Define the animation spedd of the graph and the default value is 1
        barTextFont: "14px Arial", // Define font size with font family name and the default value is 14px Arial
        barDivision: 5, // Define the division to the Y-Axis and the default value is 5
        barScaleDivisionReqX: true, // Define the scale division marking to the X-Axis and the default value is true
        barScaleDivisionReqY: true, // Define the scale division marking to the Y-Axis and the default value is true
        barScaleDivisionY: 20, // Define the manually setup the Y-Axis division upto the highest value of your array default value is null 
        barScaleDivisionStroke: 1, //Define the stroke of scale division and the default value is 1
        barScaleDivisionColour: '#333', //Define the stroke colour of the scale division and the default value is #333
        barAxisLineStroke: 2, //Define the stroke of the X & Y-Axis line and the default value is 1
        barAxisLineColour: '#333', //Define the stroke colour of the X & Y-axis line and the default value is #333
        barMaxHeight: 120 // Define the maximum height of the Y-Axis line of the bar graph and the default value is null
      };
  
  generateBarGraph(obj);
  
</script>
    </div>
  </div>
</div>
