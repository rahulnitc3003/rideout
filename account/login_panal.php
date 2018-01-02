<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RideOut</title>
	<link rel="shortcut icon" href="../images/favicon.png" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
		.myLink {display:block}
		html {
			background: url(https://www.w3schools.com/w3images/london2.jpg) no-repeat center fixed; 
		  background-size: cover;
		}
	</style>
	<script>
		// Tabs
		function openLink(evt, linkName) {
		  var i, x, tablinks;
		  x = document.getElementsByClassName("myLink");
		  for (i = 0; i < x.length; i++) {
			  x[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink");
		  for (i = 0; i < x.length; i++) {
			  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
		  }
		  document.getElementById(linkName).style.display = "block";
		  evt.currentTarget.className += " w3-red";
		}
		// Click on the first tablink on load
		document.getElementsByClassName("tablink")[0].click();
	</script>
</head>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="#"><img src="../images/logo.jpg" height="30" width="80" /></a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="user_profile.php">Profile</a></li>
				<li><a href="../logout.php">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>

<body>
	<div class="bgimg">
		<div class="w3-display-middle" style="width:60%">
			<div class="w3-bar w3-black">
			  <button class="w3-bar-item w3-button tablink w3-red" onclick="openLink(event, 'add');"><i class="fa fa-car w3-margin-right"></i>Add Journey</button>
			  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'update');"><i class="fa fa-car w3-margin-right"></i>Update Journey</button>
			  <!--button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'book');"><i class="fa fa-list w3-margin-right"></i>Booking List</button-->
			  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'confirm');"><i class="fa fa-list w3-margin-right"></i>Check Bookings</button>
			</div>
	
			<div id="add" class="w3-container w3-white w3-padding-16 myLink" style="display: block;">
			  <h3>Travel the world with new friends</h3>
			  <p>Share your car with friendly people around you</p>
			  <p></p>
			  <p><a href="add_journey.php"><button class="w3-button w3-dark-grey">Add</button></a></p>
			</div>

			<div id="update" class="w3-container w3-white w3-padding-16 myLink" style="display: none;">
			  <h3>Made Some Mistake?</h3>
			  <p>Don't Worry.Make changes to your journey.</p>
			  <p><a href="update_journey.php"><button class="w3-button w3-dark-grey">Update</button></a></p>
			</div>

			<div id="confirm" class="w3-container w3-white w3-padding-16 myLink" style="display: none;">
			  <h3>Hurray!!!! People wants to ride with you</h3>
			  <p>Confirm bookings for as many as you can. We'll say sorry to those who aren't confirmed.</p>
			  <p><a href="confirm_booking_panal.php"><button class="w3-button w3-dark-grey">Find List</button></a></p>
			</div>
		</div>
		  <div class="w3-display-bottomleft w3-padding-large">
			<p style="color:white">Copyright© <script>document.write(new Date().getFullYear())</script>&nbsp;Team RideOut. All Rights Reserved.</p>
		  </div>
	</div>
</body>
</html>
