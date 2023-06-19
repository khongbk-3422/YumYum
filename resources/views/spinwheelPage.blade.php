@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .contentContainer{
            margin-top:80px;
        }
        
        .spinwheelSection{
            background:pink;
        }
    </style>
</head>
<body>
    <div class="contentContainer">
        <div class="spinwheelSection">
            <h3>Decide your meal!</h3>
        </div>
    </div>
</body>
</html>
@include('footer')