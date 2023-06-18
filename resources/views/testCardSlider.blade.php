@include('header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')

    <style>
        /* Carousel */
        .carouselContainer{
            max-width: calc(100% - 220px);
        }

        .carousel{
            /* max-width:calc(100% - 50px); */
            margin: 0 10px;
            height:300px;
            margin-top:10px;
        }

        .carousel-inner{
            display:flex;
        }

        .carousel-item{
            display:block;
            margin-right:0;
            flex: 0 0 calc(100% / 4);
        }

        .carousel-item{
            padding:20px 18px;
        }

        .card{
            margin: 0 10px;
            height:250px;
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

        .title{
            text-align:center;
            margin:10px;
        }

        /* Sidemenu */
        .sidemnuContainer{
            display:flex;
            justify-content: space-between;
            margin: 20px;
            margin-top:90px;
        }

        .sidemenu{
            background:#F8F8F8;
            margin: 20px 10px;
            box-shadow:0 3px 6px rgba(0, 0, 0, 0.3);
            border-radius:10px;
            padding: 20px;
            flex: 0 0 220px;
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

        .nav-link i{
            font-size:18px;
            color:black;
            margin-right:10px;
        }

        .nav-link span{
            font-size:16px;
            color:#674D41;
        }

        .nav-link .fa-angle-down{
            font-size:20px;
            color:#A39087;
            margin-left:22px;
        }
    </style>

<body>
    <div class="sidemnuContainer">
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
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span></a>
                        </li>
                        <li>
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
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span></a>
                        </li>
                        <li>
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
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Damansara</span></a>
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
                                <p class="card-text text-muted">Malaysian</p>
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
        </div>
        
    </div>
</body>

    <script>
    $(document).ready(function() {
        //next card choser
        var carouselWidth = $('.carousel-inner')[0].scrollWidth;
        var cardWidth = $('.carousel-item').width();

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
</html>
