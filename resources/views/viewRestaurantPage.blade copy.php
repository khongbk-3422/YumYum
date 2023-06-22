@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
    <link rel="stylesheet" href="{{asset('css/restaurantPage.css')}}">
</head>
<body>
    <div class="mainContainer">
        <!-- Sidemenu Starts -->
        <div class="sidemenu">
            <div class="searchBar">
                <input type="text" placeholder="Search here">
                <a href="">
                    <i class="fa fa-search"></i>
                </a>
            </div>

            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="mb-2">
                    <a href="#submenu1" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-utensils"></i>
                            <span class="ms-1 d-none d-sm-inline">Category</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="italianCB">
                                <label class="form-check-label mb-2" for="italianCB">Italian</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="japaneseCB">
                                <label class="form-check-label  mb-2" for="japaneseCB">Japanese</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="malaysianCB">
                                <label class="form-check-label  mb-2" for="malaysianCB">Malaysian</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="steakhouseCB">
                                <label class="form-check-label  mb-2" for="steakhouseCB">Steakhouse</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="thaiCB">
                                <label class="form-check-label  mb-2" for="thaiCB">Thai</label>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="mb-2">
                    <a href="#submenu2" class="nav-link px-0 align-middle ">
                        <i class="bi bi-currency-dollar"></i>
                        <span class="ms-1 d-none d-sm-inline">Price</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="price1CB">
                                <label class="form-check-label  mb-2" for="price1CB"> < RM80</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="price1CB">
                                <label class="form-check-label  mb-2" for="price1CB"> < RM200</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="price1CB">
                                <label class="form-check-label  mb-2" for="price1CB"> > RM500</label>
                            </div>
                        </li>

                    </ul>
                </li>

                <li class="mb-2">
                    <a href="#submenu3" class="nav-link px-0 align-middle">
                        <i class="bi bi-geo-alt"></i>
                        <span class="ms-1 d-none d-sm-inline">Location</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                        
                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="bintangCB">
                                <label class="form-check-label  mb-2" for="bintangCB">Bukit Bintang</label>
                            </div>
                        </li>
                        
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="damansaraCB">
                                <label class="form-check-label  mb-2" for="damansaraCB">Damansara</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="sentralCB">
                                <label class="form-check-label  mb-2" for="sentralCB">Jalan Stesen Sentral</label>
                            </div>
                        </li>
                        
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ismailCB">
                                <label class="form-check-label  mb-2" for="ismailCB">Jalan Sultan Ismail</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="razakCB">
                                <label class="form-check-label  mb-2" for="razakCB">Jalan Tun Razak</label>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidemenu End -->

        <!-- Top restaurant carousel Starts -->
        <div class="contentContainer">
            <div class="carouselContainer">
                <div class="title">
                    <h3>Top Recommend Restaurants</h3>
                </div>

                <div id="carouselExampleRide" class="carousel" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Iketeru Restaurant</h5>
                                    <p class="card-text text-muted">Japanese</p>
                                    <p class="rating">5.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest2.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Prime</h5>
                                    <p class="card-text text-muted">Steakhouse</p>
                                    <p class="rating">5.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest3.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Beta KL</h5>
                                    <p class="card-text text-muted">Malaysian</p>
                                    <p class="rating">5.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest4.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Chambers Grill</h5>
                                    <p class="card-text text-muted">Steakhouse</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest5.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Positano Risto</h5>
                                    <p class="card-text text-muted">Italian</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest6.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">JP Teres</h5>
                                    <p class="card-text text-muted">Malaysian</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest7.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Via Pre Kul</h5>
                                    <p class="card-text text-muted">Italian</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i></p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest8.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Tamarind Hill</h5>
                                    <p class="card-text text-muted">Thai</p>
                                    <p class="rating">4.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Top restaurant carousel End -->

            <!-- Restaurant Cards Start -->
            <div class="restContainer">
                <div class="title">
                    <h3>Restaurants in Kuala Lumpur</h3>
                </div>

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('image/rest1.jpg')}}">
                                    </div>           
                                    <div class="carousel-item">
                                        <img src="{{asset('image/rest2.jpg')}}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('image/rest3.jpg')}}">
                                    </div>
                                </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Restaurant Name</h5>
                                <p class="card-text"><i class="bi bi-geo-alt"></i>Location</p>
                                <a <?php echo $_SERVER['REQUEST_URI'] === '/restaurantDetailsPage' ? 'active' : '' ?> href="/restaurantDetailsPage"><button class="viewRestBtn">View More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- test 2 -->
                <!-- <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('image/rest1.jpg')}}">
                                    </div>           
                                    <div class="carousel-item">
                                        <img src="{{asset('image/rest2.jpg')}}">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('image/rest3.jpg')}}">
                                    </div>
                                </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- Restaurant Cards End -->
        </div>
    </div>
</body>
    <script>
        //sidemnu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menulinks = document.querySelectorAll('#menu .nav-link');

            menulinks.forEach(function(link){
                link.addEventListener('click', function(event){
                    const submenu = this.nextElementSibling;
                    submenu.classList.toggle('show');
                    event.preventDefault();
                });
            });
        });

        $(document).ready(function() {
            //top restaurant card choser
            var carouselWidth = $('.carouselContainer .carousel-inner')[0].scrollWidth;
            var cardWidth = $('.carouselContainer .carousel-item').width();

            var scrollPosition = 0;

            $('.carouselContainer .carousel-control-next').on('click', function(){
                if(scrollPosition < (carouselWidth - (cardWidth * 4))){
                    scrollPosition = scrollPosition + cardWidth;
                    $('.carouselContainer .carousel-inner').animate({scrollLeft: scrollPosition}, 
                    600);
                }
            });

            $('.carouselContainer .carousel-control-prev').on('click', function(){
                if(scrollPosition > 0){
                    scrollPosition = scrollPosition - cardWidth;
                    $('.carouselContainer .carousel-inner').animate({scrollLeft: scrollPosition}, 
                    600);
                }
            });
    });
    </script>
</html>

@include('footer')