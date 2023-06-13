@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .carousel-item {
            height: 95vh;
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

        /* darken the image
        .carousel-inner:before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(53, 52, 52, 0.7);
            z-index: 1;
        }
        */

        .w-100{
            height: 100vh;
        }

        .section-padding{
            padding : 30px 0;
        }

        .cardContainer{
            width:100%;
            padding : 0 16px;
        }

        .cardContainer .title{
            text-align:center;
            padding: 10px;
        }

        .card{
            transition: transform 0.2s;
        }

        .card:hover{
            transform: scale(1.1);
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

    <!-- Restaurant section starts-->
    <section class="restaurantExample section-padding" id = "restaurantExp">
        <div class="cardContainer">
            <div class="title">
                <h3>Top Recommended Restaurant <i class="fa-regular fa-thumbs-up"></i></h3>
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card">
                <img src="{{ asset ('image/rest1.jpg') }}" class="card-img-top" alt="Ishin Japanese Dining">
                <div class="card-body">
                    <h5 class="card-title">Ishin Japanese Dining</h5>
                    <p class="card-text">Located along the busy Old Klang Road in a building by itself, Ishin has made a name for itself for its genuine Japanese and Kaiseki-style cuisine.</p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="{{ asset ('image/rest2.jpg') }}" class="card-img-top" alt="Positano Risto">
                <div class="card-body">
                    <h5 class="card-title">Positano Risto</h5>
                    <p class="card-text">Ranked KL's Top #2 Restaurant, Positano Risto captures the essence of Italian cuisine and culture, transporting guests to the vibrant streets of Positano.</p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="{{ asset('image/rest3.jpg') }}" class="card-img-top" alt="Beta KL">
                <div class="card-body">
                    <h5 class="card-title">Beta KL</h5>
                    <p class="card-text">Located in the heart of Kuala Lumpur, Beta KL is well-known for its modern Malaysian gastronomy and highlighting seasonal and locally sourced ingredients.</p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="{{ asset('image/rest4.jpg') }}" class="card-img-top" alt="Chambers Grill">
                <div class="card-body">
                    <h5 class="card-title">Chambers Grill</h5>
                    <p class="card-text">Located in Kuala Lumpur, Chambers Grill  offers an innovative grill menu of prime aged meat cuts or fresh seafood cooked over lava stone or charcoal. </p>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Restaurant section ends -->

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
    <!-- team section ends -->

</body>
</html>
@include('newFooter')

