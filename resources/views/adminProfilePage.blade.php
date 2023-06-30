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
            background-image: ;
        }

        main{
            margin-top: 100px;
            margin-left: 40px;
        }

        .adminProfile{
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            width: 50%;
            border: 1px solid grey;
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

        .adminProfile .detail{
            margin-top: 40px;
        }

        .adminProfile button{
            margin-top: 20px;
        }

        .form-control{
            width: 500px;
        }

        @media (max-width: 768px){
            .form-control{
                width: 300px;
            }
        }
        
    </style>
</head>
<body>
    <main>  
        <h1>User Profile</h1>
        <div class="adminProfile">
            <div class="picture">
                <img src="" alt="">    
                <input type="file" class="form-control" id="profilePicture" accept="image/*">
            </div>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="newName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="editName" value="" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="newName" class="col-form-label">Contact Number</label>
                    <div class="col-sm-10">
                        <input type="phone" class="form-control" id="editPhone" value="" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label for="newName" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="editEmail" value="" placeholder="">
                    </div>
                </div>

                <div class="button text-center">
                    <button class="updatebtn">UPDATE</button>
                </div>
                <br>
            </form>
        </div>
    </main>
</body>
</html>