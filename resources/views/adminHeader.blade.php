<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>Document</title>
    @include('cdn')

    <style>
        .navbar{
            background-color: #EFF0EA;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
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

        .navbar .navbar-brand:focus, 
        .navbar .navbar-brand:hover {
            color: #000;
        }

        .navbar .navbar-item{
            margin:auto;
        }

        .navbar .navbar-nav .nav-link {
            color: #000;
        }

        .navbar .navbar-nav .nav-link:focus, 
        .navbar .navbar-nav .nav-link:hover {
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

        @media (max-width: 991.98px) {
            .navbar .navbar-nav {
                flex-direction: column;
                margin-top: 10px;
            }

            .navbar .navbar-nav .nav-item {
                margin-bottom: 10px;
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
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/adminHomePage' ? 'active' : ''; ?> " href="/adminHomePage">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/adminEditCustomer' ? 'active' : ''; ?> " href="/adminEditCustomer">Customer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/adminViewRestaurant' ? 'active' : ''; ?> " href="/adminViewRestaurant">Restaurant</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/adminEditRating' ? 'active' : ''; ?> " href="/adminEditRating">Ratings</a>
					</li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" aria-expanded="false" onclick="toggleDropdown()">
                            {{session('admin_name')}}
                            <span class="profilePic">
                                <img src="data:image/[image_format];base64,{{base64_encode(session('user_pic'))}}" />
                            </span>
                        </a>

                        <ul class="dropdown-menu" id="dropdownMenu">
                            <li>
                                <a class="dropdown-item <?php echo $_SERVER['REQUEST_URI'] === '/adminProfilePage' ? 'active' : ''; ?>" href="/adminProfilePage">
                                    Settings <span><i class="fa-solid fa-cog ml-4"></i></span>
                                </a>
                            </li>
                            <div class="dropdown-divider"></div>
                            <li>
                                <a class="dropdown-item" href="{{ url('logout') }}">Logout
                                <span><i class="fa-solid fa-right-from-bracket ml-4"></i></span>
                                </a>
                            </li>
                        </ul>
                    </li>

				</ul>
			</div>
		</div>
	</nav>

    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");

            function toggleDropdown() {
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
        }
    </script>
</body>
</html>
