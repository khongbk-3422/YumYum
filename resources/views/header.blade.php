<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')

    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .navbar{
            background-color: #EFF0EA;
        } 

        .navbar-nav a {
            font-size: 15px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .navbar .navbar-brand {
            color: #000;
            font-size: 25px;
            text-transform: uppercase;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .navbar .navbar-brand:focus, .navbar .navbar-brand:hover {
            color: #000;
        }

        .navbar .navbar-item{
            margin:auto;
        }

        .navbar .navbar-nav .nav-link {
            color: #000;
        }

        .navbar .navbar-nav .nav-link:focus, .navbar .navbar-nav .nav-link:hover {
            color: #c4b999;
        }

        .navbar .dropdown-menu .dropdown-item:hover{
            background-color:#c4b999;
        }

        .profilePic img{
            width:40px;
            height:40px;
            border-radius:50%;
        }

        .navbar .dropdown-menu li a i{
            margin-right:6px;
        }

        @media (max-width: 991.98px) {
            .navbar .navbar-nav {
                flex-direction: column;
                margin-top: 10px;
            }

            .navbar .navbar-nav .nav-item {
                margin-bottom: 5px;
            }

            .navbar .navbar-brand {
                margin-bottom: 10px;
            }

            .navbar .navbar-toggler {
                position: absolute;
                top: 0;
                right: 0;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-warning">Yum</span>Yum</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation" onclick="toggleNavbar(event)">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/custHomePage' ? 'active' : ''; ?> " href="/custHomePage">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/viewRestaurantPage' ? 'active' : ''; ?> " href="/viewRestaurantPage">Restaurant</a>
					</li>
                    
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/spin' ? 'active' : ''; ?>" href="/spin">Spinwheel</a>
					</li>

					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/custHistoryPage' ? 'active' : ''; ?>"  href="/custHistoryPage">History</a>
					</li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            {{session('user_name')}}
                            <span class="profilePic">
                                <img src="data:image/jpg;base64,{{base64_encode(session('user_pic'))}}" >
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item <?php echo $_SERVER['REQUEST_URI'] === '/custProfilePage' ? 'active' : ''; ?> " href="/custProfilePage">
                                <i class="fa-solid fa-gear"></i> Settings</a>
                            </li> 

                            <div class="dropdown-divider"></div>

                            <li>
                                <a class="dropdown-item" href="{{ url('logout') }}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
    <script>
        function toggleNavbar(event) {
            event.preventDefault();
            var dropdownMenu = document.getElementById("navbarSupportedContent");
            var navbarToggler = document.querySelector(".navbar-toggler");

            if (dropdownMenu.classList.contains("show")) {
                dropdownMenu.classList.remove("show");
                navbarToggler.setAttribute("aria-expanded", false);
            } else {
                dropdownMenu.classList.add("show");
                navbarToggler.setAttribute("aria-expanded", true);
            }
        }
    </script>
</body>
</html>
