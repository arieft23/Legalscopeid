<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

	.navbar-brand{
		height: 80px;
	}

	.nav li a{
		padding-top: 30px;
		padding-bottom: 30px;
	}

	.navbar-toggle{
		padding: 10px;
		margin : 25px 15px 25px 0px;
	}

</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navbar-expand-lg">
		<div class="container">
			<div class="navbar-header">
				<button style="padding: auto" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#home" class="navbar-brand"><img src="icon.png"></a>
			</div>
			<div class="collapse navbar-collapse" data-toggle="collapse" data-target="#navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
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
			<h1 style="padding-top: 100px; padding-bottom: 30px">LEGALSCOPE</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet cursus sem. Sed sagittis lacus sit amet erat tincidunt egestas. In elementum velit lacus, eu consequat justo vulputate dignissim. Vestibulum finibus dui ac accumsan blandit. Pellentesque varius augue at sapien lobortis mattis. Donec maximus vitae dolor ultrices condimentum. Nunc eget arcu vel leo ornare sagittis. Suspendisse at tincidunt nibh. Curabitur consequat lacus rutrum nisi rhoncus iaculis. Donec vulputate nisi eget felis viverra, semper suscipit sapien consequat. Praesent ullamcorper maximus porttitor. Donec nec semper leo, non fermentum ligula.</p>
		</div>
	</div>
	<div style="padding: 25px" id="service">
		<center><h1 style="padding: 50px"><kbd>Services</kbd></h1></center>
		<center>
			<div class="row container">
				<div class="col-sm-4">
					<img style="height: 150px" class="img-responsive" src="law.png">
					<br><br><br>
					<h3>Konsultasi Hukum</h3>
				</div>
				<div class="col-sm-4">
					<img style="height: 150px" class="img-responsive" src="book.png">
					<br><br><br>
					<h3>Dokumentasi Hukum</h3>
				</div>
				<div class="col-sm-4">
					<img style="height: 150px" class="img-responsive" src="training.png">
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
		<div style="padding: 50px" class="row container-fluid">
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
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("a").on('click', function(event) {

			
			if (this.hash !== "") {
				
				event.preventDefault();

				
				var hash = this.hash;

				
				$('html, body').animate({
					scrollTop: $(hash).offset().top
				}, 800, function(){

					
					window.location.hash = hash;
				});
    } // End if
});
	});
</script>
</html>