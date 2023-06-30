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
    </style>
</head>

<body>
    <div class="bodycontainer">
        <div class="title">
            <h3>Restaurant</h3>
        </div>

        <div class="slidercontainer">
            <div class="cardcontainer swiper-wrapper">
                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta1.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
                
                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta2.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/beta3.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="menubox">
                        <img src="{{asset('image/restaurants/ishin1.jpg')}}">
                    </div>
                    <div class="actionicons">
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>

                <div class="card swiper-slide">
                    <div class="menubox">
                        <a href=""><img src="{{asset('image/add.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="editFormContainer">
                <form>
                    <div class="row">
                        <h4>Edit Form</h4>
                        <div class="input-group input-group-icon"><input type="text" placeholder="Restaurant ID" />
                            <div class="input-icon"><i class="fa-solid fa-key" style="color: #6f7680;"></i></div>
                        </div>
                        <div class="input-group input-group-icon"><input type="text" placeholder="Restaurant Name" />
                            <div class="input-icon"><i class="fa-solid fa-user" style="color: #6f7680;"></i></div>
                        </div>
                        <div class="input-group input-group-icon"><input type="text" placeholder="Restaurant Contact" />
                            <div class="input-icon"><i class="fa-solid fa-phone" style="color: #6f7680;"></i></div>
                        </div>
                        <h2>Restaurant Category</h2><br>
                        <div class="input-group input-group-icon">
                            <select name="category" id="category" class="form__field">
                                <option value="rigatoni">Italian</option>
                                <option value="dave">Japanese</option>
                                <option value="pumpernickel">Malaysian</option>
                                <option value="reeses">Steakhouse</option>
                                <option value="reeses">Thai</option>
                            </select>
                            <div class="input-icon"><i class="fa-solid fa-list" style="color: #6f7680;"></i></div>
                        </div>
                        <div class="input-group input-group-icon"><input type="text" placeholder="Restaurant Address" />
                            <div class="input-icon"><i class="fa-solid fa-house" style="color: #6f7680;"></i></div>
                        </div>
                        <div class="input-group input-group-icon"><input type="number" placeholder="Minimum Price" />
                            <div class="input-icon"><i class="fa-solid fa-dollar-sign" style="color: #6f7680;"></i></div>
                        </div>
                        <div class="input-group input-group-icon"><input type="number" placeholder="Maximum Price" />
                            <div class="input-icon"><i class="fa-solid fa-dollar-sign" style="color: #6f7680;"></i></div>
                        </div>
                    </div>
                </form>
        </div>
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
</html>
@include('footer')