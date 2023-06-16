@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    
</style>
<body>

    $numCustomer = &user_data=Customer->count();
    <main>

        <div class="cards">
            <div class="card-single">
                <div>
                    <h1></h1>
                    <span>Restaurants</span>
                </div>
                <div>
                    <span></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1></h1>
                    <span>Users</span>
                </div>
                <div>
                    <span><i class="bi bi-people-fill"></i></span>
                </div>
            </div>

        </div>

    </main>
</body>
</html>