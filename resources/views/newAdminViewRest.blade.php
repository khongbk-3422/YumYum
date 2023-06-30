@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Edit Restaurant</title>
    @include('cdn')
    
    <style>

        .bodycontainer{
            margin-top:80px;
        }

        .slidercontainer{
            background:pink;
            max-width:1200px;
            width:100%;
            padding:10px;
            margin:auto;
        }

        .cardcontainer{
            /* margin:auto; */
            display:flex;
            align-items:center;
            justify-content:center;
            /* gap:10px; */
        }

        .card{
            border-radius:2px;
            /* width: calc((100% / 3) - 10px); */
            margin-right:20px;
        }

        .card .menubox{
            width:100%;
            height:300px;
        }

        .card .menubox img{
            height:100%;
            object-fit:cover;
        }

        .card .actionicons{
            padding:8px;
            border-radius:2px 2px 0 0;
        }

        .card .actionicons i{
            font-size:25px;
            float:right;
            padding-right:10px;
            color:black;
        }
    </style>
</head>

<body>
    <div class="bodycontainer">
        <div class="slidercontainer">
            <div class="cardcontainer swiper-wrapper">
                <div class="card swiper-slider">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta1.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
                
                <div class="card swiper-slider">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta1.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <div class="card swiper-slider">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta1.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <!-- <div class="card swiper-slider">
                    <div class="menubox">
                        <a href=""><img src="{{asset('image/add.png')}}"></a>
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div> -->
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <script>
    

    </script>
</body>
</html>
@include('footer')