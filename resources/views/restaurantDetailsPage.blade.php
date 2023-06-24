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
            <div class="restName">
                <h3>Iketeru <span class="verification"><i class="bi bi-patch-check"></i>Claimed</span></h3>
                <i class="fa-solid fa-location-dot"><span class="restinfo">addresss</span></i> |
                <i class="fa-solid fa-square-phone"><span class=restinfo>01123455</span></i>
            </div>
        </div>

        <div class="menucontainer">
            <i id="left-btn" class="fa-solid fa-angle-left"></i>
            <div class="carousel">
                <img src="{{asset('image/restaurants/iketeru1.jpg')}}">
                <img src="{{asset('image/restaurants/iketeru2.jpg')}}">
                <img src="{{asset('image/restaurants/iketeru3.jpg')}}">
                <!-- <img src="{{asset('image/restaurants/iketeru3.jpg')}}">
                <img src="{{asset('image/restaurants/iketeru3.jpg')}}"> -->
            </div>
            <i id="right-btn" class="fa-solid fa-angle-right"></i>
        </div>

        <div class="cardcontainer">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5>Rating</h5>
                            <h6>4.5
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </h6>
                        </div>

                        <div class="card-body">
                            <h5>Price Range</h5>
                            <p>RM20-RM500</p>
                        </div>

                        <div class="card-body">
                            <h5>Cuisine</h5>
                            <p>Japanese</p>
                        </div> 
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="restLocation">Location</h5>
                            <iframe width="650" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.it/maps?q=4 off, Persiaran Klang, Batu 3 3, 202, Old Klang Rd, Taman Shanghai, 58000 Kuala Lumpur, Federal Territory of Kuala Lumpur&output=embed"></iframe>
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

            <!-- Customer's feedback -->
            <div class="reviewcontainer">
                <div class="reviewbox">
                    <div class="box-top">
                        <div class="profile">
                            <div class="custpic">
                                <img src="data:image/[image_format];base64,{{base64_encode(session('user_pic'))}}">
                            </div>

                            <div class="custname">
                                <strong>alicia</strong>
                            </div>
                        </div>

                        <div class="rating">
                            <!-- how to display number of star based on sql -->
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            
                        </div>
                    </div>

                    <div class="custreview">
                        <!-- need add link to the icon -->
                        <p class="date">2023/05/12 21:45:21 
                            <span class="icons">
                                <!-- return to normal view -->
                                <i class="fa-solid fa-rotate-left"></i>
                                <!-- Trigger text area -->
                                <i class="fa-regular fa-pen-to-square"></i>
                                <!-- save new cmd -->
                                <i class="fa-regular fa-floppy-disk"></i>
                                <!-- delete -->
                                <i class="fa-solid fa-trash"></i>
                            </span>
                        </p>
                        <div class="form-group">
                            <label for="">Review</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="custfirstreview">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed fuga praesentium repellendus, ad quas quasi consequuntur</textarea>
                        </div>
                    </div>
                </div>

                <!-- New feedback -->
                <form action="" method="POST">
                    <div class="reviewbox">
                        <div class="box-top">
                            <div class="profile">
                                <div class="custpic">
                                    <img src="{{asset('image/rest1.jpg')}}">
                                </div>

                                <div class="custname">
                                    <strong>alicia</strong>
                                </div>
                            </div>

                            <div class="newrating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>

                        <!-- need to retreive the value and save into das -->
                        <div class="custreview">
                            <p class="date">date</p>
                            <div class="form-group">
                                <input type="hidden" id="ratingValue" name="ratingValue">
                                <label for="newreview">Leave your review here</label>
                                <textarea class="form-control" id="firstreview" rows="3" name="firstreview"></textarea>
                                <button type="submit"class="submitbtn">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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



        // Let customer give rating
        const ratings = document.querySelectorAll('.newrating .fa-solid.fa-star');

        // Add event listener to each star icon
        ratings.forEach((starIcon, index) => {
            starIcon.addEventListener('click', () => {
                // Remove selected class from all star icons
                ratings.forEach((starIcon, i) => {
                    starIcon.classList.remove('selected');
                });

                // Add selected class to clicked star icon and all previous star icons
                for (let i = 0; i <= index; i++) {
                    ratings[i].classList.add('selected');
                }

                // Store the rating value (index + 1) in a variable or submit it to the server
                const rating = index + 1;
                console.log('Selected rating:', rating);
            });
        });


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
        
    </script>
</body>
</html>

@include ('footer')