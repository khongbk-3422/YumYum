@include ('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
    <link rel="stylesheet" href="{{asset('css/restaurantDetailsPageStyle.css')}}">
</head>
<body>
    <div class="bodycontainer">
        <!-- get from rest_table -->
        <div class="restDetails">
            <div>
                <h3 class="restName">{{$rest_data['rest_name']}}<span class="verification"><i class="bi bi-patch-check"></i>Claimed</span></h3>
                <i class="fa-solid fa-location-dot"></i><span class="restinfo">{{$rest_data['rest_address']}} </span>  
                | <i class="fa-solid fa-square-phone"></i><span class=restinfo>{{$rest_data['rest_contact']}}</span>
            </div>
        </div>

        <div class="menuoutercontainer">
            <div class="menucontainer">
                <i id="left-btn" class="fa-solid fa-angle-left"></i>
                <div class="carousel">
                    @foreach ($rest_data['data_pic'] as $pic)
                        <img src="data:image/[image_format];base64,{{$pic}}" alt="">
                    @endforeach
                </div>
                <i id="right-btn" class="fa-solid fa-angle-right"></i>
            </div>
        </div> 

        <div class="cardcontainer">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Rating</h5>
                            <p>{{$rest_data['avg_rate']}} 
                                @if ($rest_data['avg_rate'] == 5)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 4.15 && $rest_data['avg_rate'] < 5)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> 
                                @elseif ($rest_data['avg_rate'] >= 3.85 && $rest_data['avg_rate'] < 4.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 3.15 && $rest_data['avg_rate'] < 3.85)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 2.85 && $rest_data['avg_rate'] < 3.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 2.15 && $rest_data['avg_rate'] < 2.85)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 1.85 && $rest_data['avg_rate'] < 2.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 1.15 && $rest_data['avg_rate'] < 1.85)
                                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 0.85 && $rest_data['avg_rate'] < 1.15)
                                    <i class="fa-solid fa-star"></i><i class="fa-light fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @elseif ($rest_data['avg_rate'] >= 1.15 && $rest_data['avg_rate'] < 1.85)
                                    <i class="fa-solid fa-star-half-stroke"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                @else
                                <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>  
                                @endif
                                <span class="ratingqty">({{$rest_data['count']}})</span>
                            </p>
                        </div>

                        <div class="card-body">
                            <h5>Price Range</h5>
                            <p>RM {{$rest_data['price_min']}} - RM {{$rest_data['price_max']}}</p>
                        </div>

                        <div class="card-body">
                            <h5>Cuisine</h5>
                            <p>{{$rest_data['rest_category']}}</p>
                        </div> 
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="restLocation">Location</h5>
                            <iframe width="550" height="220" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q={{$rest_data['rest_address']}}&output=embed"></iframe>
                            <p class="restAddress">{{$rest_data['rest_address']}}</p>
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

        @if ($rest_data['rating'])
            <!-- Customer's feedback -->
            <div class="reviewcontainer">
                <div class="custprofile">
                    <img src="data:image/[image_format];base64,{{base64_encode(session ('user_pic'))}}">
                    <h4 class="custname">Name</h4>
                </div>

                <div class="review">
                    <p class="reviewdate">{{$rest_data['rate_date']}} 
                        <span class="starqty">
                            @if ($rest_data['rating'] == 5)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 4.15 && $rest_data['rating'] < 5)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> 
                            @elseif ($rest_data['rating'] >= 3.85 && $rest_data['rating'] < 4.15)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 3.15 && $rest_data['rating'] < 3.85)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 2.85 && $rest_data['rating'] < 3.15)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 2.15 && $rest_data['rating'] < 2.85)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 1.85 && $rest_data['rating'] < 2.15)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 1.15 && $rest_data['rating'] < 1.85)
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 0.85 && $rest_data['rating'] < 1.15)
                                <i class="fa-solid fa-star"></i><i class="fa-light fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                            @elseif ($rest_data['rating'] >= 1.15 && $rest_data['rating'] < 1.85)
                                <i class="fa-solid fa-star-half-stroke"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                            @else
                                <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>  
                            @endif
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

        @else
            <!-- Customer first time give review -->
            <form action="{{ url('new_rate') }}" method="POST" class="reviewcontainer">
                @csrf
                <div class="custprofile">
                    <img src="data:image/[image_format];base64,{{base64_encode(session('user_pic'))}}">
                    <h4 class="custname">{{session('user_name')}}</h4>
                </div>

                <div class="review">
                    <p class="reviewdate">-
                        <span class="newrating">
                            <i id="star1" class="fa-regular fa-star"></i>
                            <i id="star2" class="fa-regular fa-star"></i>
                            <i id="star3" class="fa-regular fa-star"></i>
                            <i id="star4" class="fa-regular fa-star"></i>
                            <i id="star5" class="fa-regular fa-star"></i>
                            <input type="hidden" id="ratingValue" name="ratingValue" value="0">
                            <input type="hidden" name="rate_rest_id" value="{{$rest_data['rest_id']}}">
                        </span>
                    </p>

                    <div class="form-group">
                        <label for="" class="reviewcmd">Leave your review below</label>
                        <textarea class="form-control" id="firstreview" rows="3" name="custfirstreview"></textarea>
                        <button type="submit"class="submitbtn">Rate</button>
                    </div>
                </div>
            </form> 

        @endif
        
        @foreach ($rating_datas as $rate_data)
            <!-- Other customer's review -->
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
                    </div>
                </div>
            </div>
        @endforeach
            
        </div>
    </div>

    <script>
        const carousel = document.querySelector(".carousel"),
        firstpic = carousel.querySelectorAll("img")[0];
        arrowButton = document.querySelectorAll(".menucontainer i") ;

        const showHiddenIcon = () => {
            //show and hide button based on the scroll left value
            let scrollWidth = carousel.scrollWidth - carousel.clientWidth; //max scrollable width
            arrowButton[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
            arrowButton[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
        }

        arrowButton.forEach(icon => {
            icon.addEventListener("click", () =>{
                let firstpicwidth = firstpic.clientWidth +10; //add 10 margin to 1st pic
                carousel.scrollLeft += icon.id == "left-btn" ? -firstpicwidth : firstpicwidth;
                setTimeout(() => {
                    showHiddenIcon(); }, 30);
            });
        });

        // let isDragStart = false, prevPageX, prevScrollLeft;

        // const dragStart = (e) => {
        //     isDragStart = true;
        //     prevPageX = e.pageX;
        //     prevScrollLeft = carousel.scrollLeft;
        // }

        // const dragging = (e) =>{
        //     //scroll image to left based on mourse cursor
        //     if (!isDragStart) return;
        //     e.preventDefault();
        //     let positionDiff = e.pageX - prevPageX;
        //     carousel.scrollLeft = prevScrollLeft - positionDiff;
        // }

        // const dragStrop = () =>{
        //     isDragStart = false;
        // }

        // carousel.addEventListener("mousedown", dragStart);
        // carousel.addEventListener("mousemove", dragging);
        // carousel.addEventListener("mousemove", dragStop);

        const stars = document.querySelectorAll('.newrating i');
        const ratingValueInput = document.getElementById('ratingValue');

        // Add click event listeners to each star icon
        stars.forEach((star, index) => {
            star.addEventListener('click', () => {
                // Set the clicked star and all previous stars to solid
                for (let i = 0; i <= index; i++) {
                    stars[i].classList.remove('fa-regular');
                    stars[i].classList.add('fa-solid');
                }

                // Set the remaining stars to regular
                for (let i = index + 1; i < stars.length; i++) {
                    stars[i].classList.remove('fa-solid');
                    stars[i].classList.add('fa-regular');
                }

                ratingValueInput.value = index + 1;
            });
        });

        // Let customer give rating
        // const ratings = document.querySelectorAll('.newrating .fa-solid.fa-star');

        // Add event listener to each star icon
        // ratings.forEach((starIcon, index) => {
        //     starIcon.addEventListener('click', () => {
        //         // Remove selected class from all star icons
        //         ratings.forEach((starIcon, i) => {
        //             starIcon.classList.remove('selected');
        //         });

        //         // Add selected class to clicked star icon and all previous star icons
        //         for (let i = 0; i <= index; i++) {
        //             ratings[i].classList.add('selected');
        //         }

        //         // Store the rating value (index + 1) in a variable or submit it to the server
        //         const rating = index + 1;
        //         console.log('Selected rating:', rating);
        //     });
        // });

        @if ($rest_data['rating'])
            //icons in review box
            document.addEventListener('DOMContentLoaded', function(){
                const reseticon = document.querySelector('.fa-solid.fa-rotate-left');
                const editicon = document.querySelector('.fa-regular.fa-pen-to-square');
                const saveicon = document.querySelector('.fa-regular.fa-floppy-disk');
                const deleteicon = document.querySelector('.fa-solid.fa-trash');
                const textarea = document.querySelector('.form-control');

                textarea.disabled = true;
                // Reset the textarea value
                reseticon.addEventListener('click', () => {
                    textarea.value = '';
                });

                // Edit --only shown when edit icon is click
                editicon.addEventListener('click', () => {
                    textarea.disabled = false;
                });

                // Save
                saveicon.addEventListener('click', () => {
                    const updatedReview = textarea.value;

                    // need write php to save the value
                    textarea.disabled = true;
                });

                // Delete
                deleteicon.addEventListener('click', () => {
                    // need to write code to delete from das
                    
                });
            });
        @else 
            textarea.disabled = false;
        @endif
        
    </script>
</body>
</html>

@include ('footer')