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
                        
                            <!-- <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="price1CB">
                                <label class="form-check-label  mb-2" for="price1CB"> < RM80</label>
                            </div> -->
                        <div class="listwrapper">
                            <div class="priceinput">
                                <div class="field">
                                    <span>MIN</span>
                                    <input type="number" name="min_price" value="100">
                                </div>

                                <div class="seperator">-</div>

                                <div class="field">
                                    <span>MAX</span>
                                    <input type="number" name="max_price" value="500">
                                </div>
                            </div>

                            <div class="slider">
                                <div class="amount"></div>
                            </div>
                            <div class="pricerange">
                                <input type="range" class="minrange" min="0" max="800" value="100" name="min_price_range">
                                <input type="range" class="maxrange" min="0" max="800" value="500" name="max_price_range">
                            </div>
                        </div>
                            
                        

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
            <!-- Loop from database -->
            <div class="restContainer">
                <div class="title">
                    <h3>Restaurants in Kuala Lumpur</h3>
                </div>

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-3">
                            <img src="{{asset('image/rest1.jpg')}}" alt="">
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

    const priceInput = document.querySelectorAll(".priceinput input"),
    
    priceRange = document.querySelectorAll(".slider .amount");

    let priceGap = 100;

    priceInput.forEach(input =>{
        input.addEventListener("input", e =>{
            let minVal = parseInt(priceInput[0].val),
                maxVal = parseInt(priceInput[1].val);

            if(maxVal - minVal < priceGap){
                if(e.target.className === "minrange"){
                    priceInput[0].value = maxVal - priceGap;
                }
                else{
                    priceInput[1].value = minVal + priceGap;
                }
            }
            else{
                priceRange.style.left = (minVal / priceInput[0].max) * 100 + "%";
                priceRange.style.right = 100 - (maxVal / priceInput[1].max) * 100 + "%";
            }

            // let percent = (minVal / priceInput[0].max) * 100;
            // console.log(minVal, maxVal);
        });
    });
    </script>
</html>

@include('footer')