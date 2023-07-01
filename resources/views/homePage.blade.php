<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Home Page</title>
	<link href="{{ asset('css/styleHome.css') }}" rel="stylesheet">
	@include('cdn')
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
						<a class="nav-link" href="/loginPage">Login / SignUp</a>
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
                            Find top-rated restaurants, personalized recommendations, exclusive deals, easy reservations, and exciting cuisine exploration, all at your fingertips. 
							Start your gastronomic journey with us today!
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    <!-- about section Ends -->

	<!-- choose us section Starts -->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-3">
						<h2>Why Choose Us?</h2>
						<p class="justification">We provide trusted reviews, ranked recommendations, and a user-friendly interface,<br>
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
    <!-- choose us  section Ends -->

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
        
            <!-- circle design -->
            <div class="teamcontainer">
                <div class="icon">
                    <div class="imagebox active" style="--i:1;" data-id="content1">
                        <img src="{{asset('image/jonas.jpg')}}">
                    </div>

                    <div class="imagebox" style="--i:2;" data-id="content2">
                        <img src="{{asset('image/leon.jpg')}}">
                    </div>

                    <div class="imagebox" style="--i:3;" data-id="content3">
                        <img src="{{asset('image/camilia.jpg')}}">
                    </div>

                    <div class="imagebox" style="--i:4;" data-id="content4">
                        <img src="{{asset('image/aurora.jpg')}}">
                    </div>
                </div>

                <div class="teaminfo">
                    <div class="contentbox active" id="content1">
                        <div class="card">
                            <div class="imagebox">
                                <img src="{{asset('image/jonas.jpg')}}">
                            </div>
                            <div class="intro">
                                <h2>Jonas<br> <span>CEO</span></h2>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contentbox" id="content2">
                        <div class="card">
                            <div class="imagebox">
                                <img src="{{asset('image/leon.jpg')}}">
                            </div>
                            <div class="intro">
                                <h2>Leon<br> <span>CMO</span></h2>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="contentbox" id="content3">
                        <div class="card">
                            <div class="imagebox">
                                <img src="{{asset('image/camilia.jpg')}}">
                            </div>
                            <div class="intro">
                                <h2>Camilia<br> <span>CFO</span></h2>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contentbox" id="content4">
                        <div class="card">
                            <div class="imagebox">
                                <img src="{{asset('image/aurora.jpg')}}">
                            </div>
                            <div class="intro">
                                <h2>Aurora<br> <span>COO</span></h2>
                                <ul class="socialicons">
                                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>

        <!-- hover card design -->
        <div class="teamcontainer2">
            <div class="card">
                <div class="lines"></div>
                <div class="imagebox">
                    <img src="{{asset('image/jonas.jpg')}}" alt="">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Jonas</h2>
                        <p>CEO: Our visionary leader ignites the path to success, orchestrating innovation and inspiring greatness that skyrocket our company.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="lines"></div>
                <div class="imagebox">
                    <img src="{{asset('image/leon.jpg')}}" alt="">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Leon</h2>
                        <p>CMO: The creative genius behind our brand's allure, crafting captivating strategies that mesmerize and forge an unbreakable bond with customers.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="lines"></div>
                <div class="imagebox">
                    <img src="{{asset('image/camilia.jpg')}}" alt="">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Camilia</h2>
                        <p>CFO: The financial maestro who conducts the symphony of stability and growth, expertly managing our resources to ensure fiscal harmony.</p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="lines"></div>
                <div class="imagebox">
                    <img src="{{asset('image/aurora.jpg')}}" alt="">
                </div>
                <div class="content">
                    <div class="details">
                        <h2>Aurora</h2>
                        <p>COO: The operational virtuoso who orchestrates seamless efficiency, conducting a symphony of precision to deliver exceptional results.</p>
                    </div>
                </div>
            </div>
        </div>
	</section>
    <!-- team ends -->

    <script>
        let imagebox = document.querySelectorAll('.imagebox');
        let contentbox= document.querySelectorAll('.contentbox');

        for (let i = 0; i < imagebox.length; i++){
            imagebox[i].addEventListener('mouseover', function(){
                for (let i = 0; i < contentbox.length; i++){
                    contentbox[i].className = 'contentbox';
                }
                document.getElementById(this.dataset.id).className = 'contentbox active';
                
                for(let i = 0; i < imagebox.length; i++){
                    imagebox[i].className= 'imagebox';
                }
                this.className = 'imagebox active'
            
            })
        }
    </script>
</body>
</html>
@include('footer')
