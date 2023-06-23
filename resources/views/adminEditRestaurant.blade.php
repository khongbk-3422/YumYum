@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        .main{
          margin-top: 80px;
          position: relative;
        }
        /* .main.sideMenuBar{
          float: left;
        } */
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

/* Carousel */
.carouselContainer{
    max-width: 100%;
    margin-bottom:10px;
}

.carouselContainer .carousel{
    margin: 0 10px;
    height:280px;
    margin-top:10px;
}

.carouselContainer .carousel-inner{
    display:flex;
}

.carouselContainer .carousel-item{
    display:block;
    margin-right:-5px;
    flex: 0 0 calc(100% / 4);
    padding:18px 16px;
}

.carouselContainer .card{
    margin: 0 10px;
    height:250px;
    border-radius:5px;
    box-shadow: 2px 6px 8px 0 rgba(22,22,26, .18);
    transition:0.5s;
}

.carouselContainer .card:hover{
    transform:scale(1.1);
}

.carouselContainer .card img{
    width:100%;
    height:150px;
    object-fit:cover;
}

.carouselContainer .card-body .card-title{
    font-size:18px;
}

.carouselContainer .card-body .card-text{
    margin-bottom:3px;
}

.carouselContainer .card-body .rating{
    color: grey;
    margin-right:5px;
}

.carouselContainer .card-body i{
    font-size:12px;
    /* color:#cfcda5; */
    color:#d1d18a;
}

.carouselContainer .carousel-control-prev{
    height: 6vh;
    width:6vh;
    background-color: rgb(100, 95, 95);
    border-radius:50%;
    top:50%;
    transform: translateY(-50%);
    opacity:.5;
}

.carouselContainer .carousel-control-next{
    height: 6vh;
    width:6vh;
    background-color: rgb(100, 95, 95);
    border-radius:50%;
    top:50%;
    transform: translateY(-50%);
    opacity:.5;
}

.title{
    text-align:center;
    margin:10px;
}

/* Restaurant cards */
.restContainer{
    margin-top:10px;
}

.restContainer .title{
    text-align:center;
    margin:10px;
}

.restContainer .card{
    height:180px;
}

.restContainer .card .row img{
    width:210px;
    height:180px;
    border-top-left-radius: 5px;
    border-bottom-left-radius: 5px;
}

.restContainer .card-body{
    width:600px;
    margin:0 6px;
}

.restContainer .card-text i{
    padding:0 6px;
}

.restContainer .carousel-item img{
    width:100%;
    height:100%;
}

.viewRestBtn{
    border:none;
    background:#e0dfdc;
    color:black;
    margin:15px;
    font-size:18px;
    font-weight:black;
    border-radius:5px;
    height:35px;
    outline:none;
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
      </ul>
  </div>
    {{-- restaurantCard --}}
    <div class="restaurantCard">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <script>
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