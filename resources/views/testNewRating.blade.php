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
            margin-top:80px;
        }

        .outercontainer .title{
            text-align:center;
        }

        .reviewcontainer{
            margin:auto;
            width:90%;
            display:flex;
            border:1px solid grey;
            border-radius:5px;
            height:220px;
            margin-bottom:5px;
        }

        .reviewcontainer .custprofile{
            display:flex;
            align-items:center;
            justify-content: center;
            width:180px;
            flex-direction: column;
        }

        .reviewcontainer .custprofile img{
            width:80px;
            height:80px;
            border-radius:50%;
            line-height:1px;
        }

        .reviewcontainer .custprofile .custname{
            font-size:16px;
            margin:10px;
        }

        .review{
            flex-grow: 1;
            padding:20px;
        }

        .review .reviewdate{
            font-size:14px;
            letter-spacing:1px;
            color:grey;
        }

        .starqty{
            float:right;
        }

        .starqty i{
            color:yellow;
        }

        .actionicons{
            float:right;
        }

        .actionicons i{
            font-size:18px;
            margin-right:8px;
            cursor: pointer;
        }

        .reviewcmd{
            margin-bottom:8px;
        }

        .newrating{
            float:right;
        }

        .newrating i{
            color:grey;
        }

        .submitbtn{
            border: none;
            float: right;
            font-size: 16px;
            margin-top:6px;
        }

        .submitbtn:hover{
            color:rgb(138, 127, 114);
        }

        .othercustreviewtextarea{
            padding: 20px;
            min-height: 100px;
            resize: vertical;
        }

        .form-control-no-outline {
            outline: none;
            box-shadow: none;
        }

    </style>
</head>
<body>
    <div class="outercontainer">
        <div class="title">
            <h2>Ratings and Reviews</h2>
        </div>

        <!-- Customer with given review before -->
        <div class="reviewcontainer">
            <div class="custprofile">
                <img src="data:image/[image_format];base64,{{base64_encode(session ('user_pic'))}}">
                <h4 class="custname">Name</h4>
            </div>

            <div class="review">
                <p class="reviewdate">2023/05/12 21:45:21 
                    <span class="starqty">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </p>

                <div class="actionicons">
                    <i class="fa-solid fa-rotate-left"></i>
                    <!-- Trigger text area -->
                    <i class="fa-regular fa-pen-to-square"></i>
                    <!-- save new cmd -->
                    <i class="fa-regular fa-floppy-disk"></i>
                    <!-- delete -->
                    <i class="fa-solid fa-trash"></i>
                </div>

                <div class="form-group">
                    <label for="" class="reviewcmd">Review</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="custfirstreview">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fuga praesentium repellendus, ad quas quasi consequuntur</textarea>
                </div>
            </div>
        </div>

        <!-- Customer first time give review -->
        <form action="" method="post">
            <div class="reviewcontainer">
                <div class="custprofile">
                    <img src="data:image/[image_format];base64,{{base64_encode(session('user_pic'))}}">
                    <h4 class="custname">Name</h4>
                </div>

                <div class="review">
                    <p class="reviewdate">04/06/2023
                        <span class="newrating">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </p>

                    <div class="form-group">
                        <label for="" class="reviewcmd">Leave your review below</label>
                        <textarea class="form-control" id="firstreview" rows="3" name="custfirstreview"></textarea>
                        <button type="submit"class="submitbtn">Send</button>
                    </div>
                </div>
            </div>
        </form>
        

        <!-- Other customer's review -->
        <div class="reviewcontainer">
            <div class="custprofile">
                <img src="data:image/[image_format];base64,{{base64_encode(session('user_pic'))}}">
                <h4 class="custname">Name</h4>
            </div>

            <div class="review">
                <p class="reviewdate">04/06/2023
                    <span class="newrating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </span>
                </p>

                <div class="form-group">
                    <label for="" class="reviewcmd">Review</label>
                    <textarea class="form-control form-control-no-outline" id="firstreview" rows="3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, voluptatem? Accusamus officia molestias adipisci alias quisquam et architecto asperiores modi quidem consectetur ratione unde quam, at magnam earum aliquid nihil?</textarea>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@include('footer')
