@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Image Slider-->
    <div id="carouselIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselIndicators" data-slide-to="1"></li>
        <li data-target="#carouselIndicators" data-slide-to="2"></li>
        <li data-target="#carouselIndicators" data-slide-to="3"></li>
        <li data-target="#carouselIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('image/bkg1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>WhyChoose Us?</h5>
                <p>Introducing you the best restaurant</p>
            </div>
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/bkg2.jpg') }}" alt="Second slide">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/bkg3.jpg') }}" alt="Third slide">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('image/bkg4.jpg') }}" alt="Fourth slide">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Fifth slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <!-- Image Slider-->
    
</body>
<script>
    $('.carousel').carousel({
        interval: 2000
    })
    
</script>
</html>
