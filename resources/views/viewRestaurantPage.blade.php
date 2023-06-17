<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .headerContainer{
            height:60px;
            margin-bottom:18px;
        }

        .sectionPadding{
            padding: 30px 0;
        }

        .cardContainer{
            padding : 0 16px;
            background:red;
        }

        .cardContainer .title{
            text-align:center;
            margin: 20px;
        }

        /* .cardContainer:first-child .card {
            height:450px;
        }

        .card{
            transition: transform 0.2s;
        }

        .card:hover{
            transform: scale(1.1);
        } */

        .sidemenu{
            background:#F8F8F8;
            margin: 20px 20px;
            box-shadow:0 3px 6px rgba(0, 0, 0, 0.3);
            border-radius:10px;
            padding: 20px;
            flex: 0 0 250px;
            height:110vh;
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

        .card .img-fluid{
            width:300px;
            height:200px;
        }

        .contentContainer {
            margin-top:10px;
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

        .nav-link i{
            font-size:18px;
            color:black;
            margin-right:10px;
        }

        .nav-link span{
            font-size:15px;
            color:#674D41;
        }

        .nav-link .fa-angle-down{
            font-size:20px;
            color:#A39087;
            margin-left:18px;
        }

        .content {
            flex: 1;
        }

        /* Top Rest Style */
        .carousel{
            max-width:100%;
            margin: 0 auto;
        }

        .carousel-inner{
            display:flex;
        }

        .carousel-item{
            display:block;
            margin-right:0;
            flex: 0 0 calc(100% / 4);
            padding:10px 10px;
        }
        
        .card{
            margin: 0 10px;
            height:280px;
            border-radius:5px;
            box-shadow: 2px 6px 8px 0 rgba(22,22,26, .18);
        }

        .carousel-control-prev{
            height: 6vh;
            width:6vh;
            background-color: grey;
            border-radius:50%;
            top:50%;
            transform: translateY(-50%);
            opacity:.5;
        }

        .carousel-control-next{
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
    <div class="headerContainer">
        @include('header')
    </div>

    <div class="contentContainer">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidemenu">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                        <!-- <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a> -->

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
                                    <li class="mb-1">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span></a>
                                    </li>
                                    <li class="mb-1">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span></a>
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
                                        <li class="mb-1">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span></a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span></a>
                                        </li>
                                    </ul>
                            </li>

                            <li class="mb-2">
                                <a href="#submenu3" class="nav-link px-0 align-middle">
                                    <i class="bi bi-geo-alt"></i></i>
                                    <span class="ms-1 d-none d-sm-inline">Location</span>
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                    
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                        <li class="mb-1">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Damansara</span></a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span></a>
                                        </li class="mb-1">
                                        <li class="mb-1">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span></a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Product</span></a>
                                        </li>
                                    </ul>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="content">
                    <!-- Top restaurant section starts-->
                    <section class="restaurantExample section-padding" id = "restaurantExp">
                        <div class="cardContainer">
                            <div class="title">
                                <h3>Top Recommended Restaurant <i class="fa-regular fa-thumbs-up"></i></h3>
                            </div>
                            
                            <div id="carouselExampleRide" class="carousel" data-bs-ride="true">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="card" style="width:12rem;">
                                            <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                            
                                            <div class="card-body">
                                                <h5 class="card-title">Ishin Japanese Dining</h5>
                                                <p class="card-text text-muted">Japanese</p>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card" style="width:12rem;">
                                            <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Positano Risto</h5>
                                                <p class="card-text text-muted">Italian</p>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card" style="width:12rem;">
                                            <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Beta KL</h5>
                                                <p class="card-text text-muted">Japanese</p>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card" style="width:12rem;">
                                            <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Chambers Grill</h5>
                                                <p class="card-text text-muted">Steakhouse</p>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card" style="width:12rem;">
                                            <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Ishin Japanese Dining</h5>
                                                <p class="card-text text-muted">Italian</p>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card" style="width:12rem;">
                                            <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Ishin Japanese Dining</h5>
                                                <p class="card-text text-muted">Italian</p>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card" style="width:12rem;">
                                            <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">Ishin Japanese Dining</h5>
                                                <p class="card-text text-muted">Italian</p>
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
                    </section>
                    <!-- Top restaurant section ends -->

                    <!-- All restaurant section starts -->
                    <section class="restaurantList section padding" id="restaurantListExp">
                        <div class="cardContainer">
                            <div class="title">
                                <h3>Restaurants in Kuala Lumpur</h3>
                            </div>

                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                    <img src="{{ asset('image/rest1.jpg') }}" class="img-fluid rounded-start">
                                </div>

                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">RestaurantName</h5>
                                            <p class="card-text">Details</p>
                                            <p class="card-text"><small class="text-muted">Italian</small></p>
                                            <a href="/restaurantDetailsPage"><button class="viewRestBtn">View More</button></a>
                                            <!--direct to rest details page -->
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>        
                    </section>
                </div>
            </div>
        </div>
    </div>
    

    <script>
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
        //next card choser
        var carouselWidth = $('.carousel-inner')[0].scrollWidth;
        var cardWidth = $('.carousel-item').outerWidth(true);

        var scrollPosition = 0;

        $('.carousel-control-next').on('click', function(){
            if(scrollPosition < (carouselWidth - (cardWidth * 5))){
                scrollPosition = scrollPosition + cardWidth;
                $('.carousel-inner').animate({scrollLeft: scrollPosition}, 
                600);
            }
        });

        $('.carousel-control-prev').on('click', function(){
            if(scrollPosition > 0){
                scrollPosition = scrollPosition - cardWidth;
                $('.carousel-inner').animate({scrollLeft: scrollPosition}, 
                600);
            }
        });
    });
    </script>
</body>
</html>

@include('footer')