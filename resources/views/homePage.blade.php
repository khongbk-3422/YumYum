@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- font awesome icon-->
    <script src="https://kit.fontawesome.com/84db3d8316.js" crossorigin="anonymous"></script>
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .cardContainer{
            align-item:
        }

    </style>

</head>
<body>
    <!-- Image Slider-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="d-block w-100" src="{{ asset('video/video1.mp4') }}" autoplay loop muted></video>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg1.jpg') }}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>WhyChoose Us?</h5>
                    <p>Introducing you the best restaurant</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg2.jpg') }}" alt="Third slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg3.jpg') }}" alt="Fourth slide">
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('image/bkg4.jpg') }}" alt="Fifth slide">
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Image Slider-->

    <!-- Some restaurant -->
    <div class="recommenedRest">
        <h1>Top Recommended Restaurant <i class="fa-regular fa-thumbs-up"></i></h1>
    </div>

    <div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        <div class="card">
        <img src="{{asset ('image/rest1.jpg') }}" class="card-img-top" alt="Ishin Japanese Dining">
        <div class="card-body">
            <h5 class="card-title">Ishin Japanese Dining</h5>
            <p class="card-text">Located along the busy Old Klang Road in a building by itself, Ishin has made a name for itself for its genuine Japanese and Kaiseki-style cuisine.</p>
        </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
        <img src="{{asset ('image/rest2.jpg') }}" class="card-img-top" alt="Positano Risto">
        <div class="card-body">
            <h5 class="card-title">Positano Risto</h5>
            <p class="card-text">Located in a prime location, Positano Risto captures the essence of Italian cuisine and culture, transporting guests to the vibrant streets of Positano</p>
        </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        </div>
    </div>


</body>
</html>

@include ('footer')