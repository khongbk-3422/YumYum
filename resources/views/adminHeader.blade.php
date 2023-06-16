<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- google font-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <!-- font awesome icon-->
    <script src="https://kit.fontawesome.com/84db3d8316.js" crossorigin="anonymous"></script>
    <!-- bootstrap js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <title>Document</title>

    <style>
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

        .navbar .navbar-nav .nav-link {
            color: #000;
        }

        .navbar .navbar-nav .nav-link:focus, .navbar .navbar-nav .nav-link:hover {
            color: #c4b999;
        }

        .navbar .dropdown-menu .dropdown-item:hover{
            background-color:#c4b999;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-warning">Yum</span>Yum</a> <!-- change colour-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/adminHomePage' ? 'active' : ''; ?> " href="/adminHomePage">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/adminEditCustomer' ? 'active' : ''; ?> " href="/adminEditCustomer">Customer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo $_SERVER['REQUEST_URI'] === '/adminEditRestaurant' ? 'active' : ''; ?> " href="/adminEditRestaurant">Restaurant</a>
					</li>
                    <li class="nav-item dropdown">
                        <!-- display the cust's name-->
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{session('admin_name')}}</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <!-- adjust the line -->
                            <li><hr></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>
