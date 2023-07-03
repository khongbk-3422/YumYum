@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants</title>
    @include('cdn')
    <link rel="stylesheet" href="{{ asset('css/restaurantPage.css') }}">
</head>
<body>
    <div class="mainContainer">
        <!-- Sidemenu Starts -->
        <div class="sidemenu">
            <!-- Need form mah? Cuz need to get the search value -->
            <div class="searchBar">
                <input type="text" id="searchInput" placeholder="Search here">
                <a href="#" id="searchButton"><i class="fa fa-search"></i></a>
            </div>

            <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <li class="mb-2">
                    <a href="#submenu1" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-utensils"></i>
                        <span class="ms-1 d-none d-sm-inline">Category</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="collapse nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input category-checkbox" type="checkbox" value="" id="italianCB">
                                <label class="form-check-label mb-2" for="italianCB">Italian</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input category-checkbox" type="checkbox" value="" id="japaneseCB">
                                <label class="form-check-label  mb-2" for="japaneseCB">Japanese</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input category-checkbox" type="checkbox" value="" id="malaysianCB">
                                <label class="form-check-label  mb-2" for="malaysianCB">Malaysian</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input category-checkbox" type="checkbox" value="" id="steakhouseCB">
                                <label class="form-check-label  mb-2" for="steakhouseCB">Steakhouse</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input category-checkbox" type="checkbox" value="" id="thaiCB">
                                <label class="form-check-label  mb-2" for="thaiCB">Thai</label>
                            </div>
                        </li>
                    </ul>
                </li>

                <li class="mb-2">
                    <a href="#submenu2" class="nav-link px-0 align-middle ">
                        <i class="bi bi-currency-dollar"></i>
                        <span class="ms-1 d-none d-sm-inline">Price</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input price-checkbox" type="checkbox" value="" id="price1CB">
                                <label class="form-check-label mb-2" for="price1CB">Price 1</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input price-checkbox" type="checkbox" value="" id="price2CB">
                                <label class="form-check-label  mb-2" for="price2CB">Price 2</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input price-checkbox" type="checkbox" value="" id="price3CB">
                                <label class="form-check-label  mb-2" for="price3CB">Price 3</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input price-checkbox" type="checkbox" value="" id="price4CB">
                                <label class="form-check-label  mb-2" for="price4CB">Price 4</label>
                            </div>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#submenu3" class="nav-link px-0 align-middle">
                        <i class="bi bi-star"></i>
                        <span class="ms-1 d-none d-sm-inline">Rating</span>
                        <i class="fa-solid fa-angle-down"></i>
                    </a>

                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input rating-checkbox" type="checkbox" value="" id="rating1CB">
                                <label class="form-check-label mb-2" for="rating1CB">Rating 1</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input rating-checkbox" type="checkbox" value="" id="rating2CB">
                                <label class="form-check-label  mb-2" for="rating2CB">Rating 2</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input rating-checkbox" type="checkbox" value="" id="rating3CB">
                                <label class="form-check-label  mb-2" for="rating3CB">Rating 3</label>
                            </div>
                        </li>

                        <li>
                            <div class="form-check">
                                <input class="form-check-input rating-checkbox" type="checkbox" value="" id="rating4CB">
                                <label class="form-check-label  mb-2" for="rating4CB">Rating 4</label>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidemenu Ends -->

        <!-- Top restaurant carousel Starts -->
        <div class="contentContainer">
            <div class="carouselContainer">
                <div class="title">
                    <h3>Top Recommend Restaurants</h3>
                </div>

                <div id="carouselExampleRide" class="carousel" data-bs-ride="true">
                    <div class="carousel-inner">

                        @foreach ($best_rest_data as $best_rest)
                            <div class="carousel-item active">
                                <div class="card" style="width:14rem;">
                                    <img src="data:image/[image_format];base64,{{ $best_rest->rest_pic }}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$best_rest['rest_name']}}</h5>
                                        <p class="card-text text-muted">{{$best_rest['rest_category']}}</p>
                                        <p class="rating">{{$best_rest['avg_rating']}}
                                            @if ($best_rest['avg_rating'] == 5)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 4.15 && $best_rest['avg_rating'] < 5)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 3.85 && $best_rest['avg_rating'] < 4.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 3.15 && $best_rest['avg_rating'] < 3.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 2.85 && $best_rest['avg_rating'] < 3.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 2.15 && $best_rest['avg_rating'] < 2.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 1.85 && $best_rest['avg_rating'] < 2.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 1.15 && $best_rest['avg_rating'] < 1.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 0.85 && $best_rest['avg_rating'] < 1.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-light fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($best_rest['avg_rating'] >= 1.15 && $best_rest['avg_rating'] < 1.85)
                                                <i class="fa-solid fa-star-half-stroke"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @else
                                            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>  
                                            @endif
                                            <span class="custrateqty">({{$best_rest['rating_count']}})</span>
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        @endforeach

                        </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Top restaurant carousel End -->

            <!-- Restaurant Cards Start -->
            <div class="restContainer">
                <div class="title">
                    <h3>Restaurants in Kuala Lumpur</h3>
                </div>
                @foreach ($datas as $data)
                    <div class="restContain card mb-3" data-cuisine="{{ $data['rest_category'] }}">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="data:image/[image_format];base64,{{ $data->data_pic }}" alt="">
                            </div>

                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $data['rest_name']}}</h5>
                                    
                                    <p class="card-text text-muted">{{$data['rest_category']}}</p>
                                        <p class="rating">{{ $data['avg_rate']}} 
                                            @if ($data['avg_rate'] == 5)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 4.15 && $data['avg_rate'] < 5)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> 
                                            @elseif ($data['avg_rate'] >= 3.85 && $data['avg_rate'] < 4.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 3.15 && $data['avg_rate'] < 3.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 2.85 && $data['avg_rate'] < 3.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 2.15 && $data['avg_rate'] < 2.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 1.85 && $data['avg_rate'] < 2.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 1.15 && $data['avg_rate'] < 1.85)
                                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 0.85 && $data['avg_rate'] < 1.15)
                                                <i class="fa-solid fa-star"></i><i class="fa-light fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @elseif ($data['avg_rate'] >= 1.15 && $data['avg_rate'] < 1.85)
                                                <i class="fa-solid fa-star-half-stroke"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                            @else
                                            <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>  
                                            @endif
                                            <span class="custrateqty">({{ $data['count']}})</span>
                                        </p>
                                    <p class="card-text"><i class="bi bi-geo-alt"></i>{{ $data['rest_address'] }}</p>
                                    <a href={{"restaurantDetailsPage/".$data['rest_id']}}><button class="viewRestBtn">View More</button></a>
                                    <a href={{"addToWheel/".$data['rest_id']}}><button class="addRestBtn">Add to spin wheel</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Restaurant Cards End -->
    </div>
