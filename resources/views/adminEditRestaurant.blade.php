@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('cdn')

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
              
            </thead>
            <tbody>
              <tr class="table-active">
                ...
              </tr>
              <tr>
                ...
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2" class="table-active">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
    
</body>
</html>