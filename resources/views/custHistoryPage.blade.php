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
            /* background:purple; */
        }

        .historyperday .date{
            font-size:20px;
            /* font-weight:bold; */
        }

        .history .data .time{
            font-size:16px;
            letter-spacing:3px;
            /* color:grey; */
        }

        .historyperday .data .restname{
            font-size:18px;
            margin:20px;
        }

        .historyperday .data h4:hover{
            color:#968e7e;
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
            <div class="historyperday">
                <div>
                    <h4 class="date">25 June 2023</h4>
                    <hr>
                </div>

                <div class="history">
                    <div class="data">
                        <h4 class="viewhistory"><span class="time">08:10:22</span> <span class="restname">Via Pre Kul</span></h4>
                        <h4><span class="time">08:10:22</span> <span class="restname">Beta KL</span></h4>
                        <h4><span class="time">08:10:22</span> <span class="restname">JP Teres</span></h4>
                        <br>
                    </div>
                </div>
            </div>
            <!-- Test 2 -->
            <div class="historyperday">
                <div>
                    <h4 class="date">24 June 2023</h4>
                    <hr>
                </div>

                <div class="history">
                    <div class="data">
                        <h4><span class="time">08:10:22</span> <span class="restname">Makan Kitchen</span></h4>
                        <h4><span class="time">08:10:22</span> <span class="restname">Beta KL</span></h4>
                        <h4><span class="time">08:10:22</span> <span class="restname">Prime</span></h4>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</body>
</html>
@include('footer')