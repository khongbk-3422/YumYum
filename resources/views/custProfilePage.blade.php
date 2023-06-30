@include('header')

$customer_data = $customer_data::find($cust_id); // Retrieve the customer data from the database

$fileName = $customer_data->cust_pic; // Retrieve the file name from the BLOB column
return view('custProfilePage', ['fileName' => $fileName]);


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
            background-color:#faf9f7;
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

        .resetBtn{
            border:none;
            height:40px;
            background-color:#faf9f7;
            outline:none;
        }

        .profileContainer .btn-danger{
            background-color:#d9725f;
            border-color:#d9725f;
            color:black;
        }

        .profileContainer .btn-success{
            background-color:#8cba98;
            border-color:#8cba98;
            color:black;
        }
    </style>
</head>
<body>
    <div class="profileContainer">
        <div class="userProfile">
            <h3>Profile</h3>
            <img src="data:image/[image_format];base64,{{$customer_data->cust_pic}}" id="showImage">
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
                <label for="newprofile" class="col-sm-2 col-form-label">Profile</label>
                <div class="col-sm-8">
                    <input class="form-control" type="file" id="newprofile" value="{{ $fileName }}">
                    <!-- ini $fileName might need to work from controller to display the initial file name of image -->
                    <input class="form-control" type="file" id="newprofile">
                </div>
                <div class="col-sm-2">
                    <button type="button" onclick="resetImage()" class="resetBtn">Reset</button>
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger" type="reset">Cancel</button>
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
        
    </div>
    <script>
        const newProfile = document.getElementById('newprofile');
        const showImage = document.getElementById('showImage');

        let previousImage = showImage.src; // initial profile picture
        let previousFileName = newProfile.value;

        newProfile.addEventListener('change', function() {
            // Get the selected file
            const file = newProfile.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function() {
                    showImage.src = reader.result;
                };
                reader.readAsDataURL(file);
                
                // Display the file name in the input field
                const fileName = file.name;
                if (previousFileName !== fileName) {
                    newProfile.value = fileName;
                    previousFileName = fileName;    //replace the  old image with new image
                }
            }
        });

        function resetImage(){
            showImage.src = previousImage; // Reset to previous profile
            newProfile.value = previousFileName; // Reset the file input
        }
    </script>
</body>
</html>
@include ('footer')