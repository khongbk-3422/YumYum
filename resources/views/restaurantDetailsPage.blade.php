@include ('header')

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

        .bodycontainer{
            padding:10px;
            margin-top:80px;
        }

        .restDetails .restName{
            margin:10px 15px;
            line-height:2;
        }

        .restDetails .restinfo{
            margin-left:12px;
        }

        .restDetails i{
            font: size 14px;
            padding:10px;
        }

        .cardcontainer{
            padding:20px;
        }

        .cardcontainer .card{
            height:300px;
        }

        .cardcontainer .card .card-body p{
            font-size:14px;
            letter-spacing:2px;
        }

        .cardcontainer .card .card-body h5{
            font-size:17px;
            font-weight:bold;
            letter-spacing:2px;
            /* text-decoration:underline #d1d0cf; */
            /* margin-bottom: 10px; */
            margin:15px 5px;
        }

        .cardcontainer .card .card-body .restLocation{
            font-size:17px;
            font-weight:bold;
            letter-spacing:2px;
            /* margin-bottom: 10px; */
            margin:2px 5px;
        }

        .cardcontainer .card .card-body .restAddress{
            font-size:14px;
            letter-spacing:2px;
        }

        /* Ratings and reviews */
        .ratingcontainer{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }

        .ratingcontainer .title{
            font-size:30px;
            padding:10px 10px;
        }

        .reviewcontainer{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-wrap:wrap;
            width:100%;
        }

        .reviewbox{
            width:500px;
            box-shadow:0 5px 5px rgba(0, 0, 0, 0.3);
            background-color:#f2f2f0;
            padding:15px;
            margin:15px;
            cursor:pointer;
            border-radius:8px;
        }

        .profile{
            display:flex;
            align-items:center;
        }

        .profile .custpic{
            width:50px;
            height:50px;
            border-radius:50%;
            overflow:hidden;
            margin-right:10px;
        }

        .profile .custpic img{
            width:100%;
            height:100%;
            object-fit:cover;
            object-position:center;
        }

        .custname{
            display:flex;
            flex-direction:column;
        }

        .box-top{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:20px;
        }

        .rating i{
            color:yellow;
        }

        .custreview .date{
            color:grey;
        }

        .custreview p{
            font-size:14px;
            color:black;
        }
    </style>
</head>
<body>
    <div class="bodycontainer">
        <!-- get from rest_table -->
        <div class="restDetails">
            <div class="restName">
                <h3>Iketeru</h3>
                <i class="fa-solid fa-location-dot"><span class="restinfo">addresss</span></i> |
                <i class="fa-solid fa-square-phone"><span class=restinfo>01123455</span></i>
            </div>
        </div>
        

        <div class="menucontainer">


        <div class="cardcontainer">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Rating 4.5</h5>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>

                            <h5>Price Range</h5>
                            <p>RM20-RM500</p>

                            <h5>Cuisine</h5>
                            <p>Japanese</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="restLocation">Location</h5>
                            <!-- Display map -->
                            <iframe width="600" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=4 off, Persiaran Klang, Batu 3 3, 202, Old Klang Rd, Taman Shanghai, 58000 Kuala Lumpur, Federal Territory of Kuala Lumpur&output=embed"></iframe>
                            <!-- <p>map</p> -->
                            <p class="restAddress">Address0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- get from rating_table -->
        <div class="ratingcontainer">
            <div>
                <h5 class="title">Reviews and Ratings</h5>
            </div>
            
            <div class="reviewcontainer">
                <div class="reviewbox">
                    <div class="box-top">
                        <div class="profile">
                            <div class="custpic">
                                <img src="{{asset('image/rest1.jpg')}}" alt="">
                            </div>

                            <div class="custname">
                                <strong>alicia</strong>
                            </div>
                        </div>

                        <div class="rating">
                            <!-- how to display number star based on sql -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>

                    <div class="custreview">
                        <p class="date">2023/05/12 21:45:21</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fuga praesentium repellendus, ad quas quasi consequuntur laudantium nam eius dolore neque esse fugiat iste debitis recusandae placeat commodi distinctio cumque!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

@include ('footer')