</div>

<script>
// Wait for the DOM to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
  // Get the checkboxes for price and rating
  var priceCheckboxes = document.querySelectorAll(".price-checkbox");
  var ratingCheckboxes = document.querySelectorAll(".rating-checkbox");

  // Add event listeners to the checkboxes
  priceCheckboxes.forEach(function(checkbox) {
    checkbox.addEventListener("change", filterRestaurants);
  });

  ratingCheckboxes.forEach(function(checkbox) {
    checkbox.addEventListener("change", filterRestaurants);
  });

  // Function to filter restaurants based on selected checkboxes
  function filterRestaurants() {
    var selectedPrices = getSelectedValues(priceCheckboxes);
    var selectedRatings = getSelectedValues(ratingCheckboxes);

    // Get all restaurant elements
    var restaurants = document.querySelectorAll(".restaurant");

    // Loop through each restaurant
    restaurants.forEach(function(restaurant) {
      var price = restaurant.getAttribute("data-price");
      var rating = restaurant.getAttribute("data-rating");

      // Check if the restaurant's price and rating match the selected checkboxes
      if (
        (selectedPrices.length === 0 || selectedPrices.includes(price)) &&
        (selectedRatings.length === 0 || selectedRatings.includes(rating))
      ) {
        // Show the restaurant if it matches the selected checkboxes
        restaurant.style.display = "block";
      } else {
        // Hide the restaurant if it doesn't match the selected checkboxes
        restaurant.style.display = "none";
      }
    });
  }

  // Function to get the selected values from a group of checkboxes
  function getSelectedValues(checkboxes) {
    var selectedValues = [];

    checkboxes.forEach(function(checkbox) {
      if (checkbox.checked) {
        selectedValues.push(checkbox.value);
      }
    });

    return selectedValues;
  }
});

