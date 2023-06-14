@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .w-100{
            height: 100vh;
        }

        .sectionPadding{
            padding: 50px 0;
        }

        .cardContainer{
            width:100%;
            padding : 0 16px;
        }

        .cardContainer .title{
            text-align:center;
            margin: 70px;
        }

        .card{
            transition: transform 0.2s;
        }

        .card:hover{
            transform: scale(1.1);
        }

    </style>
</head>
<body>
    <!-- Add filter function bar?? -->

    <!-- List of all rest [fetch from sql] -->


    <!-- Restaurant section starts-->
    <section class="restaurantExample section-padding" id = "restaurantExp">
        <div class="cardContainer">
            <div class="title">
                <h3>Top Recommended Restaurant <i class="fa-regular fa-thumbs-up"></i></h3>
            </div>

            <div class="row row-cols-1 row-cols-md-4 g-3">
            <div class="col">
                <div class="card">
                <img src="{{ asset ('image/rest1.jpg') }}" class="card-img-top" alt="Ishin Japanese Dining">
                <div class="card-body">
                    <h5 class="card-title">Ishin Japanese Dining</h5>
                    <p class="card-text">Located along the busy Old Klang Road in a building by itself, Ishin has made a name for itself for its genuine Japanese and Kaiseki-style cuisine.</p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="{{ asset ('image/rest2.jpg') }}" class="card-img-top" alt="Positano Risto">
                <div class="card-body">
                    <h5 class="card-title">Positano Risto</h5>
                    <p class="card-text">Ranked KL's Top #2 Restaurant, Positano Risto captures the essence of Italian cuisine and culture, transporting guests to the vibrant streets of Positano.</p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="{{ asset('image/rest3.jpg') }}" class="card-img-top" alt="Beta KL">
                <div class="card-body">
                    <h5 class="card-title">Beta KL</h5>
                    <p class="card-text">Located in the heart of Kuala Lumpur, Beta KL is well-known for its modern Malaysian gastronomy and highlighting seasonal and locally sourced ingredients.</p>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                <img src="{{ asset('image/rest4.jpg') }}" class="card-img-top" alt="Chambers Grill">
                <div class="card-body">
                    <h5 class="card-title">Chambers Grill</h5>
                    <p class="card-text">Located in Kuala Lumpur, Chambers Grill  offers an innovative grill menu of prime aged meat cuts or fresh seafood cooked over lava stone or charcoal. </p>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Restaurant section ends -->
    
</body>
</html>

@include('newFooter')