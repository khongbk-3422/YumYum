<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
	<link href="{{ asset('css/styleHome.css') }}" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-warning">Yum</span>Yum</a> 
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#team">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#login">Login</a>
						<!-- direct to login page -->
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#signup">SignUp</a>
						<!-- direct to sgnup page -->
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('image/bkg1.jpg') }}" alt="First slide">
                <div class="carousel-caption">
                    <h5>Looking for good food?</h5>
                    <p>You are at the right place!</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg2.jpg') }}" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Yum Yum</h5>
                    <p>Discover the finest restaurants just for you</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg3.jpg') }}" alt="Third slide">
                <div class="carousel-caption">
                    <h5>Trustworthy Dining Suggestions</h5>
                    <p>Your go-to source for reliable dining suggestions</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg4.jpg') }}" alt="Fourth slide">
				<div class="carousel-caption">
                    <h5>Your Perfect Dining Destination</h5>
                    <p>Find the ideal restaurant to satisfy your appetite and culinary preferences.</p>
                </div>
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- about section starts -->
	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="about-img"><img alt="" class="img-fluid" src="{{('image/img1.jpg')}}"></div>
				</div>
				<div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>Discover the Perfect<br>
						Dining Experience</h2>
						<p>We, YumYum revolutionizes the way you explore culinary delights. 
                            Find top-rated restaurants, personalized recommendations, exclusive deals, easy reservations, and exciting cuisine exploration, all at your fingertips. Start your gastronomic journey with us today!</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- about section Ends -->

	<!-- services section Starts -->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-3">
						<h2>Why Choose Us?</h2>
						<p>We provide trusted reviews, ranked recommendations, and a user-friendly interface,<br>
						ensuring you find the best restaurants effortlessly.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-center">
						<div class="card-body">
                            <i class="bi bi-patch-check"></i>
							<h3 class="card-title">Verifed Review</h3>
							<p> Our dedicated team ensures that only genuine and unbiased feedback from real diners is included, giving you confidence in the reliability of the information. </p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-center">
						<div class="card-body">
                            <i class="bi bi-award"></i>
							<h3 class="card-title">Reliable</h3>
							<p>Discover the best restaurants based on authentic ratings and rankings from our community, ensuring you choose from highly regarded dining establishments.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-center">
						<div class="card-body">
                            <i class="bi bi-stars"></i>
							<h3 class="card-title">User-Friendly</h3>
							<p>A seamless and user-friendly features let you to effortlessly navigate through restaurant options, filter by preferences, and find the perfect place to dine.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- services section Ends -->

	<!-- team starts -->
	<section class="team section-padding" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-3">
						<h2>Our Team</h2>
						<p>Meet our dedicated team of passionate individuals who are committed to revolutionizing the way you discover and explore restaurants. <br>
						With a shared love for food and technology, we work tirelessly to bring you the best restaurant finder experience possible.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('image/jonas.jpg') }}">
							<h3 class="card-title py-2">Jonas (CEO)</h3>
							<p class="card-text">The visionary leader. With extensive experience in the tech industry and a passion for culinary excellence, he guides the team towards creating an innovative platform that connects food lovers with their perfect dining experiences.</p>
							<p class="socials"><i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('image/leon.jpg') }}">
							<h3 class="card-title py-2">Leon (CMO)</h3>
							<p class="card-text">A creative marketing genius who spearheads our branding and promotional efforts. With his deep understanding of consumer behavior, he effectively communicates the value of our restaurant finder system, captivating and engaging our audience.</p>
							<p class="socials"><i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('image/camilia.jpg') }}">
							<h3 class="card-title py-2">Camilia (CFO)</h3>
							<p class="card-text">Wealth of financial expertise bringer to the team. With a keen eye for numbers and a strategic mindset, she ensures the financial stability and growth of our restaurant finder system, enabling us to provide exceptional services to our users.</p>
							<p class="socials"><i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('image/aurora.jpg') }}">
							<h3 class="card-title py-2">Aurora (COO)</h3>
							<p class="card-text">The driving force behind the operational efficiency of our system. With a focus on seamless user experiences and processes, she ensures that our platform is user-friendly, reliable, and continuously improving to meet the needs of our users.</p>
							<p class="socials"><i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- team ends -->

	@include('newFooter')

</body>
</html>
