@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    @include('cdn')

    <style>
        *{
            font-family: 'Raleway', sans-serif;
        }

        .maincontainer{
            margin:90px auto;
            background:#f7f7f7;
            padding:20px 20px;
            max-width:calc(100% - 220px);
        }

        .title{
            text-align:center;
            padding:10px;
            font-size:35px;
        }

        .historycontainer{
            width:100% ;
        }

        .historyperday .date{
            font-size:20px;
            /* font-weight:bold; */
        }

        .history .data .time{
            font-size:16px;
            letter-spacing:3px;
            color:#3B4338;
        }

        .history .data a{
            text-decoration:none;
            color:black;
            color:#3B4338;
        }

        .historyperday .data .restname{
            font-size:18px;
            margin:20px;
        }

        .historyperday .data h4:hover{
            color:#7A848D;
            cursor: pointer;
        }


    </style>
</head>
<body>
    <div class="maincontainer">
        <div>
            <h2 class="title">History</h2>
        </div>
        <div class="historycontainer">
        <!-- loop from database and order by date -->

            @foreach ($groupedData as $date => $entries)
            <div class="historyperday">
                <div>
                    <h4 class="date">{{ $date }}</h4>
                    <hr>
                </div>
                <div class="history">
                    <div class="data">
                        @foreach ($entries as $entry)
                            <a href={{"restaurantDetailsPage/".$entry['rest_id']}}><h4><span class="time">{{ $entry['time_value'] }}</span> <span class="restname">{{ $entry['rest_name'] }}</span></h4></a>
                        @endforeach
                    </div>
                    <br>
                </div>
            </div>
            @endforeach
        </div>            
    </div>
</body>
</html>
@include('footer')