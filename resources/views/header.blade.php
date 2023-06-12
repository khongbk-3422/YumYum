<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font awesome icon-->
    <script src="https://kit.fontawesome.com/84db3d8316.js" crossorigin="anonymous"></script>
    <!-- bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>

    <style>
        .navbar{
            background-color:rgb(176, 172, 158);
        }

        .navbar-dark .navbar-nav .nav-link{
            font-family: 'Raleway', sans-serif;
            color :#3b3128;
            font-size: 16px;
            border-radius:5px;
        }

        .navbar-dark .navbar-nav .nav-link:hover, 
        .navbar-dark .navbar.nav .nav-link.active{
            background-color:#cfcabc;
        }

        .navbar-dark .dropdown-menu .dropdown-item:hover{
            background-color:#cfcabc;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark p-2 " id="headerNav">
        <div class="container-fluid">
            <a class="navbar-brand d-block d-lg-none" href="#">
                <img src="/image/logo.jpg" height="30" />
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto ">
                <li class="nav-item">
                    <a class="nav-link mx-2 <?php echo $_SERVER['REQUEST_URI'] === '/homePage' ? 'active' : ''; ?>" href="/homePage">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link mx-2" <?php echo $_SERVER['REQUEST_URI'] === '/viewRestaurantPage' ? 'active' : ''; ?> href="/viewRestaurantPage">Restaurant</a>
                </li>

                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link mx-2" href="#"><img src="/image/logo.jpg" height="30" /></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link mx-2 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Company</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">About Us</a></li>
                        <li><a class="dropdown-item" href="#">Contact us</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</body>
</html>
