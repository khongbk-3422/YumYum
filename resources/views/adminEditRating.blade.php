@include('adminHeader')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>adminEditRating</title>
    @include('cdn')

    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .main{
              display:flex;
              flex-wrap:wrap;
              justify-content: space-between;
              margin-top: 20px;
              background:#F2EEED;
        }

        h1{
            font-size: 30px;
            color: black;
            text-transform: uppercase;
            font-weight: 350;
            text-align: center;
            margin-bottom: 15px;
            padding:10px;
        }

        table{
            width:100%;
            table-layout: fixed;
        }

        .tbl-header{
            /* background-color: rgba(255,255,255,0.3); */
            background-color:#CCC5BC;
        }

        .tbl-content{
            height:300px;
            overflow-x:auto;
            margin-top: 0px;
            border: 1px solid rgba(255,255,255,0.3);
        }

        th{
            padding: 20px 15px;
            /* text-align: left; */
            text-align:center;
            font-weight: 550;
            font-size: 15px;
            color: black;
            text-transform: uppercase;
        }

        td{
            padding: 15px;
            text-align: center;
            vertical-align:middle;
            font-weight: 350;
            font-size: 13px;
            color: black;
            /* border-bottom: solid 1px rgba(255,255,255,0.1); */
            border-bottom: solid 1px #CCC5BC;
        }
    
        section{
            margin: 50px;
        }

        :root {
	        --rad: 0.7rem;
	        --dur: 0.3s;
	        --color-dark: #2f2f2f;
	        --color-light: #fff;
	        --color-brand: #57bd84;
	        --height: 5rem;
	        --btn-width: 6rem;
	        --bez: cubic-bezier(0, 0, 0.43, 1.49);
        }

        .searchBar{
            margin-top: 70px;
            box-sizing: border-box;
	        height: 100%;
	        font-size: 10px;
            display: flex;
	        align-items: center;
	        justify-content: center;
            background: #EBEBE9;
            width: 100%;
            padding: 10px;
        }

        form {
	        position: relative;
	        width: 80%;
	        /* background: var(--color-brand); */
            background:#D2CABF;
	        border-radius: var(--rad);
        }
        /*         
        input, button {
            height: var(--height);
            font-family: var(--font-fam);
            border: 0;
            color: var(--color-dark);
            font-size: 1.8rem;
        } */

        input {
            height: var(--height);
            font-family: var(--font-fam);
            border: 0;
            color: var(--color-dark);
            font-size: 1.8rem;
        }

        input[type="search"] {
            outline: 0;
            width: 100%;
            background: var(--color-light);
            padding: 0 1.6rem;
            border-radius: var(--rad);
            appearance: none;
            transition: all var(--dur) var(--bez);
            transition-property: width, border-radius;
            z-index: 1;
            position: relative;
        }

        /* button {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            width: var(--btn-width);
            font-weight: bold;
            background: var(--color-brand);
            background:blue;
            color:yellow;
            border-radius: 0 var(--rad) var(--rad) 0;
        } */
        
        input:not(:placeholder-shown) {
            border-radius: var(--rad) 0 0 var(--rad);
            width: calc(100% - var(--btn-width));
        }

        input:not(:placeholder-shown) + button {
            display: block;
        }

        label {
            position: absolute;
            clip: rect(1px, 1px, 1px, 1px);
            padding: 0;
            border: 0;
            height: 1px;
            width: 1px;
            overflow: hidden;
        }

        .starqty{
            float:right;
        }

        .starqty i{
            color:yellow;
        }

        .searchBtn{
            background:#D2CABF;
            color:black;
            font-size:20px;
            width:100%;
            border-radius: 5px ;
            outline:none;
            border:none;
        }

        .searchBtn:hover{
            background:#D1D3C5;
        }

        .deleteBtn{
            /* background-color: blue; */
            background:none;
            border: none;
            cursor: pointer;
            outline: none;
            width: fit-content;
            color:black;
        }

        .deleteBtn:hover{
            color:grey;
        }

        .ratingTable .tbl-content tr:hover{
            background:#E6DEDC;
        }
    </style>
</head>
<body>
    <div class="searchBar">
        <form onsubmit="event.preventDefault();" role="search">
            <label for="search">Search for stuff</label>
            <input type="search" id="searchInput" placeholder="Search..." autofocus required />
            <button type="submit" class="searchBtn">Go</button>    
        </form>
    </div>
    <div class="main">
        <div class="ratingTable">
            <h1>Rating</h1>
            <div class="tbl-header">
                <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                    <th>Customer Id</th>
                    <th>Customer Name</th>
                    <th>Restaurant Name</th>
                    <th>Review</th>
                    <th>Date</th>
                    <th>Rating</th>
                    <th>Action</th>
                    </tr>
                </thead>
                </table>
            </div>
            <div class="tbl-content">
                <table cellpadding="0" cellspacing="0" border="0">
                    <tbody>
                        <div class="lines">
                            @foreach ($rate_datas as $rate_data)
                            <tr> 
                                <td class="cust_id">{{$rate_data['cust_id']}}</td>
                                <td class="cust_name">{{$rate_data['cust_name']}}</td>
                                <td class="rest_id">{{$rate_data['rest_name']}}</td>
                                <td class="review">{{$rate_data['review']}}</td>
                                <td class="date">{{$rate_data['date']}}</td>
                                <td>
                                    <div class="retaurantRating">
                                        @if ($rate_data['rating'] == 5)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 4.15 && $rate_data['rating'] < 5)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i> 
                                        @elseif ($rate_data['rating'] >= 3.85 && $rate_data['rating'] < 4.15)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 3.15 && $rate_data['rating'] < 3.85)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 2.85 && $rate_data['rating'] < 3.15)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 2.15 && $rate_data['rating'] < 2.85)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 1.85 && $rate_data['rating'] < 2.15)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 1.15 && $rate_data['rating'] < 1.85)
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 0.85 && $$rate_data['rating'] < 1.15)
                                            <i class="fa-solid fa-star"></i><i class="fa-light fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        @elseif ($rate_data['rating'] >= 1.15 && $rate_data['rating'] < 1.85)
                                            <i class="fa-solid fa-star-half-stroke"><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i> 
                                        @else
                                        <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i>  
                                        @endif
                                    </div>
                                </td>
                                <td><a href="{{ url('/adminDeleteRating/' . $rate_data['cust_id'] . '/' . $rate_data['rest_id']) }}"><button type="button" class="deleteBtn">Delete</button></a></td>
                            </tr>
                            @endforeach
                        </div>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        // search function
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', handleSearch);
    
            function handleSearch() {
                const searchText = searchInput.value.toLowerCase();
                const rows = document.querySelectorAll('.ratingTable table tbody tr');
    
                for (let i = 0; i < rows.length; i++) {
                    const row = rows[i];
                    const cust_id = row.querySelector('.cust_id').textContent.toLowerCase();
                    const cust_name = row.querySelector('.cust_name').textContent.toLowerCase();
                    const rest_id = row.querySelector('.rest_id').textContent.toLowerCase();
                    const review = row.querySelector('.review').textContent.toLowerCase();
                    const date = row.querySelector('.date').textContent.toLowerCase();
    
                    if (
                        cust_id.includes(searchText) ||
                        cust_name.includes(searchText) ||
                        rest_id.includes(searchText) ||
                        review.includes(searchText) ||
                        date.includes(searchText)
                    ) {
                        row.style.display = 'table-row';
                    } else {
                        row.style.display = 'none';
                    }
                }
            }
        });
    </script>
</body>
</html>
