<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/84db3d8316.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
 
    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .background{
            background: url('image/loginBkg.jpg') no-repeat;
            width:100%;
            height:100vh;
            background-size:cover;
            background-position:center;
            filter:blur(5px);
            
        }

        .container{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            width:75%;
            height:550px;
            background: url('image/loginBkg.jpg') no-repeat;
            background-size:cover;
            background-position:center;
            border-radius:10px;
        }

        .container .content{
            position:absolute;
            top:0;
            left:0;
            width:58%;
            height:calc(100% - 160px);
            background:transparent;
            padding:40px;
            color:white;
            display:flex;
            justify-content:space-between;
            flex-direction:column;
        }

        .content .logo{
            font-size:30px;
        }

        .text h2{
            font-size:40px;
            line-height:1;
        }

        .text h2 span{
            font-size:25px;
        }

        .text p{
            font-size:15px;
            margin: 20px 0;
        }

        .socialIcons a i{
            font-size:25px;
            color: white;
            margin-right:15px;
            transition: .5s ease;
        }

        .socialIcons a:hover i{
            transform: scale(1.2);
        }

        .container .loginPanel{
            position:absolute;
            top:0;
            right:0;
            width:calc(100% - 58%);
            height:100%;
            overflow: hidden;
        }

        .loginPanel .formPanel{
            position:absolute;
            display:flex;
            justify-content: center;
            align-items:center;
            width:100%;
            height:100%;
            background:transparent;
            backdrop-filter:blur(10px);
            border-top-right-radius:10px;
            border-bottom-right-radius:10px;
            color:white;
        }

        .loginPanel .formPanel.login{
            transform:translateX(0);
            transition: transform .6s ease;
            transition-delay: .7s;
            z-index: 1;
        }

        .loginPanel.active .formPanel.login{
            transform:translateX(430px);
            transition-delay:0s;
            z-index: 0;
        }

        .loginPanel .formPanel.register{
            transform: translateX(430px);
            transition: transform .6s ease;
            transition-delay:0s;
            z-index: 0;
        }

        .loginPanel.active .formPanel.register{
            transform: translateX(0);
            transition-delay: .7s;
            z-index: 1;
        }

        .formPanel h2{
            font-size:25px;
            text-align:center;
        }

        .formPanel .inputCol{
            position:relative;
            width:340px;
            height:40px;
            border-bottom: 1px solid white;
            margin: 30px 0;
        }

        .inputCol input{
            width:100%;
            height:100%;
            background:transparent;
            border:none;
            outline:none;
            font-size: 16px;
            color:white;
            font-weight:300;
            padding-right:25px;
        }

        .inputCol label{
            position: absolute;
            top:50%;
            left:0;
            transform: translateY(-50%);
            font-size:16px;
            font-weight:600;
            pointer-events:none;
            transition: .5s ease;
        }

        .inputCol input:focus~label,
        .inputCol input:valid~label{
            top:-5px;
        }

        .inputCol .icon{
            position:absolute;
            top:13px;
            right:0;
            font-size:20px;
            font-weight:300;
        }

        .btn{
            width:100%;
            height:40px;
            background:#998f8b;
            border:none;
            outline:none;
            border-radius:5px;
            cursor: pointer;
            font-size:20px;
            color:white;
            font-weight:300;
            box-shadow: 0 0 10px rgba(0, 0, 0, .5);
        }

        .loginPanel .login-register{
            font-size:15px;
            font-weight:300;
            text-align:center;
            margin-top:25px;
        }

        .login-register p a{
            color:white;
            font-weight:300;
            text-decoration:none;
        }
         
        .login-register p a:hover{
            text-decoration:underline;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo">YumYum</h2>

            <div class="text">
                <h2>Welcome! <br> 
                <span>To Our Website</span></h2>

                <p>Discover the culinary delights that await you in our extensive database. <br>
                    Let us guide you to the perfect dining experience, where exquisite <br>
                    flavors and memorable moments come together.
                    <br> Start your gastronomic journey now!
                </p>

                <div class="socialIcons">
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="loginPanel">
            <!-- login -->
            <div class="formPanel login">
                <form action="login" method="POST">
                    @csrf
                    <h2>Login</h2>

                    <div class="inputCol">
                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                        <input type="text" name="email">
                        <label>Email</label>
                    </div>

                    <div class="inputCol">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password">
                        <label>Password</label>
                    </div>

                    <button type="submit" class="btn">Login</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="registerLink">Register</a> </p>
                    </div>
                </form>
            </div>

            <!-- register -->
            <div class="formPanel register">
                <form action="register" method="POST">
                    @csrf
                    <h2>Register</h2>

                    <div class="inputCol">
                        <span class="icon"><i class="fa-regular fa-user"></i></span>
                        <input type="text" name="name">
                        <label>Name</label>
                    </div>

                    <div class="inputCol">
                        <span class="icon"><i class="fa-regular fa-envelope"></i></span>
                        <input type="text" name="email">
                        <label>Email</label>
                    </div>

                    <div class="inputCol">
                        <span class="icon"><i class="fa-solid fa-square-phone"></i></span>
                        <input type="text" name="contact">
                        <label>Contact</label>
                    </div>

                    <div class="inputCol">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password">
                        <label>Password</label>
                    </div>

                    <div class="inputCol">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="conf_password">
                        <label>Confirm Password</label>
                    </div>

                    <button type="submit" class="btn">Register</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="loginLink">Login</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

@if(Session::has('email_not_found'))
    <script>
        alert('Email not found!');
    </script>
@endif
@if(Session::has('wrong_password'))
    <script>
        alert('Wrong Password!');
    </script>
@endif
@if(Session::has('email_used'))
    <script>
        alert('Email used!');
    </script>
@endif
@if(Session::has('email_error'))
    <script>
        alert("{{ Session::get('email_error') }}");
    </script>
@endif
@if(Session::has('contact_error'))
    <script>
        alert("{{ Session::get('contact_error') }}");
    </script>
@endif
@if(Session::has('password_error'))
    <script>
        alert("{{ Session::get('password_error') }}");
    </script>
@endif
@if(Session::has('name_error'))
    <script>
        alert("{{ Session::get('name_error') }}");
    </script>
@endif
@if(Session::has('conf_password_error'))
    <script>
        alert("{{ Session::get('conf_password_error') }}");
    </script>
@endif
@if(Session::has('register_failed'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            loginPanel.classList.add('active');
            {{ Session::forget('register_failed') }};
        });
    </script>
@endif
@if(Session::has('successful_register'))
    <script>
        alert('Successful Register!');
    </script>
@endif

<script>
    const loginPanel = document.querySelector('.loginPanel');
    const login_link = document.querySelector('.loginLink');
    const register_link = document.querySelector('.registerLink');

    register_link.addEventListener('click', () => {
        loginPanel.classList.add('active');
    });

    login_link.addEventListener('click', () => {
        loginPanel.classList.remove('active');
    });
</script>
</html>