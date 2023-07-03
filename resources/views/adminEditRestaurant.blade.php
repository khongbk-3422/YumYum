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
        /* Edit form Css */
        input:focus {
        outline: 0;
        border-color: #bd8200;
        }
        input:focus + .input-icon i {
        color: #f0a500;
        }
        input:focus + .input-icon:after {
        border-right-color: #f0a500;
        }
        input[type="radio"] {
        display: none;
        }
        input[type="radio"] + label,
        select {
        display: inline-block;
        width: 50%;
        text-align: center;
        float: left;
        border-radius: 0;
        }
        input[type="radio"] + label:first-of-type {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        }
        input[type="radio"] + label:last-of-type {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        }
        input[type="radio"] + label i {
        padding-right: 0.4em;
        }
        input[type="radio"]:checked + label,
        input:checked + label:before,
        select:focus,
        select:active {
        background-color: #f0a500;
        color: #fff;
        border-color: #bd8200;
        }
        input[type="checkbox"] {
        display: none;
        }
        input[type="checkbox"] + label {
        position: relative;
        display: block;
        padding-left: 1.6em;
        }
        input[type="checkbox"] + label:before {
        position: absolute;
        top: 0.2em;
        left: 0;
        display: block;
        width: 1em;
        height: 1em;
        padding: 0;
        content: "";
        }
        input[type="checkbox"] + label:after {
        position: absolute;
        top: 0.45em;
        left: 0.2em;
        font-size: 0.8em;
        color: #fff;
        opacity: 0;
        font-family: FontAwesome;
        content: "\f00c";
        }
        input:checked + label:after {
        opacity: 1;
        }
        select {
        height: 3.4em;
        line-height: 2;
        }
        select:first-of-type {
        border-top-left-radius: 3px;
        border-bottom-left-radius: 3px;
        }
        select:last-of-type {
        border-top-right-radius: 3px;
        border-bottom-right-radius: 3px;
        }
        select:focus,
        select:active {
        outline: 0;
        }
        select option {
        background-color: #f0a500;
        color: #fff;
        }
        .input-group input[type="text"],
        .input-group input[type="number"],
        .input-group select {
            width: 100%;
            padding: 0.8em;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .input-group {
        margin-bottom: 1em;
        zoom: 1;
        }
        .input-group:before,
        .input-group:after {
        content: "";
        display: table;
        }
        .input-group:after {
        clear: both;
        }
        .input-group-icon input[type="text"],
        .input-group-icon input[type="number"],
        .input-group-icon select {
            padding-left: 4.4em;
        }
        .input-group-icon {
        position: relative;
        }
        .input-group-icon input {
        padding-left: 4.4em;
        }
        .input-group-icon .input-icon {
        position: absolute;
        top: 0;
        left: 0;
        width: 3.4em;
        height: 3.4em;
        line-height: 3.4em;
        text-align: center;
        pointer-events: none;
        }
        .input-group-icon .input-icon:after {
        position: absolute;
        top: 0.6em;
        bottom: 0.6em;
        left: 3.4em;
        display: block;
        border-right: 1px solid #e5e5e5;
        content: "";
        -webkit-transition: 0.35s ease-in-out;
        -moz-transition: 0.35s ease-in-out;
        -o-transition: 0.35s ease-in-out;
        transition: 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        }
        .input-group-icon .input-icon i {
        -webkit-transition: 0.35s ease-in-out;
        -moz-transition: 0.35s ease-in-out;
        -o-transition: 0.35s ease-in-out;
        transition: 0.35s ease-in-out;
        transition: all 0.35s ease-in-out;
        }
        .editFormContainer {
        max-width: 38em;
        padding: 1em 3em 2em 3em;
        margin: 0em auto;
        margin-top: 90px;
        background-color: #fff;
        border-radius: 4.2px;
        box-shadow: 0px 3px 10px -2px rgba(0, 0, 0, 0.2);
        }
        .row {
        zoom: 1;
        }
        .row:before,
        .row:after {
        content: "";
        display: table;
        }
        .row:after {
        clear: both;
        }
        .restaurantRatingForm{
        padding:20px;
        }
        .restaurantRatingForm .editRestaurantRatingCard{
        height:330px;
        }
        .restaurantRatingForm .editRestaurantRatingCard .card-body .ratingqty{
        font-size: 14px;
        }
        .restaurantRatingForm .editRestaurantRatingCard .card-body p{
        font-size:18px;
        letter-spacing:1px;
        }
        .restaurantRatingForm .editRestaurantRatingCard .card-body h5{
        font-size:20px;
        font-weight:bold;
        letter-spacing:2px;
        }
        .restaurantRatingForm .editRestaurantRatingCard .card-body i{
        font-size:17px;
        color:#f1f190;
        }
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
        margin:auto;
        width:80%;
        display:flex;
        border:1px solid #d4d1cd;
        border-radius:5px;
        height:220px;
        margin-bottom:10px;
        /* background: #f5f4f2; */
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
        .form-group .form-control{
        font-size: 15px;
        background-color: #F8F8F8;
        }
        textarea.form-control:focus{
        box-shadow:0 0 8px #635e49;
        }
        .form-control.form-control-no-outline {
        border: none;
        box-shadow: none !important;
        }
        .submit-icon {
        padding:0;
        background: none;
        border:none;
        }
        .submitbtn{
        border: none;
        float: right;
        font-size: 18px;
        margin-top:6px;
        }
        .submitbtn:hover{
        color:rgb(138, 127, 114);
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
                @foreach ($pic_datas as $pic)
                    
                    <div class="card swiper-slide">
                        <div class="menubox">
                            <img src="data:image/[image_format];base64,{{ $pic['rest_pic'] }}">
                        </div>
                        <div class="actionicons">
                            <a href="{{ url('/adminDeleteRestPic/' . $pic['pic_id'] . '/' . $rest_data['rest_id']) }}">
                                <i class="fa-solid fa-trash"></i>
                            </a>    
                        </div>
                    </div>
                    
                @endforeach

                <div class="card swiper-slide">
                    <div class="menubox">
                        <a href="#"><img src="{{asset('image/add.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="editFormContainer">
            <form action="{{ url('admin_edit_rest') }}" method="POST">
                @csrf
                <div class="row">
                    <h4>Edit Form</h4>
                    <input type="hidden" value="{{$rest_data['rest_id']}}" name="rest_id"/>
                    {{-- <div class="input-group input-group-icon">
                        <input type="hidden" placeholder="Restaurant ID" value="{{$rest_data['rest_id']}}" name="rest_id"/>
                        <div class="input-icon"><i class="fa-solid fa-key" style="color: #6f7680;"></i></div>
                    </div> --}}
                    <div class="input-group input-group-icon">
                        <input type="text" placeholder="Restaurant Name" value="{{$rest_data['rest_name']}}" name="new_rest_name"/>
                        <div class="input-icon"><i class="fa-solid fa-user" style="color: #6f7680;"></i></div>
                    </div>
                    <div class="input-group input-group-icon">
                        <input type="text" placeholder="Restaurant Contact" value="{{$rest_data['rest_contact']}}" name="new_rest_contact"/>
                        <div class="input-icon"><i class="fa-solid fa-phone" style="color: #6f7680;"></i></div>
                    </div>
                    <h5>Restaurant Category :</h5><br>
                    <div class="input-group input-group-icon">
                        <select name="new_rest_category" id="category" class="form__field">
                            <option value="Italian" @if($rest_data['rest_category'] === 'Italian') selected @endif>Italian</option>
                            <option value="Japanese" @if($rest_data['rest_category'] === 'Japanese') selected @endif>Japanese</option>
                            <option value="Malaysian" @if($rest_data['rest_category'] === 'Malaysian') selected @endif>Malaysian</option>
                            <option value="Steakhouse" @if($rest_data['rest_category'] === 'Steakhouse') selected @endif>Steakhouse</option>
                            <option value="Thai" @if($rest_data['rest_category'] === 'Thai') selected @endif>Thai</option>
                        </select>
                        <div class="input-icon"><i class="fa-solid fa-list" style="color: #6f7680;"></i></div>
                    </div>
                    <div class="input-group input-group-icon">
                        <input type="text" placeholder="Restaurant Address" value="{{$rest_data['rest_address']}}" name="new_rest_address"/>
                        <div class="input-icon"><i class="fa-solid fa-house" style="color: #6f7680;"></i></div>
                    </div>
                    <div class="input-group input-group-icon">
                        <input type="number" placeholder="Minimum Price" value="{{$rest_data['price_min']}}" name="new_price_min"/>
                        <div class="input-icon"><i class="fa-solid fa-dollar-sign" style="color: #6f7680;"></i></div>
                    </div>
                    <div class="input-group input-group-icon">
                        <input type="number" placeholder="Maximum Price" value="{{$rest_data['price_max']}}" name="new_price_max"/>
                        <div class="input-icon"><i class="fa-solid fa-dollar-sign" style="color: #6f7680;"></i></div>
                    </div>
                    <button class="btn btn-success" type="submit">Edit</button>
                </div>
            </form>
        </div>

        <br>
        <br>
        
        <div class="ratingcontainer">
            <div>
                <h5 class="title">Reviews and Ratings</h5>
            </div>
            @if (isset($rating_datas) && count($rating_datas) > 0)
            
            @foreach ($rating_datas as $rate_data)
            
                <div class="reviewcontainer">
                    <div class="custprofile">
                        <img src="data:image/[image_format];base64,{{$rate_data['cust_pic']}}" alt="">
                        <h4 class="custname">{{$rate_data['cust_name']}}</h4>
                    </div>
                    <div class="review">
                        <p class="reviewdate">{{$rate_data['date']}}
                            <span class="starqty">
                                @if ($rate_data['rating'] == 5)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 4.15 && $rate_data['rating'] < 5)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> 
                                @elseif ($rate_data['rating'] >= 3.85 && $rate_data['rating'] < 4.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 3.15 && $rate_data['rating'] < 3.85)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 2.85 && $rate_data['rating'] < 3.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 2.15 && $rate_data['rating'] < 2.85)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 1.85 && $rate_data['rating'] < 2.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 1.15 && $rate_data['rating'] < 1.85)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 0.85 && $rate_data['rating'] < 1.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-light fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rate_data['rating'] >= 1.15 && $rate_data['rating'] < 1.85)
                                    <i class="fa-solid fa-star-half-stroke"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @else
                                    <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>  
                                @endif
                            </span>
                        </p>
                        <div class="form-group">
                            <label for="" class="reviewcmd">Review</label>
                            <textarea class="form-control form-control-no-outline" id="firstreview" rows="3" readonly>{{$rate_data['review']}}</textarea>
                            <a href="{{ url('/adminDeleteRate/' . $rate_data['cust_id'] . '/' . $rest_data['rest_id']) }}">
                                <button type="submit" class="submitbtn">Delete</button>
                            </a>
                        </div>
                    </div>
                </div>  

            @endforeach
            @else
            <br>
                <div>
                    <h4>No Ratings or Review</h4>
                </div>
            @endif
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
@if(Session::has('successful_add'))
    <script>
        alert('Restaurant Successfully Added!');
    </script>
@endif
</html>
@include('footer')