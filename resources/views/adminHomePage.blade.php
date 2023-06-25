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
        font-family: 'Raleway', sans-serif;
    }

    .cards{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
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
        border-radius: 5px;
    }

    .card-single div:last-child span{
        font-size: 3rem;
        color: purple;
    }

    .card-single div:first-child span{
        color: grey;
    }

    .recent-grid{
        margin-top: 3rem;
        display: grid;
        grid-gap: 2rem;
        grid-template-columns: 65% auto;
    }

    .restaurants{
        margin-left: 50px;
    }

    .customers{
        margin-right: 50px;
    }

    .card{
        background: #EFF0EA;
        border-radius: 5px;
    }

    .card-header{
        padding: 1rem;
    }

    .card-header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #f0f0f0;
    }

    .card-header button{
        background: white;
        border-radius: 10px;
        color: black;
        font-size: .8rem;
        padding: .5rem 1rem;
        border: 1px solid blue;
    }

    table{
        border-collapse: collapse;
    }

    thead tr{
        border-top: 1px solid #f0f0f0;
        border-bottom: 2px solid #f0f0f0;
    }

    thead td{
        font-weight: 700;
    }

    td{
        padding: .5rem 1rem;
        font-size: .9rem;
        color: #222;
    }

    .table-responsive{
        width: 100%;
        overflow-x: auto;
    }

    .customer{
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: .5rem .7rem;
    }

    .info img{
        border-radius: 50%;
        margin-right: 1rem;
    }

    .info h4{
        font-size: .8rem;
        font-weight: 700;
        color: #222;
    }

    .action span{
        font-size: 1.2rem;
        display: inline-block;
        margin-left: .5rem;
    }

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

            <div class="card-single">
                <div>
                    <h1>328</h1>
                    <span>Ratings</span>
                </div>
                <div>
                    <span><i class="fa-solid fa-comments"></i></span>
                </div>
            </div>
        </div>

        <div class="recent-grid">
            <div class="restaurants">
                <div class="card">
                    <div class="card-header">
                        <h2>Most popular Restaurants</h2>

                        <button>See all <span class="fa-solid fa-arrow-right"></span> </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%">
                                <thead>
                                    <tr>
                                        <td>Restaurant Name</td>
                                        <td>Overall Rating</td>
                                        <td>Browse Volume</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Prime</td>
                                        <td>5.0</td>
                                        <td>1239</td>
                                    </tr>
                                    <tr>  
                                        <td>Beta KL</td>
                                        <td>5.0</td>
                                        <td>1200</td>
                                    </tr>
                                    <tr>
                                        <td>JP Teres</td>
                                        <td>4.9</td>
                                        <td>1183</td>
                                    </tr>
                                    <tr>
                                        <td>Posinato Risto</td>
                                        <td>4.9</td>
                                        <td>1120</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="customers">
                <div class="card">
                        <div class="card-header">
                            <h2>New Customers</h2>

                            <button>See all <span class="fa-solid fa-arrow-right"></span> </button>
                        </div>
                        <div class="card-body">
                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ng Hooi Chi</h4>
                                    </div>
                                </div>
                                <div class="action">
                                    <span class="fa-solid fa-pen-to-square"></span>
                                    <span class="fa-solid fa-user-slash"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ng Hooi Chi</h4>
                                    </div>
                                </div>
                                <div class="action">
                                    <span class="fa-solid fa-pen-to-square"></span>
                                    <span class="fa-solid fa-user-slash"></span>
                                </div>
                            </div>

                            <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ng Hooi Chi</h4>
                                    </div>
                                </div>
                                <div class="action">
                                    <span class="fa-solid fa-pen-to-square"></span>
                                    <span class="fa-solid fa-user-slash"></span>
                                </div>
                            </div>

                                                        <div class="customer">
                                <div class="info">
                                    <img src="" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ng Hooi Chi</h4>
                                    </div>
                                </div>
                                <div class="action">
                                    <span class="fa-solid fa-pen-to-square"></span>
                                    <span class="fa-solid fa-user-slash"></span>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>

    </main>
</body>
</html>