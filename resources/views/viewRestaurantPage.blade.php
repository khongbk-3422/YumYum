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
            width:100%;
            padding : 0 16px;
        }

        .cardContainer:first-child .card {
            height:450px;
        }

        .cardContainer .title{
            text-align:center;
            margin: 20px;
        }
 
        .card{
            transition: transform 0.2s;
        }

        .card:hover{
            transform: scale(1.1);
        }

        .sidemenu{
            background:#faf9f7;
            margin: 20px 20px;
            border: 1px solid grey;
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
            display: flex;
        }

        .sidemenu {
            padding: 20px;
            flex: 0 0 250px;
        }

        .content {
            padding: 20px;
            flex: 1;
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
                <!-- Change new sidemenu, adjust -->
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 sidemenu">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-black text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Menu</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fa-solid fa-utensils"></i><span class="ms-1 d-none d-sm-inline">Category</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                    <li class>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                            </li>
                            <li>
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="bi bi-currency-dollar"></i> <span class="ms-1 d-none d-sm-inline">Price</span></a>
                                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                    <li class>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="bi bi-geo-alt"></i></i> <span class="ms-1 d-none d-sm-inline">Location</span> </a>
                                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                    <li class=>
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
                </div>

                <div class="content">
                    <!-- Top restaurant section starts-->
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
                                        <p class="card-text expand-text">Located along the busy Old Klang Road in a building by itself, Ishin has made a name for itself for its genuine Japanese and Kaiseki-style cuisine.</p>
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
                    <!-- Top restaurant section ends -->

                    <!-- All restaurant section starts -->
                    <section class="restaurantList section padding" id="restaurantListExp">
                        <!-- [fetch from SQL] USE CARD LIST
                        $query = "SELECT * FROM restaurants";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $restaurantName = $row['rest_name'];
                            $restCategory = $row['rest_category];
                            $restAddress = $row['rest_address'];
                            $imageURL = $row['image_url'];
                                echo '<div class="card mb-3">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    <img src="' . $imageURL . '" class="img-fluid rounded-start" alt="Restaurant Image">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title">'. $restaurantName .'</h5>
                                                        <p class="card-text">' . $restAddress . '</p>
                                                        <p class="card-text"><small class="text-muted">' . $restCategory . '</small></p>
                                                        <button>View More</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                        }
                        -->
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
    
</body>
</html>

@include('footer')