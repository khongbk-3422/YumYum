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

        .cardcarousel{
            white-space:nowrap;
            background:pink;
            overflow:hidden;
        }

        .cardcarousel img{
            height:300px;
            object-fit:cover;
            width:calc(100% / 3);
        }

        .cardcarousel img:first-child{
            margin-left:0px;
        }

    </style>
</head>

<body>
    <div class="bodycontainer">
        <div class="cardcarousel">
            <img src="{{asset('image/restaurants/beta1.jpg')}}">
            <span><i class="fa fa-edit" aria-hidden="true"></i> <i class="fa-solid fa-trash"></i></span>

            <img src="{{asset('image/restaurants/beta2.jpg')}}">
            <span><i class="fa fa-edit" aria-hidden="true"></i> <i class="fa-solid fa-trash"></i></span>
            
            <img src="{{asset('image/restaurants/beta3.jpg')}}">
            <img src="{{asset('image/restaurants/chambers1.jpg')}}">
            <a href=""><img src="{{asset('image/restaurants/chambers1.jpg')}}"></a>
        </div>
    </div>



    <script>
    

    </script>
</body>
</html>
@include('footer')