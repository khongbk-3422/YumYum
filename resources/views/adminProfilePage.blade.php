@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    @include('cdn')

    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        body{
            background-image: url('image/bg3.png');
            background-size: cover;
        }

        main{
            margin-top: 90px;
            margin-left: 40px;
        }


        .adminProfileContainer {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px; /* Adjust the top margin as desired */
            margin-left: 130px; /* Adjust the right margin as desired */
        }

        .adminProfile{
            box-sizing: border-box;
            width: 153px;
            height: 153px;
            border: 5px solid #f0be0c;
            border-radius: 50%;
            overflow: hidden;
            cursor: pointer;
            position: relative;
        }

        .adminProfile:hover{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 650px;
            height: 540px;
            border: 2px solid grey;
            border-radius: 20px;
            background-color: rgba(201, 201, 191, 0.5);
            backdrop-filter: blur(100px);
            margin-top: 5px;
            margin-left: 50px;
        }

        .adminProfile:hover img{
            width: 130px;
            height: 130px;
            margin: 20px 31%;
        }

        .adminProfile img{
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-top: 10px;
        }

        .adminProfile .picture{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }

        .adminProfile .picture input{
            margin-top: 10px;
        }


        .adminProfile button{
            margin-top: 20px;
            padding: 5px 10px;
            border-radius: 10px;
            transition: 0.2s;
        }

        .adminProfile button:hover{
            transform: scale(1.1);
            border: 1px solid white;
            background: black;
            color: white;
        }

        .form-control{
            width: 500px;
        }

        @media (max-width: 768px){
            .form-control{
                width: 300px;
            }
        }

        /* Animation Styles */
        .animation-container {
            position: relative;
            margin-bottom: 20px;
        }

        .animation-container .arrow {
            position: absolute;
            width: 100px;
            top: 60px;
            left: 200px;
            animation: arrowAnimation 2s infinite;
        }

        .animation-container .arrow::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            border-top: 3px solid #f0be0c;
            border-right: 3px solid #f0be0c;
            width: 20px;
            height: 20px;
            transform: rotate(45deg);
            background-color: white;
        }

        .animation-container .text {
            font-size: 14px;
            color: white;
            background-color: rgba(0, 0, 0, 0.8);
            padding: 5px 10px;
            border-radius: 5px;
            position: absolute;
            top: 55px;
            left: 300px;
            animation: textAnimation 2s infinite;
        }

        @keyframes arrowAnimation {
            0% { transform: translateX(0); }
            50% { transform: translateX(10px); }
            100% { transform: translateX(0); }
        }

        @keyframes textAnimation {
            0% { opacity: 0; }
            50% { opacity: 1; }
            100% { opacity: 0; }
        }
        
    </style>
</head>
<body>
    <main>  
        <h1 align="center">User Profile</h1>
        <div class="adminProfileContainer">
            <div class="animation-container">
                <div class="arrow"></div>
                <div class="text">Hover me :P</div>
            <div class="adminProfile">
                <div class="picture">
                    <img src="data:image/[image_format];base64,{{ $admin_data['admin_pic'] }}" >    
                    <input type="file" class="form-control" id="profilePicture" accept="image/*">
                </div>

                <form action="editProfile" method="POST">
                    <div class="form-group">
                        <label for="newName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="editName" value="{{ $admin_data['admin_name'] }} name=">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="newName" class="col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input type="phone" class="form-control" id="editPhone" value="{{ $admin_data['admin_contact'] }} name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="newName" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="editEmail" value="{{ $admin_data['user_email'] }} name">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="newName" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name>
                        </div>
                    </div>

                    <div class="button text-center">
                        <button class="updatebtn">UPDATE</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </main>
</body>
</html>