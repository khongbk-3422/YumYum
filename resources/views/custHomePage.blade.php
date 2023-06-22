@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')
    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .carousel-item {
            height: 100vh;
            min-height: 300px;
        }

        .carousel-caption {
            bottom: 220px;
            z-index: 2;
        }

        .carousel-caption h5 {
            font-size: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-top: 25px;
        }

        .carousel-caption p {
            width: 60%;
            margin: auto;
            font-size: 18px;
            line-height: 1.9;
        }

        .w-100{
            height: 100vh;
        }

		/* Services */
        .card-body p{
            font-size:16px;
        }

		.row{
			padding:15px;
		}

		.row .title{
			text-align: left;
		}

		.row .card-title{
			font-size:25px;
			margin:10px;
		}

		.row .title i{
			font-size:25px;
			margin-left:8px;
			color: #706558;
		}

		.row .description{
			font-size: 17px;
			line-height: 1.5;
			text-align: justify;
		}

		.row .image1, .image3{
			float:left;
			width:350px;
			height:280px;
			margin-right:20px;
		}

		.row .image2{
			float:right;
			width:350px;
			height:280px;
			margin-left:20px;
		}

        .section-padding{
            padding : 30px 0;
        }

		/* teams */
		.team .card-body i {
			font-size: 20px;
		}

    </style>
    <title>Customer Home Page</title>
</head>

<body>
    <!-- Image Slider start-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="d-block w-100" src="{{ asset('video/video1.mp4') }}" autoplay loop muted></video>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg1.jpg') }}" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Looking for good food?</h5>
                    <p>You are at the right place!</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg2.jpg') }}" alt="Third slide">
                <div class="carousel-caption">
                    <h5>Yum Yum</h5>
                    <p>Discover the finest restaurants just for you</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg3.jpg') }}" alt="Fourth slide">
                <div class="carousel-caption">
                    <h5>Trustworthy Dining Suggestions</h5>
                    <p>Your go-to source for reliable dining suggestions</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg4.jpg') }}" alt="Fifth slide">
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
    <!-- Image Slider end-->

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
				<div class="col-md-12">
					<img src="{{('image/img2.jpg')}}" class="image1">
						<div class="title">
							<h3 class="card-title">Verified Review <span><i class="bi bi-patch-check"></i></span></h3>
						</div>
					<p class="description">
					Embark on a culinary journey with us, where our dedicated team goes the extra mile to curate only the most authentic and unbiased feedback from genuine diners. 
					We understand the importance of trust when it comes to choosing the perfect dining spot, and that's why we take pride in providing you with a reliable platform. 
					Rest assured that every review you encounter has been meticulously verified, giving you the confidence to explore new flavors and savor remarkable dining experiences. 
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<img src="{{('image/img3.jpg')}}" class="image2">
						<div class="title">
							<h3 class="card-title">Reliable <span><i class="bi bi-award"></i></span></h3>
						</div>
					<p class="description">
						Uncover a culinary wonderland where the crème de la crème of restaurants awaits. Our community-driven platform brings you the ultimate dining experience, presenting you with the 
						best of the best based on authentic ratings and rankings. Immerse yourself in the wisdom of our discerning members, who have painstakingly shared their feedback to 
						ensure you make choices that truly delight your taste buds. From hidden gems to renowned establishments, 
						we curate a handpicked selection of highly regarded eateries that are guaranteed to elevate your dining adventures. 
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<img src="{{('image/img4.jpg')}}" class="image3">
						<div class="title">
							<h3 class="card-title">User-Friendly <span><i class="bi bi-stars"></i></span></h3>
						</div>
					<p class="description">
					Indulge in a hassle-free dining exploration with our platform's seamless and user-friendly features. Effortlessly navigate through a plethora of restaurant options, 
					conveniently filter them based on your preferences, and discover the perfect place to satisfy your cravings. Our intuitive interface empowers you to effortlessly embark 
					on a culinary adventure, making the process of finding your ideal dining destination an absolute breeze. 
					With just a few clicks, you'll unlock a world of delectable possibilities and embark on a journey filled with mouthwatering delights. 
					</p>
				</div>
			</div>
		</div>
	</section>
    <!-- services section Ends -->

    <!-- team section starts -->
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
							<p class="card-text">A creative marketing genius who spearheads our branding and promotional efforts. With his deep understanding of consumer behavior, he effectively communicates the value of our system, captivating and engaging our audience.</p>
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
    <!-- team section ends -->

</body>
</html>
@include('footer')

