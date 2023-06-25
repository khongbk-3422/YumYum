@include('header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
    <style>
        .outercontainer{
            background:pink;
            margin-top:80px;
        }

        .outercontainer .title{
            text-align:center;
        }

        .reviewcontainer{
            background:yellow;
            margin:auto;
            width:calc(100% - 220px);
            display:flex;
        }

        .reviewcontainer .custprofile{
            align-items: center;
            padding:20px;
            background:blue;
        }

        .reviewcontainer .custprofile img{
            width:80px;
            height:80px;
            border-radius:50%;
        }

        .reviewcontainer .custprofile h4{
            font-size:20px;
            margin:10px;
            display:center;
        }

        .review{
            padding:10px 10px;
            background:purple;
        }
    </style>
</head>
<body>
    <div class="outercontainer">
        <div class="title">
            <h2>Ratings and Reviews</h2>
        </div>

        <div class="reviewcontainer">
            <div class="custprofile">
                <img src="{{asset('image/rest1.jpg')}}" alt="">
                <h4>Name</h4>
            </div>

            <div class="review">
                <p>Date</p>
                <div class="form-group">
                    <label for="">Review</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="custfirstreview">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fuga praesentium repellendus, ad quas quasi consequuntur</textarea>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


