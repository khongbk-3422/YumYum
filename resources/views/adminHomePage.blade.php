@include('adminHeader')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    @include('cdn')

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
            position: relative;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 100px;
            margin-top: 100px;
            margin-left: 70px;
            margin-right: 70px;
        }

        .cards .card-single{
            position: relative;
            display: flex;
            justify-content: space-between;
            background: #EFF0EA;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.08);
            cursor: pointer;
            transition: all 0.4s;
        }

        .cards .card-single .number{
            position: relative;
            font-weight: 500;
            font-size: 2.5rem;
            color: black;
        }

        .cards .card-single .cardName{
            position: relative;
            font-size: 1.1rem;
            margin-top: 5px;
            color: grey;
        }

        .cards .card-single .iconBx{
            position: relative;
            font-weight: 500;
            font-size: 3.5rem;
            color: grey;
        }

        .cards .card-single:hover{
            background: #ebdd83;
            transform: scale(1.1);
        }

        .cards .card-single:hover .number,
        .cards .card-single:hover .cardName,
        .cards .card-single:hover .iconBx{
            color: white;
        }

        .recent-grid{
            position: relative;
            margin-top: 3rem;
            display: grid;
            grid-gap: 2rem;
            grid-template-columns: 65% auto;
            margin-bottom: 50px;
        }

        .restaurants{
            margin-left: 50px;
        }

        .recent-grid .card{
            background: #EFF0EA;
            border-radius: 20px;
            box-shadow: 5px 10px 5px 0px rgba(0, 0, 0, 0.08);
        }

        .recent-grid .card .card-header{
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0f0f0;
        }

        .recent-grid .card .card-header h2{
            font-weight: 600;
        }

        .recent-grid .card .card-header button{
            background: #f0edd8;
            border-radius: 10px;
            color: black;
            font-size: .8rem;
            padding: .5rem 1rem;
            border: 1px solid #bab9af;
            transition: all 0.4s;
        }

        .recent-grid .card .card-header button:hover{
            transform: scale(1.1);
            background: black;
            color: white;
        }

        .recent-grid .card table{
            border-collapse: collapse;
        }

        .recent-grid .card table thead tr{
            border-top: 1px solid #f0f0f0;
            border-bottom: 2px solid rgba(0, 0, 0, 0.1);
        }

        .recent-grid .card table thead tr:last-child{
            border-bottom: none;
        }

        .recent-grid .card table thead td{
            font-weight: 700;
            text-align: center;
        }

        .recent-grid .card table tbody tr:hover td{
            background: #ebdd83;
            color: white;
            cursor: pointer;
        }

        .recent-grid .card table tbody td {
            text-align: center;
        }

        .recent-grid .card table tr td{
            padding: .5rem 1rem;
            font-size: .9rem;
            color: #222;
        }

        .table-responsive{
            width: 100%;
            overflow-x: auto;
        }

        .recent-grid .customers{
            margin-right: 50px;
        }

        .customer{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 10px;
        }

        .customer:hover{
            background: #ebdd83;
            color: white;
        }

        .recent-grid .customers .customer:hover h4,
        .recent-grid .customers .customer:hover small {
            color: white;
        }

        .info{
            display: flex;
            align-items: center;
        }

        .info img{
            border-radius: 50%;
            margin-right: 1rem;
        }

        .info h4{
            font-size: 16px;
            font-weight: 700;
            color: #222;
        }

        .info small{
            font-size: 14px;
            font-weight: 600;
            color: grey;
        }

        .action span{
            font-size: 1.2rem;
            display: inline-block;
            margin-left: .5rem;
        }

        .action span:hover{
            transform: scale(1.2);
            transition: all 0.2s;
        }

        a{
            text-decoration: none;
        }

        @media (max-width: 1024px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
                grid-gap: 50px;
                margin-left: 20px;
                margin-right: 20px;
            }

            .recent-grid {
                grid-template-columns: 100%;
            }

            .restaurants,
            .customers {
                margin-left: 20px;
                margin-right: 20px;
            }
        }

        @media (max-width: 768px) {
            .cards {
                grid-template-columns: 1fr;
                grid-gap: 30px;
                margin-left: 20px;
                margin-right: 20px;
            }

            .recent-grid .card table {
                font-size: 0.8rem;
            }

            .restaurants {
                width: 90%;
                margin-left: 20px;
            }

            .customers {
                width: 90%;
                margin-left: 20px;
                margin-top: 1rem;
            }
        }

    </style>

</head>
<body>
    <main>
        <div class="cards">
            <a href="/adminViewRestaurant">
                <div class="card-single">
                    <div>
                        <div class="number">{{$count_list['rest_count']}}</div>
                        <div class="cardName">Restaurants</div>
                    </div>

                    <div class="iconBx">
                        <span i class="fa-solid fa-utensils"></i></span>
                    </div>
                </div>
            </a>

            <a href="/adminEditCustomer">
                <div class="card-single">
                    <div>
                        <div class="number">{{$count_list['cust_count']}}</div>
                        <div class="cardName">Users</div>
                    </div>

                    <div class="iconBx">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
            </a>

            <a href="/adminEditRating">
                <div class="card-single">
                    <div>
                        <div class="number">{{$count_list['rating_count']}}</div>
                        <div class="cardName">Ratings</div>
                    </div>

                    <div class="iconBx">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                </div>
            </a>
        </div>

        <div class="recent-grid">

            <!-- ================ Top Restaurant List ============ -->
            <div class="restaurants">
                <div class="card">
                    <div class="card-header">
                        <h2>Most popular Restaurants</h2>

                        <a href="/adminViewRestaurant">
                            <button> See all <span class="fa-solid fa-arrow-right"></span></button>
                        </a>
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
                                    @foreach ($rest_data as $rest)
                                    
                                        <tr>
                                            <td>{{$rest['rest_name']}}</td>
                                            <td>{{$rest['avg_rating']}} ({{$rest['rating_count']}})</td>
                                            <td>{{$rest['browse_count']}}</td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ================New Customer List=============== -->
            <div class="customers">
                <div class="card">
                        <div class="card-header">
                            <h2>New Customers</h2>
                            <a href="/adminEditCustomer">
                                <button>See all <span class="fa-solid fa-arrow-right"></span> </button>
                            </a>
                        </div>

                        <div class="card-body">

                            @foreach ($new_cust_list as $cust_list)
                                
                                <div class="customer" >
                                    <div class="info">
                                        <img src="data:image/[image_format];base64,{{ $cust_list['cust_pic'] }}" width="40px" height="40px" alt="">
                                        <div>
                                            <h4>{{$cust_list['cust_name']}}</h4>
                                            <small>{{$cust_list['user_email']}}</small>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <a href="/adminEditCustomer/{{ $cust_list['cust_id'] }} ">
                                            <span class="fa-solid fa-magnifying-glass"></span>
                                        </a>
                                    </div>
                                </div>
                                
                            @endforeach

                        </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>

</script>
</html>