</script>

</body>

@if(Session::has('rest_already_added'))
    <script>
        alert("Restaurant already added in Spin Wheel!");
    </script>
@endif

@if(Session::has('rest_added'))
    <script>
        alert("Restaurant successfully added to Spin Wheel!");
    </script>
@endif

    <script>
        //search function
        var searchInput = document.getElementById('searchInput');
        var searchButton = document.getElementById('searchButton');
        searchButton.addEventListener('click', function() {
            performSearch();
        });

        searchInput.addEventListener('keyup', function(event) {
            // Check if the Enter key was pressed (key code 13)
            if (event.keyCode === 13) {
                performSearch();
            }
        });

        function performSearch() {
            var searchValue = searchInput.value;
            window.location.href = 'filter/' + encodeURIComponent(searchValue);
        }

        //sidemnu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const menulinks = document.querySelectorAll('#menu .nav-link');

            menulinks.forEach(function(link){
                link.addEventListener('click', function(event){
                    const submenu = this.nextElementSibling;
                    submenu.classList.toggle('show');
                    event.preventDefault();
                });
            });
        });

        //top recommend restaurant card choser
        $(document).ready(function() {
            var carouselWidth = $('.carouselContainer .carousel-inner')[0].scrollWidth;
            var cardWidth = $('.carouselContainer .carousel-item').width();

            var scrollPosition = 0;

            $('.carouselContainer .carousel-control-next').on('click', function(){
                if(scrollPosition < (carouselWidth - (cardWidth * 4))){
                    scrollPosition = scrollPosition + cardWidth;
                    $('.carouselContainer .carousel-inner').animate({scrollLeft: scrollPosition}, 
                    400);
                }
            });

            $('.carouselContainer .carousel-control-prev').on('click', function(){
                if(scrollPosition > 0){
                    scrollPosition = scrollPosition - cardWidth;
                    $('.carouselContainer .carousel-inner').animate({scrollLeft: scrollPosition}, 
                    400);
                }
            });
        });

    // price changes with entered price
    const priceRange = document.querySelectorAll(".pricerange input"),
            rangeInput = document.querySelectorAll(".rangeinput input"),
            amount = document.querySelector(".slider .amount");

    let priceGap = 100;

    rangeInput.forEach(input =>{
        input.addEventListener("input", e =>{
            //get 2 inputs value
            let minPrice = parseInt(rangeInput[0].value),
                maxPrice = parseInt(rangeInput[1].value);

            if ((maxPrice - minPrice >= priceGap) && maxPrice <= 1000){
                if(e.target.className === "min_price"){
                    priceRange[0].value = minPrice;
                    amount.style.left = (minPrice / priceRange[0].max) * 100 + "%";
                }
                else{
                    priceRange[1].value = maxPrice;
                    amount.style.right = 100 - (maxPrice / priceRange[1].max) * 100 + "%";
                }
            }
        });
    });

    //slider value change with slided value
    priceRange.forEach(input =>{
        input.addEventListener("input", e =>{
            let minPrice = parseInt(priceRange[0].value),
                maxPrice = parseInt(priceRange[1].value);

            if (maxPrice - minPrice < priceGap){
                if(e.target.className === "minrange"){
                    priceRange[0].value = maxPrice - priceGap;
                }
                else{
                    priceRange[1].value = minPrice + priceGap;
                }
                
            }
            else{
                rangeInput[0].value = minPrice;
                rangeInput[1].value = maxPrice;
                amount.style.left = (minPrice / priceRange[0].max) * 100 + "%";
                amount.style.right = 100 - (maxPrice / priceRange[1].max) * 100 + "%";
                // console.log(minPrice, maxPrice)
            }
        });
    });



    </script>
</html>

