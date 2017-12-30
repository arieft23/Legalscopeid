<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Legalscope</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
	.navbar{
		margin-bottom:0;
	}

	.jumbotron .image{
		margin-bottom: 0px;
		opacity: 0.2;
		color: #fff;
		background: #000 url("http://www.oamlaw.com/wp-content/uploads/2014/02/handshake.jpg") top center no-repeat;
		width: 100%;
		height: 100%;
		background-size: cover;
		overflow: hidden;
		position:absolute;
		top:0;
		left:0;
		z-index:1;
	}

	.jumbotron h1{
		margin-top: 0;
	}

	.jumbotron{
		position: relative;
		padding-top:50px;
		padding-bottom:50px;
	}

</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">LegalScope</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#service">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Our Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div style="padding: 25px" class="jumbotron" id="home">
		<div class="image"></div>
		<div class="container text-center">
			<h1 style="padding: 50px">LegalScope</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet cursus sem. Sed sagittis lacus sit amet erat tincidunt egestas. In elementum velit lacus, eu consequat justo vulputate dignissim. Vestibulum finibus dui ac accumsan blandit. Pellentesque varius augue at sapien lobortis mattis. Donec maximus vitae dolor ultrices condimentum. Nunc eget arcu vel leo ornare sagittis. Suspendisse at tincidunt nibh. Curabitur consequat lacus rutrum nisi rhoncus iaculis. Donec vulputate nisi eget felis viverra, semper suscipit sapien consequat. Praesent ullamcorper maximus porttitor. Donec nec semper leo, non fermentum ligula.</p>
		</div>
	</div>
	<div style="padding: 25px" id="service">
		<center><h1 style="padding: 50px"><kbd>Services</kbd></h1></center>
		<center>
			<div class="row container">
				<div class="col-sm-4">
					<img style="height: 150px" class="img-responsive" src="https://cdn.pixabay.com/photo/2013/07/13/11/32/law-158356_960_720.png">
					<br><br><br>
					<h3>Konsultasi Hukum</h3>
				</div>
				<div class="col-sm-4">
					<img style="height: 150px" class="img-responsive" src="https://lh5.googleusercontent.com/dNZqdtnTXqc9Rg9L7hWz0gOoNZSdTQGpMMb_DoGAzB98raModrxw29ufjAy7M3Th_ro5kBx88OD6YuZYsVu1X6w6lBtT4Pq49iZ9K2ESTz1SsAKLgpkMN28N4E6iivIC0A=s800">
					<br><br><br>
					<h3>Dokumentasi Hukum</h3>
				</div>
				<div class="col-sm-4">
					<img style="height: 150px" class="img-responsive" src="http://cdn.mysitemyway.com/icons-watermarks/simple-black/ocha/ocha_activity-training/ocha_activity-training_simple-black_512x512.png">
					<br><br><br>
					<h3>Training Center</h3>
				</div>
			</div>
		</center>
	</div>
	<div style="padding: 25px" id="about">
		<center><h1 style="padding: 50px"><kbd>About Us</kbd></h1></center>
		<div class="container">
			<blockquote>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet cursus sem. Sed sagittis lacus sit amet erat tincidunt egestas. In elementum velit lacus, eu consequat justo vulputate dignissim. Vestibulum finibus dui ac accumsan blandit. Pellentesque varius augue at sapien lobortis mattis. Donec maximus vitae dolor ultrices condimentum. Nunc eget arcu vel leo ornare sagittis. Suspendisse at tincidunt nibh. Curabitur consequat lacus rutrum nisi rhoncus iaculis. Donec vulputate nisi eget felis viverra, semper suscipit sapien consequat. Praesent ullamcorper maximus porttitor. Donec nec semper leo, non fermentum ligula.</p>
				<footer>from lorem ipsum</footer>
			</blockquote>
		</div>
	</div>
	<div style="padding: 25px" id="contact">
		<center><h1 style="padding: 50px"><kbd>Our Contact</kbd></h1></center>
		<div class="row">
			<div class="col-sm-6">
				<h3>Our Location</h3>
				<div id="googleMap" style="height:400px;width:100%;"></div>
				<script>
					function myMap() {
						var myCenter = new google.maps.LatLng(-6.369058, 106.831989);
						var mapProp = {center:myCenter, zoom:16, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
						var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
						var marker = new google.maps.Marker({position:myCenter});
						marker.setMap(map);
					}
				</script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhW66WRzktTgem_lFMANh-UxjzxHZk9JA&callback=myMap"></script>
			</div>
			<div class="col-sm-6">
				<h5>Contact us and we'll get back to you within 24 hours.</h5>

				<p style="padding: 5px"><img style="height: 30px; float: left" class="img-responsive" src="http://images.clipartpanda.com/google-location-icon-location_black.png"/>Jakarta, Indonesia</p>
				<p style="padding: 5px"><img style="height: 30px; float: left" class="img-responsive" src="http://vignette1.wikia.nocookie.net/risk-of-rain/images/3/34/Mobile_Icon.png/revision/latest?cb=20140917085404"/> +62 1515151515</p>
				<p style="padding: 5px"><img style="height: 30px; float: left" class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Aiga_mail.svg/2000px-Aiga_mail.svg.png"/> myemail@something.com</p>


				<div class="row">
					<div class="col-sm-6 form-group">
						<input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
					</div>
					<div class="col-sm-6 form-group">
						<input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
					</div>
				</div>
				<textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
				<div class="row">
					<div class="col-sm-12 form-group">
						<button class="btn btn-default pull-right" type="submit">Send</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
      	scrollTop: $(hash).offset().top
      }, 800, function(){
      	
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
    });
    } // End if
});
});
</script>
</html>