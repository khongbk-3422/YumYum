@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('cdn')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .tablecontainer{
            background: pink;
            margin-top:80px;
        }
    </style>
</head>
<body>
    <div class="tablecontainer">
        <table class="table table-dark">
            <thead>
              ...
            </thead>
            <tbody>
              <tr class="table-active">
                ...
              </tr>
              <tr>
                ...
              </tr>
              <tr>
                <th>Restaurant ID</th>
                <th>Restaurant Name</th>
                <th>Restaurant Contact</th>
                <th>Restaurant Category</th>
                <th>Restaurant Address</th>
                <th>Price Min</th>
                <th>Price Max</th>
                <th>Restaurant Picture</th>
                <th>Perform Action</th>
              </tr>
              <tr>
                <td>Restaurant ID</td>
                <td>Restaurant Name</td>
                <td>Restaurant Contact</td>               
                <td>Restaurant Category</th>
                <td>Restaurant Address</td>
                <td>Price Min</td>
                <td>Price Max</td>
                <td>Restaurant Picture</td>
                <td><i class="fa-solid fa-pen-to-square" style="color: #777f8d;"></i></td>
              </tr>
            </tbody>
          </table>
    </div>
    
</body>
</html>