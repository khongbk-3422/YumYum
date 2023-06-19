@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')

    <style>
         *{
            font-family: 'Raleway', sans-serif;
        }

        .mainContainer{
            display:flex;
            flex-wrap:wrap;
            justify-content: space-between;
            margin: 25px;
            margin-top:90px;
        }

        .contentContainer {
            flex: 1;
            display: flex;
            flex-direction: column;
            max-width: calc(100% - 260px);
            align-items:center;
        }

        /* Sidemenu */
        .sidemenu{
            background:#F8F8F8;
            margin: 20px 10px;
            box-shadow:0 3px 6px rgba(0, 0, 0, 0.3);
            border-radius:10px;
            padding: 20px;
            flex: 0 0 230px;
            height:110vh;
            align-items:center;
        }

        .searchBar{
            height:30px;
            display:flex;
            cursor:pointer;
            padding:5px 5px;
            border-radius:30px;
            align-items:center;
            box-shadow:0 5px 5px rgba(0, 0, 0, 0.3);
            margin:15px 0;
        }

        .searchBar:hover input{
            width:140px;
        }

        .searchBar input{
            width:0;
            outline:none;
            border:none;
            font-size:15px;
            transition:0.8s;
            background:transparent;
        }

        .searchBar a i{
            color:#C0B0A2;
            font-size:18px;
        }

        .sidemenu .nav-link i{
            font-size:18px;
            color:black;
            margin-right:10px;
        }

        .sidemenu .nav-link span{
            font-size:16px;
            color:#674D41;
        }

        .sidemenu .nav-link .fa-angle-down{
            font-size:20px;
            color:#A39087;
            margin-left:22px;
        }
        
        /* Carousel */
        .carouselContainer{
            max-width: 100%;
            margin-bottom:10px;
        }

        .carouselContainer .carousel{
            margin: 0 10px;
            height:280px;
            margin-top:10px;
        }

        .carouselContainer .carousel-inner{
            display:flex;
        }

        .carouselContainer .carousel-item{
            display:block;
            margin-right:-16px;
            flex: 0 0 calc(100% / 5);
            padding:18px 16px;
        }

        .carouselContainer .card{
            margin: 0 10px;
            height:250px;
            border-radius:5px;
            box-shadow: 2px 6px 8px 0 rgba(22,22,26, .18);
            transition:0.5s;
        }

        .carouselContainer .card:hover{
            transform:scale(1.1);
        }

        .carouselContainer .card img{
            width:100%;
            height:150px;
            object-fit:cover;
        }

        .carouselContainer .card-body .card-title{
            font-size:18px;
        }

        .carouselContainer .card-body .card-text{
            margin-bottom:3px;
        }

        .carouselContainer .card-body i{
            font-size:12px;
            color:#d4d0a5;
        }

        .carouselContainer .carousel-control-prev{
            height: 6vh;
            width:6vh;
            background-color: grey;
            border-radius:50%;
            top:50%;
            transform: translateY(-50%);
            opacity:.5;
        }

        .carouselContainer .carousel-control-next{
            height: 6vh;
            width:6vh;
            background-color: grey;
            border-radius:50%;
            top:50%;
            transform: translateY(-50%);
            opacity:.5;
        }

        .title{
            text-align:center;
            margin:10px;
        }

        /* Restaurant cards */
        .restContainer{
            margin-top:10px;
        }

        .restContainer .title{
            text-align:center;
        }

        .restContainer .card{
            height:200px;
        }

        .restContainer .carousel{
            background:red;
            height:200px;
            margin:0 0;
            border-top-left-radius:5px;
            border-bottom-left-radius:5px;
        }

        .restContainer .carousel-inner{
            display:flex;
        }

        .restContainer .carousel-item{
            border-top-left-radius:5px;
            border-bottom-left-radius:5px;
            width:100%;
            height:200px;
            margin:0 0;
        }

        .restContainer .carousel-item img{
            width:100%;
            height:100%;
        }

        .viewRestBtn{
            border:none;
            background:grey;
            color:black;
            margin:15px;
            font-size:18px;
            font-weight:black;
            border-radius:5px;
            height:35px;
            outline:none;
        }

        .restContainer .carousel-control-prev{
            height: 6vh;
            width:6vh;
            background-color: grey;
            border-radius:50%;
            top:50%;
            transform: translateY(-50%);
            opacity:.5;
        }

        .restContainer .carousel-control-next{
            height: 6vh;
            width:6vh;
            background-color: grey;
            border-radius:50%;
            top:50%;
            transform: translateY(-50%);
            opacity:.5;
        }
    </style>
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
                                <input class="form-check-input" type="checkbox" value="" id="italianCheckbox">
                                <label class="form-check-label mb-2" for="italianCheckbox">Italian</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="japaneseCheckbox">
                                <label class="form-check-label  mb-2" for="japaneseCheckbox">Japanese</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="malaysianCheckbox">
                                <label class="form-check-label  mb-2" for="malaysianCheckbox">Malaysian</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="steakhouseCheckbox">
                                <label class="form-check-label  mb-2" for="steakhouseCheckbox">Steakhouse</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="thaiCheckbox">
                                <label class="form-check-label  mb-2" for="thaiCheckbox">Thai</label>
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
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline"> RM20-RM50 </span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline"> </span></a>
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
                                <input class="form-check-input" type="checkbox" value="" id="damansaraCB">
                                <label class="form-check-label  mb-2" for="damansaraCB">Damansara</label>
                            </div>
                        </li>

                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidemenu End -->

        <div class="contentContainer">
            <!-- Top restaurant carousel Starts -->
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
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest2.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Prime</h5>
                                    <p class="card-text text-muted">Steakhouse</p>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest3.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Beta KL</h5>
                                    <p class="card-text text-muted">Malaysian</p>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest4.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Chambers Grill</h5>
                                    <p class="card-text text-muted">Steakhouse</p>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest5.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Positano Risto</h5>
                                    <p class="card-text text-muted">Italian</p>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest6.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">JP Teres</h5>
                                    <p class="card-text text-muted">Malaysian</p>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half"></i>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest7.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Via Pre Kul</h5>
                                    <p class="card-text text-muted">Italian</p>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                </div> 
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card" style="width:12rem;">
                                <img src="{{ asset('image/rest8.jpg')}}" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Tamarind Hill</h5>
                                    <p class="card-text text-muted">Thai</p>
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
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
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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

