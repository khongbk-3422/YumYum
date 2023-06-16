
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')

    <style>
        .carousel{
            max-width:70%;
            margin: 0 auto;
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
            padding:20px 20px;
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
    <div id="carouselExampleRide" class="carousel" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card" style="width:14rem;">
                    <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ishin Japanese Dining</h5>
                        <p class="card-text text-muted">Italian</p>
                    </div> 
                </div>
            </div>

            <div class="carousel-item">
                <div class="card" style="width:14rem;">
                    <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ishin Japanese Dining</h5>
                        <p class="card-text text-muted">Italian</p>
                    </div> 
                </div>
            </div>

            <div class="carousel-item">
                <div class="card" style="width:14rem;">
                    <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ishin Japanese Dining</h5>
                        <p class="card-text text-muted">Italian</p>
                    </div> 
                </div>
            </div>

            <div class="carousel-item">
                <div class="card" style="width:14rem;">
                    <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ishin Japanese Dining</h5>
                        <p class="card-text text-muted">Italian</p>
                    </div> 
                </div>
            </div>

            <div class="carousel-item">
                <div class="card" style="width:14rem;">
                    <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ishin Japanese Dining</h5>
                        <p class="card-text text-muted">Italian</p>
                    </div> 
                </div>
            </div>

            <div class="carousel-item">
                <div class="card" style="width:14rem;">
                    <img src="{{ asset('image/rest1.jpg')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Ishin Japanese Dining</h5>
                        <p class="card-text text-muted">Italian</p>
                    </div> 
                </div>
            </div>

            <div class="carousel-item">
                <div class="card" style="width:14rem;">
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