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
            <!-- Need form mah? Cuz need to get the search value -->
            <div class="searchBar">
                <input type="text" id="searchInput" placeholder="Search here">
                <a href="#" id="searchButton"><i class="fa fa-search"></i></a>
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
                        <div class="listwrapper">
                            <div class="rangeinput">
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
                                <input type="range" class="minrange" min="0" max="1000" value="100" name="min_price_range" step="50">
                                <input type="range" class="maxrange" min="0" max="1000" value="500" name="max_price_range" step="50">
                            </div>

                            <div class="confirmbutton">
                                <!-- need to retrieve the price value and find from databse-->
                                <button><a href="">View</a></button>
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
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Iketeru Restaurant</h5>
                                    <p class="card-text text-muted">Japanese</p>
                                    <p class="rating">5.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        <span class="custrateqty">(43)</span>
                                    </p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest2.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Prime</h5>
                                    <p class="card-text text-muted">Steakhouse</p>
                                    <p class="rating">5.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        <span class="custrateqty">(31)</span>
                                    </p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest3.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Beta KL</h5>
                                    <p class="card-text text-muted">Malaysian</p>
                                    <p class="rating">5.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                        <span class="custrateqty">(26)</span>
                                    </p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest4.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Chambers Grill</h5>
                                    <p class="card-text text-muted">Steakhouse</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                        <span class="custrateqty">(22)</span>
                                    </p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest5.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Positano Risto</h5>
                                    <p class="card-text text-muted">Italian</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                        <span class="custrateqty">(31)</span>
                                    </p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest6.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">JP Teres</h5>
                                    <p class="card-text text-muted">Malaysian</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                        <span class="custrateqty">(25)</span>
                                    </p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest7.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Via Pre Kul</h5>
                                    <p class="card-text text-muted">Italian</p>
                                    <p class="rating">4.5 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i>
                                        <span class="custrateqty">(27)</span>
                                    </p>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:13rem;">
                                <img src="{{ asset('image/rest8.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Tamarind Hill</h5>
                                    <p class="card-text text-muted">Thai</p>
                                    <p class="rating">4.0 <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i>
                                        <span class="custrateqty">(21)</span>
                                    </p>
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
                @foreach ($datas as $data)
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="data:image/[image_format];base64,{{ $data->data_pic }}" alt="">
                            </div>

                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data['rest_name']}}</h5>
                                        <p class="rating">{{ $data['avg_rate']}} 
                                            @if ($data['avg_rate'] == 5)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 4.15 && $data['avg_rate'] < 5)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> 
                                            @elseif ($data['avg_rate'] >= 3.85 && $data['avg_rate'] < 4.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 3.15 && $data['avg_rate'] < 3.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 2.85 && $data['avg_rate'] < 3.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 2.15 && $data['avg_rate'] < 2.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 1.85 && $data['avg_rate'] < 2.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 1.15 && $data['avg_rate'] < 1.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 0.85 && $data['avg_rate'] < 1.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-light fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 1.15 && $data['avg_rate'] < 1.85)
                                                <i class="fa-solid fa-star-half-stroke"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @else
                                            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>  
                                            @endif
                                            <span class="custrateqty">({{ $data['count']}})</span>
                                        </p>
                                    <p class="card-text"><i class="bi bi-geo-alt"></i>{{ $data['rest_address'] }}</p>
                                    <a href={{"restaurantDetailsPage/".$data['rest_id']}}><button class="viewRestBtn">View More</button></a>
                                    <button class="addRestBtn">Add to spin wheel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Restaurant Cards End -->
        </div>
    </div>
</body>
    <script>
        //search function
        var searchInput = document.getElementById('searchInput');
        var searchButton = document.getElementById('searchButton');
        searchButton.addEventListener('click', function() {
            performSearch();
        });

        searchInput.addEventListener('keyup', function(event) {
            // Check if the Enter key was pressed (key code 13)
            if (event.keyCode === 13) {
                performSearch();
            }
        });

        function performSearch() {
            var searchValue = searchInput.value;
            window.location.href = 'filter/' + encodeURIComponent(searchValue);
        }

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

        //top recommend restaurant card choser
        $(document).ready(function() {
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

    // price changes with entered price
    const priceRange = document.querySelectorAll(".pricerange input"),
            rangeInput = document.querySelectorAll(".rangeinput input"),
            amount = document.querySelector(".slider .amount");

    let priceGap = 100;

    rangeInput.forEach(input =>{
        input.addEventListener("input", e =>{
            //get 2 inputs value
            let minPrice = parseInt(rangeInput[0].value),
                maxPrice = parseInt(rangeInput[1].value);

            if ((maxPrice - minPrice >= priceGap) && maxPrice <= 1000){
                if(e.target.className === "min_price"){
                    priceRange[0].value = minPrice;
                    amount.style.left = (minPrice / priceRange[0].max) * 100 + "%";
                }
                else{
                    priceRange[1].value = maxPrice;
                    amount.style.right = 100 - (maxPrice / priceRange[1].max) * 100 + "%";
                }
            }
        });
    });

    //slider value change with slided value
    priceRange.forEach(input =>{
        input.addEventListener("input", e =>{
            let minPrice = parseInt(priceRange[0].value),
                maxPrice = parseInt(priceRange[1].value);

            if (maxPrice - minPrice < priceGap){
                if(e.target.className === "minrange"){
                    priceRange[0].value = maxPrice - priceGap;
                }
                else{
                    priceRange[1].value = minPrice + priceGap;
                }
                
            }
            else{
                rangeInput[0].value = minPrice;
                rangeInput[1].value = maxPrice;
                amount.style.left = (minPrice / priceRange[0].max) * 100 + "%";
                amount.style.right = 100 - (maxPrice / priceRange[1].max) * 100 + "%";
                // console.log(minPrice, maxPrice)
            }
        });
    });



    </script>
</html>

@include('footer')