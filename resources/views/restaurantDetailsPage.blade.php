@include ('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
    <link rel="stylesheet" href="{{asset('css/restaurantDetailsPageStyle.css')}}">
</head>
<body>
    <div class="bodycontainer">
        <!-- get from rest_table -->
        <div class="restDetails">
            <div class="restName">
                <h3>Iketeru</h3>
                <i class="fa-solid fa-location-dot"><span class="restinfo">addresss</span></i> |
                <i class="fa-solid fa-square-phone"><span class=restinfo>01123455</span></i>
            </div>
        </div>

        <div class="menucontainer">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{asset('image/rest1.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('image/rest1.jpg')}}" >
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset('image/rest1.jpg')}}">
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
        </div>

        <div class="cardcontainer">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Rating 4.5</h5>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>

                        <div class="card-body">
                            <h5>Price Range</h5>
                            <p>RM20-RM500</p>
                        </div>

                        <div class="card-body">
                            <h5>Cuisine</h5>
                            <p>Japanese</p>
                        </div> 
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="restLocation">Location</h5>
                            <iframe width="600" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=4 off, Persiaran Klang, Batu 3 3, 202, Old Klang Rd, Taman Shanghai, 58000 Kuala Lumpur, Federal Territory of Kuala Lumpur&output=embed"></iframe>
                            <p class="restAddress">Address0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- get from rating_table -->
        <div class="ratingcontainer">
            <div>
                <h5 class="title">Reviews and Ratings</h5>
            </div>
            
            <div class="reviewcontainer">
                <!-- IF {} -->
                <!-- Customer's feedback -->
                <div class="reviewbox">
                    <div class="box-top">
                        <div class="profile">
                            <div class="custpic">
                                <img src="{{asset('image/rest1.jpg')}}" alt="">
                            </div>

                            <div class="custname">
                                <strong>alicia</strong>
                            </div>
                        </div>

                        <div class="rating">
                            <!-- how to display number of star based on sql -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            
                        </div>
                    </div>

                    <div class="custreview">
                        <!-- need add link to the icon -->
                        <p class="date">2023/05/12 21:45:21 
                            <span class="icons">
                                <!-- return to normal view -->
                                <i class="fa-solid fa-xmark"></i>
                                <!-- Trigger text area -->
                                <i class="fa-regular fa-pen-to-square"></i>
                                <!-- save new cmd -->
                                <i class="fa-regular fa-floppy-disk"></i>
                                <!-- delete -->
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </p>
                        <div class="form-group">
                            <label for="">Review</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="custfirstreview">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fuga praesentium repellendus, ad quas quasi consequuntur</textarea>
                        </div>
                        
                    </div>
                </div>

                <!-- ELSE{} -->
                <!-- No review before [add] -->
                <div class="reviewbox">
                    <div class="box-top">
                        <div class="profile">
                            <div class="custpic">
                                <img src="{{asset('image/rest1.jpg')}}" alt="">
                            </div>

                            <div class="custname">
                                <strong>alicia</strong>
                            </div>
                        </div>

                        <div class="newrating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <!-- need to retreive the value and save into das -->
                    <div class="custreview">
                        <p class="date">date</p>
                        <div class="form-group">
                            <label for="newreview">Write your review</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="custfirstreview"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        
    </script>
</body>
</html>

@include ('footer')