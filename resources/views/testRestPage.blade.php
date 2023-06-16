@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')

    <style>
        .container-fluid{
            margin-top:60px;
            background:yellow;
            display: flex;
        }

        .sideMenuContainer{
            width:200px;
            height:80vh;
            background:red;
            margin:20px 20px;
        }

    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <!-- sidemenu -->
            <div class="sideMenuContainer">
                <div class="sideMenu">
                    <h2>Menu</h2>
                </div>

                <ul class="menu1">
                    <li></li>
                </ul>
            </div>

            <!-- content -->
            <div class="contentContainer">

            </div>
        </div>
    </div>
</body>
</html>


@include('footer')