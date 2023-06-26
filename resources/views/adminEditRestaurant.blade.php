@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Edit Restaurant</title>
    @include('cdn')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style> 
        /* .tablecontainer{
          background: pink;
          margin-top:80px;
          text-align: center;
        }
        table{}
        .design{
          margin-top:80px
        } */
        /* .main{
          margin-top: 80px;
          position: relative;
        } */
        /* .main.sideMenuBar{
          float: left;
        } */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;
  right: 28px;
  width: 100px;
  font-size: 15px;
}

.delete-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  bottom: 23px;
  right: 28px;
  width: 100px;
  font-size: 15px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  overflow: auto;
  max-height: 90%;
}

.form-popup::-webkit-scrollbar {
            display: none;
        }

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=number], .form-container input[type=number] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

.form-container input[type=file], .form-container input[type=file] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}
/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #F3D965;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
        .sidemenu{
    background:#F8F8F8;
    margin: 20px 10px;
    box-shadow:0 3px 6px rgba(0, 0, 0, 0.3);
    border-radius:10px;
    padding: 20px;
    flex: 0 0 240px;
    height:120vh;
    align-items:center;
}

.listwrapper{
    width:190px;
    /* padding: 2px 2px; */
}

.rangeinput{
    width:100%;
    display: flex;
    margin:5px 0 8px;
}

.rangeinput .field{
    height: 25px;
    width:45%;
    display: flex;
    align-items: center;
}

.field input{
    width:100%;
    height:100%;
    outline: none;
    font-size: 15px;
    text-align: center;
    margin-left: 3px;
    border-radius: 5px;
    border: 1px solid green;
    -moz-appearance: textfield;
}

