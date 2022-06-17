<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="https://kit.fontawesome.com/3b83a3096d.js" crossorigin="anonymous"></script>
<script type="application/javascript" src="js/rbar.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<body>

<nav class="navbar navbar-expand-lg">
  <div class="container">
  	   <i class="fas fa-bars fixed" style="color: white" onclick="openside()"></i>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link memu2" href="entry.php">Entry</a>
        </li>
        <li class="nav-item">
          <a class="nav-link memu2" href="catalogue.php">Product List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  memu2"  href="inventory.php">Inventory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link memu2"  href="customer_details.php">Customer Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link memu2"  href="report.php">Report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  memu2"  href="trash.php">Trash</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

	<div class="sidenav" id="sidenav">
		<div class="profile">
			<img src="img/tom.png">
			<h5>Nahid Hasan</h5>
			<h6>Dhaka</h6>
		</div>
		<ul>
			<li class="f1">
				<a href="http://localhost/dealervai/dashboard.php">Dashboard</a>
			</li>
			<li>
				<a href="">Administration</a>
			</li>
			<li>
				<a href="">Support</a>
			</li>
			<li>
				<a href="">Notes</a>
			</li>
			<li>
				<a href="">Feedback</a>
			</li>
		</ul>
	</div>




<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="js/dash_script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>