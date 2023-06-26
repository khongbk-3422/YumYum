@include('header')

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

        .profileContainer{
            max-width: calc(100% - 50px);
            margin: 70px auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius:15px;
            background:#faf9f7;
        }

        .userProfile h3{
            text-align:center;
            margin:10px 0;
        }

        .userProfile img{
            width:180px;
            height:180px;
            border-radius:50%;
        }

        .profileContainer .btn-danger{
            background-color:#B87F78;
            border-color:#B87F78;
            color:black;
        }

        .profileContainer .btn-success{
            background-color:#889F8B;
            border-color:#889F8B;
            color:black;
        }
    </style>
</head>
<body>
    <div class="profileContainer">
        <div class="userProfile">
            <h3>Profile</h3>
            <img src="data:image/[image_format];base64,{{$customer_data->cust_pic}}">
        </div>
        <br>
        <form action="" method="post">
            @csrf
            <div class="form-group row mb-3">
                <label for="newName" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="name" class="form-control" id="newName" value="{{ $customer_data['cust_name'] }}" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="newEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="newEmail" value="{{ $customer_data['user_email'] }}" placeholder="">
                </div>
            </div>
            
            <div class="form-group row mb-3">
                <label for="newPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="newPassword" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="newContact" class="col-sm-2 col-form-label">Contact</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="newContact" value="{{ $customer_data['cust_contact'] }}" placeholder="">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="formFile" class="col-sm-2 col-form-label">Profile</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger" type="reset">Cancel</button>
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
        
    </div>
    
</body>
</html>
@include ('footer')