.rangeinput .separator{
    width:30px;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button{
    -webkit-appearance: none;
}

.slider{
    height: 5px;
    background: rgb(202, 193, 193);
    border-radius: 5px;
    position: relative;
}

.slider .amount{
    height: 5px;
    left:10%;
    right:35%;
    position: absolute;
    border-radius: 5px;
    background: rgb(106, 106, 174);
}

.pricerange{
    position: relative;
}

.pricerange input{
    position: absolute;
    top: -5px;
    height: 5px;
    width: 100%;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
}

input[type="range"]::-webkit-slider-thumb{
    height: 10px;
    width: 10px;
    border-radius: 50%;
    -webkit-appearance: none;
    pointer-events: auto;
    background: rgb(228, 149, 149);
}

input[type="range"]::-moz-range-thumb{
    height: 10px;
    width: 10px;
    border: none;
    border-radius: 50%;
    pointer-events: auto;
    -moz-appearance: none;
    background: rgb(137, 199, 149);
}

.confirmbutton button{
    font-size: 18px;
    border-radius: 5px;
    background: rgb(250, 223, 228);
    border: none;
    margin-top: 8px;
    margin-left:70%;
}

.searchBar{
    height:30px;
    display:flex;
    cursor:pointer;
    padding:5px 5px;
    border-radius:30px;
    align-items:center;
    box-shadow:0 5px 5px rgba(0, 0, 0, 0.3);
    margin:15px 0;
}

.searchBar:hover input{
    width:140px;
}

.searchBar input{
    width:0;
    outline:none;
    border:none;
    font-size:15px;
    transition:0.8s;
    background:transparent;
}

.searchBar a i{
    color:#C0B0A2;
    font-size:18px;
}

.sidemenu .nav-link i{
    font-size:18px;
    color:black;
    margin-right:10px;
}

.sidemenu .nav-link span{
    font-size:16px;
    color:#674D41;
}

.sidemenu .nav-link .fa-angle-down{
    font-size:20px;
    color:#A39087;
    margin-left:22px;
}


        .main.restaurantCard{
          flex: 1;
          display: flex;
          flex-direction: column;
          max-width: calc(100% - 260px);
          align-items:center;
        }
        .main{
          display:flex;
          flex-wrap:wrap;
          justify-content: space-between;
          margin: 25px;
          margin-top:90px;
        background:#fcfcfa;
        }
    </style>
</head>
<body>
  <div class= "main">
    {{-- sidemenu --}}
    {{-- <div class="sideMenuBar">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Active</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div> --}}
     <!-- Sidemenu Starts -->
     <div class="sidemenu">
      <div class="searchBar">
          <input type="text" placeholder="Search here">
          <a href="">
              <i class="fa fa-search"></i>
          </a>
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
                          <input class="form-check-input" type="checkbox" value="" id="italianCB">
                          <label class="form-check-label mb-2" for="italianCB">Italian</label>
                      </div>
                  </li>

                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="japaneseCB">
                          <label class="form-check-label  mb-2" for="japaneseCB">Japanese</label>
                      </div>
                  </li>

                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="malaysianCB">
                          <label class="form-check-label  mb-2" for="malaysianCB">Malaysian</label>
                      </div>
                  </li>

                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="steakhouseCB">
                          <label class="form-check-label  mb-2" for="steakhouseCB">Steakhouse</label>
                      </div>
                  </li>

                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="thaiCB">
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
                  <div class="listwrapper">
                      <div class="rangeinput">
                          <div class="field">
                              <span>MIN</span>
                              <input type="number" name="min_price" value="100">
                          </div>

                          <div class="seperator">-</div>

                          <div class="field">
                              <span>MAX</span>
                              <input type="number" name="max_price" value="500">
                          </div>
                      </div>

                      <div class="slider">
                          <div class="amount"></div>
                      </div>

                      <div class="pricerange">
                          <input type="range" class="minrange" min="0" max="1000" value="100" name="min_price_range" step="50">
                          <input type="range" class="maxrange" min="0" max="1000" value="500" name="max_price_range" step="50">
                      </div>

                      <div class="confirmbutton">
                          <button>View</button>
                      </div>
                  </div>
              </ul>
          </li>

          <li class="mb-2">
              <a href="#submenu3" class="nav-link px-0 align-middle">
                  <i class="bi bi-geo-alt"></i>
                  <span class="ms-1 d-none d-sm-inline">Location</span>
                  <i class="fa-solid fa-angle-down"></i>
              </a>
                  
              <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="bintangCB">
                          <label class="form-check-label  mb-2" for="bintangCB">Bukit Bintang</label>
                      </div>
                  </li>
                  
                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="damansaraCB">
                          <label class="form-check-label  mb-2" for="damansaraCB">Damansara</label>
                      </div>
                  </li>

                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="sentralCB">
                          <label class="form-check-label  mb-2" for="sentralCB">Jalan Stesen Sentral</label>
                      </div>
                  </li>
                  
                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="ismailCB">
                          <label class="form-check-label  mb-2" for="ismailCB">Jalan Sultan Ismail</label>
                      </div>
                  </li>

                  <li>
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="razakCB">
                          <label class="form-check-label  mb-2" for="razakCB">Jalan Tun Razak</label>
                      </div>
                  </li>
              </ul>
          </li>
          <li class="mb-2">
              <a href="/adminAddRestaurant" class="nav-link px-0 align-middle">
                  <i class="fa-solid fa-plus"></i>
                  <span class="ms-1 d-none d-sm-inline">Add New Restaurant</span>
              </a>
          </li>
      </ul>
  </div>
    {{-- restaurantCard --}}
    <div class="restaurantCard">
      <div class="card" style="width: 30rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            {{-- need to set restaurant name database --}}
          <h5 class="card-title">Card title Restaurant NAME</h5> 
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <button class="open-button" onclick="openForm()">Edit</button>
          <button class="delete-button">Delete</button>
      </div>
    </div>
    <div class="form-popup" id="myForm">
        <form action="/action_page.php" class="form-container">
          <h1>Edit</h1>
      
          <label for="Id"><b>Id</b></label>
          <input type="text" placeholder="Enter Id" name="id" required>
      
          <label for="Restaurant Name"><b>Restaurant Name</b></label>
          <input type="text" placeholder="Enter Restaurant Name" name="restaurantName" required>
      
          <label for="Restaurant Contact"><b>Restaurant Contact</b></label>
          <input type="text" placeholder="Enter Restaurant Contact" name="restaurantContact" required>

          <label for="Restaurant Category"><b>Restaurant Category</b></label>
          <input type="text" placeholder="Enter Restaurant Category" name="restaurantCategory" required>

          <label for="Restaurant Address"><b>Restaurant Address</b></label>
          <input type="text" placeholder="Enter Restaurant Address" name="restaurantAddress" required>

          <label for="Minimum Price"><b>Minimum Price</b></label>
          <input type="number" placeholder="Enter Minimum Price" name="priceMin" required>

          <label for="Maximum Price"><b>Maximum Price</b></label>
          <input type="number" placeholder="Enter Maximum Price" name="priceMax" required>

          <label for="Restaurant Picture"><b>Restaurant Picture</b></label>
          <input type='file' name='image' class='form-control' multiple="multiple" accept="image/*" />

          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
        </form>
      </div>
  </div>
  <script>
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
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
    $(document).ready(function() {
            //top restaurant card choser
            var carouselWidth = $('.carouselContainer .carousel-inner')[0].scrollWidth;
            var cardWidth = $('.carouselContainer .carousel-item').width();

            var scrollPosition = 0;

            $('.carouselContainer .carousel-control-next').on('click', function(){
                if(scrollPosition < (carouselWidth - (cardWidth * 4))){
                    scrollPosition = scrollPosition + cardWidth;
                    $('.carouselContainer .carousel-inner').animate({scrollLeft: scrollPosition}, 
                    600);
                }
            });

            $('.carouselContainer .carousel-control-prev').on('click', function(){
                if(scrollPosition > 0){
                    scrollPosition = scrollPosition - cardWidth;
                    $('.carouselContainer .carousel-inner').animate({scrollLeft: scrollPosition}, 
                    600);
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
</body>
</html>