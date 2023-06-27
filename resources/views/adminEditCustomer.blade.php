@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Managing Customer</title>
    @include('cdn')

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Raleway', sans-serif;
        }

        body{
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.05);
            margin-top: 80px;
        }

        main{
            width: 90%;
            margin: 0 auto;
            display: grid;
            grid-gap: 5rem;
            grid-template-columns: 65% auto;
        }

        .title{
            display: flex;
            margin-bottom: 15px;
            justify-content: space-between;
            align-items: center;
        }

        .title input[type=text] {
            padding: 6px;
            border: none;
            font-size: 17px;
            height: 40px;
            border-radius: 20px;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.08);
        }

        .list{
            padding: 3rem;
        }

        .line{
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 1rem;
            cursor: pointer;
            transition: all 0.3s;
            background: #f2e9bb;
            border-radius: 10px;
            box-shadow: 0 0 0.8rem rgba(0, 0, 0, 0.3);
        }

        .line:hover{
            transform: translateY(-2px);
        }

        .line p{
            font-size: 0.8rem;
            color: rgba(162,162,162);
            margin-bottom: 0.2rem;
        }

        .line img{
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            object-fit: cover;
        }

        .line .details{
            margin-left: 1.5rem;
        }

        .line h6{
            font-size: 1rem;
            color: #111;
            margin-bottom: 0.5rem;
        }

        .line .icon{
            display: flex;
        }

        .icon span{
            display: block;
            width: 0.35rem;
            height: 0.35rem;
            border-radius: 50%;
            background-color: rgba(14,131,214);
            margin: 0.2rem 0;
        }     

        .form{
            box-sizing: border-box;
            width: 400px;
            height: 500px;
            border: 2px solid #b5b3a7;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            background-color: #ebdd83;
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: flex-start;
            position: fixed;
            top: 80px;
            left: 93%;
            transform: translateX(-93%);
        }

        .pic{
            margin-top: 20px;
        }

        .form img{
            box-sizing: border-box;
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-top: 20px;
            border: 5px solid #b5b3a7;
            padding: 3px;
            background-color: white;
        }

        .form .name,
        .form .email,
        .form .phone {
            display: flex;
            align-items: center;
            box-sizing: border-box;
            background: none;
            color: black;
            margin-bottom: 10px;
            padding: 4px;
            width: 350px;
            height: 32px;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            font-size: 15px;
            margin-top: 10px;
            margin-left: -20px;
        }
        
        .form .name h6,
        .form .email h6,
        .form .phone h6 {
            margin: 0;
            margin-right: 10px;
        }

        .form .name input,
        .form .email input,
        .form .phone input {
            margin-top: 0; 
            width: 300px;
        }

        .form .name{
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"]{
            margin-left: 50px;
        }

        .form .buttons{
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
            width: 300px;
        }

        .form button {
            border: 1px solid #b5b3a7;
            background-color: white;
            color: black;
            padding: 2px 5px;
            height: 30px;
            width: 100px;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .form button:hover {
            transform: scale(1.1);
        }

        input[type="file"]{
            display: none;
        }

        label{
            box-sizing: border-box;
            font-size: 20px;
            background-color: black;
            color: white;
            border: 1px solid #3498db;
            padding: 2px 15px;
            border-radius: 5px;
            transition: all 0.3s;
            cursor: pointer;
        }

        label:hover {
            background-color: #3498db;
            color: black;
        }

        @media (max-width: 768px) {
            .form {
            width: 80%;
            max-width: 300px;
            }

            .form img {
            width: 100px;
            height: 100px;
            }

            .form .name,
            .form .email,
            .form .phone {
            margin-bottom: 5px;
            font-size: 12px;
            }

            .form .name h6,
            .form .email h6,
            .form .phone h6 {
            font-size: 12px;
            }

            .form .name input,
            .form .email input,
            .form .phone input {
            font-size: 12px;
            }

            .form .buttons {
            margin-top: 20px;
            }

            .form button {
            height: 25px;
            font-size: 12px;
            }
        }

    </style>
</head>
<body>
    <main>
        <div class="list">
            <div class="title">
                <h1>Customer Information</h1>
                <input type="text" placeholder="Search..">
            </div>
            <div class="line">
                <img src="" alt="">
                <div class="name">
                    <h6>Ng Hooi Chi</h6>
                </div>
                <div class="email">
                    <p>nghooichi@yahoo.com</p>
                </div>
                <div class="contact">
                    <p>+60123456789</p>
                </div>
                <div class="action">
                    <div class="icon">
                        <a href="/adminEditCustomer">
                            <i class="fa-solid fa-user-slash"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="form">
            <img src="" alt="">

            <div class="pic">    
                <label class="input-group-text" for="inputGroupFile01"> Upload </label>
                <input type="file" class="form-control" id="inputGroupFile01">
            </div>

            <div class="name">
                <h6>Name</h6>
                <input type="text" class="form-control" placeholder="Name" aria-label="Username">
            </div>

            <div class="email">
                <h6>Email</h6>
                <input type="email" class="form-control" placeholder="Email" aria-label="Email">
            </div>

            <div class="phone">
                <h6>Contact</h6>
                <input type="text" class="form-control" placeholder="Contact Number" aria-label="Contact Number">
            </div>

            <div class="buttons">
                <button class="cancelbtn">CANCEL</button>
                <button class="confirmbtn">CONFIRM</button>
            </div>
        </div>

    </main>
</body>
</html>