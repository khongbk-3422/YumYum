@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin View Restaurant</title>
    @include('cdn')
    
    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .bodycontainer{
            margin-top:80px;
        }

        .title{
            text-align:center;
            font-size:35px;
            padding:15px;
        }

        .slidercontainer{
            max-width:1200px;
            width:100%;
            margin:auto;
            overflow:hidden;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .cardcontainer{
            margin:0 30px;
        }

        .card{
            flex-shrink:0;
            width:320px;
            border-radius:2px;
            position: relative;
        }

        .card .menubox{
            width:100%;
            height:300px;
        }

        .card .menubox img{
            height:100%;
            width:100%;
            object-fit:cover;
        }

        .card .actionicons{
            position: absolute;
            top: 0;
            right: 0;
            padding: 8px;
            background-color: rgba(43, 39, 35, 0.5);
        }

        .card .actionicons i{
            font-size:25px;
            float:right;
            padding-right:10px;
            color:#e8e2dc;
        }

        .swiper-button-next.swiper-navBtn,
        .swiper-button-prev.swiper-navBtn{
            color:#e0d5c5;
            height:45px;
            width:45px;
            background:#544b3e;
            border-radius:50%;
        }

        .swiper-button-next.swiper-navBtn::before,
        .swiper-button-prev.swiper-navBtn::after{
            font-size:20px;
        }
        
        .swiper-button-next.swiper-navBtn::after {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="bodycontainer">
        <div class="title">
            <h3>Restaurant</h3>
        </div>

        <div class="slidercontainer">
            <div class="cardcontainer swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta1.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
                
                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta2.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta3.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/ishin1.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="menubox">
                        <a href=""><img src="{{asset('image/add.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var swiper = new Swiper(".slidercontainer", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 1,
            centerSlide:"true",
            grabCursor:"true",
            fade:"true",
            navigation:{
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    });

    </script>
</body>
</html>
@include('footer')