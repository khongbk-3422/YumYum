@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Add Restaurant</title>
    @include('cdn')
    <style>
        .background{
            background: url('image/adminAddRestaurant1.png') no-repeat;
            width:100%;
            height:100vh;
            background-size:cover;
            background-position:center;
            filter:blur(5px);
            
        }

        .container{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width:75%;
            height:550px;
            background: url('image/adminAddRestaurant1.png') no-repeat;
            background-size:cover;
            background-position:center;
            border-radius:10px;
        }

        .container .content{
            position:absolute;
            top:0;
            left:0;
            width:58%;
            height:calc(100% - 160px);
            background:transparent;
            padding:40px;
            color:white;
            display:flex;
            justify-content:space-between;
            flex-direction:column;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <div class="content"></div>
    </div>
</body>
</html>
