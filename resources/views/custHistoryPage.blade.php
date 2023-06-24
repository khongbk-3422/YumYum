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
            margin-top:80px;
            /* background:pink; */
            /* height:110vh; */
        }

        .historycontainer{
            width:calc(100% - 260px);
            /* background:purple; */
            margin:auto;
        }

        .historycontainer .title{
            text-align:center;
            padding:10px;
        }

        .historyperday .date, .history{
            margin:12px;
        }

        .history .data h4{
            font-size:16px;
            letter-spacing:3px;
        }

        .historyperday .data span{
            margin:20px;
        }


    </style>
</head>
<body>
    <div class="maincontainer">
        <div class="historycontainer">
            <div class="title">
                <h2>History</h2>
            </div>
<!-- loop from database and order by date -->
            <div class="historyperday">
                <div class="date">
                    <h4>Date</h4>
                </div>

                <div class="history">
                    <div class="data">
                        <h4>08:10:22 <span>Prime</span></h4>
                        <h4>08:10:22 <span>Prime</span></h4>
                        <h4>08:10:22 <span>Prime</span></h4>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</body>
</html>
@include('footer')