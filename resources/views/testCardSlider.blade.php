
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src=“https://code.jquery.com/jquery-3.7.0.min.js” integrity=“sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=” crossorigin=“anonymous”></script>
    <script src=“https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js” integrity=“sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN” crossorigin=“anonymous”></script>

    <style>
        .carousel-inner {
        padding: 1em;
        }

        .cards-wrapper{
            display:flex;
        }

        .card {
        margin: 0 0.5em;
        box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
        border: none;
        width: calc(100%/3);
        }

        .carousel-control-prev,
        .carousel-control-next {
        background-color: #e1e1e1;
        width: 6vh;
        height: 6vh;
        border-radius: 50%;
        top: 50%;
        transform: translateY(-50%);
        }

        .card .img-wrapper {
            max-width: 100%;
            height: 13em;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card img {
            max-height: 100%;
        }

    </style>

</head>
<body>
<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 4</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 5</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 6</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 7</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 8</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card" style="width : 18rem;">
                <div class="img-wrapper"><img src="..." class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 9</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<script>
    var multipleCardCarousel = document.querySelector(
  "#carouselExampleControls"
);

  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselExampleControls .carousel-control-next").on("click", function () {
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });
  $("#carouselExampleControls .carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselExampleControls .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600
      );
    }
  });

</script>


</body>
</html>