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
        }

        .reviewcontainer{
            background:yellow;
            margin:auto;
            width:calc(100% - 220px);
        }
    </style>
</head>
<body>
    <div class="outercontiner">
        <div class="reviewcontainer">
            <div class="custprofile">
                <img src="{{asset('image/rest1.jpg')}}" alt="">
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


