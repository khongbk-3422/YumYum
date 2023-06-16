<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/84db3d8316.js" crossorigin="anonymous"></script>

    <style>
        .footer {
        background-color: #EFF0EA;
        width: 100%;
        text-align: left;
        font-family: sans-serif;
        font-weight: bold;
        font-size: 16px;
        padding: 40px;
        margin-top: 40px;
        }

        .footer .footer-left,
        .footer .footer-center,
        .footer .footer-right {
            display: inline-block;
            vertical-align: top;
        }

        /* footer left*/
        .footer .footer-left {
            width: 33%;
            padding-right: 15px;
        }

        .footer .about {
            line-height: 20px;
            color: #A1706B;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }

        .footer .about span {
            display: block;
            color:#A39183;
            font-size: 25px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .footer .icons {
            margin-top: 25px;
        }

        .footer .icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #DCDDD5;
            border-radius: 2px;
            font-size: 20px;
            color: #A08887;
            text-align: center;
            line-height: 35px;
            margin-right: 3px;
            margin-bottom: 5px;
        }


        /* footer center*/
        .footer .footer-center {
        width: 30%;
        }

        .footer .footer-center i {
        background-color:#DCDDD5;
        color: #A08887;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
        }

        .footer .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
        }

        .footer .footer-center p {
        display: inline-block;
        color: #C1B0A7;
        vertical-align: middle;
        margin: 0;
        }

        .footer .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
        }

        .footer .footer-center p a {
        color: #A39183;
        text-decoration: none;
        }

        /* footer right*/
        .footer .footer-right {
            width: 35%;
        }

        .footer span {
            color: #614c2a;
        }

        .footer .menu {
            color: #A1706B;
            margin: 20px 0 12px;
            padding: 0;
        }

        .footer .menu a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .footer .menu a:hover {
            color: #ba9e73;
        }

        .footer .name {
            color: #A39183;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }

        .comp_logo{
            width:100px;
            height:100px;
            border-radius:8px;
            margin-left:10px;
        }
    </style>

</head>

<body>
    <footer class="footer">
    <div class="footer-left col-md-4 col-sm-6">
        <p class="about">
            <span>Yum Yum</span>
            Established with the vision of connecting food enthusiasts with their perfect dining destinations, YumYum has continually evolved
            to provide an immersive and personalized dining experience. Our team of passionate food connoisseurs scours the culinary landscape 
            to curate a diverse collection of restaurants, ensuring that each recommendation reflects the highest quality and authenticity.
        </p>
        <div class="icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
    <div class="footer-center col-md-4 col-sm-6">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>8, Jalan Kiara, Mont Kiara</span> Kuala Lumpur, Malaysia</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="#"> yumyum@company.com</a></p>
        </div>
    </div>
    <div class="footer-right col-md-4 col-sm-6">
        <h2><span><img src="{{ asset('image/logo.jpg') }}" class="comp_logo"></span></h2>
        <p class="menu">
            <a href="#"> Home</a> |
            <a href="#"> About</a> |
            <a href="#"> Services</a> |
            <a href="#"> Portfolio</a> |
            <a href="#"> Contact</a>
        </p>
        <p class="name"> YumYum &copy; 2023</p>
    </div>
    </footer>
</body>
</html>