@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style-type: none;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
    }

    .cards{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 2rem;
        margin-top: 80px;
        margin-left: 50px;
        margin-right: 50px;
    }

    .card-single{
        display: flex;
        justify-content: space-between;
        background: #EFF0EA;
        padding: 2rem;
        border-radius: 2px;
    }

    .card-single div:last-child span{
        font-size: 3rem;
        color: purple;
    }

    .card-single div:first-child span{
        color: grey;
    }
/* 
    .card-single:last-child{
        background: red;
    } */

    /* .card-single:last-child h1,
    .card-single:last-child div:last-child span,
    .card-single:last-child div:first-child span{
        color: blue;
    } */

</style>
<body>

    //$numCustomer = &user_data=Customer->count();
    <main>

        <div class="cards">
            <div class="card-single">
                <div>
                    <h1>30</h1>
                    <span>Restaurants</span>
                </div>
                <div>
                    <span i class="fa-solid fa-utensils"></i></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <h1>120</h1>
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