<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    </head>
    <style>
        .main{
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            height: 100%;
            width: 100%;
            z-index: -1;
            position: fixed;
            background-image: url("public/img/background.jpg");
        }
        .glass{
            backdrop-filter: blur(5px);
            margin: 0 auto;
            border-radius: 2rem;
            width: 90%;
            height: 80%;
            margin-top: 7rem;
            background: rgba(0,0,0,0.5);
            align-content: center;
        }
        .container{
            margin:0 auto;
        }
        .top-bar{
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.8);
            height: 5rem;
            text-align: center;
            align-content: center;
            position: fixed;
        }
        .top{
            color: #ffff;
        }
        .logo{
            border-radius: 10px;
            width: 28%;
        }
    </style>
    <body>
        <div class="main">
            <div class="top-bar">
                <div class="row">
                    <div class="col-3 top">
                        <img src="public/img/loguns.png" class="logo">
                    </div>
                    <div class="col-6 top">
                        DEKANAT FKOR UNS
                    </div>
                    <div class="col-3 top">
                        <img src="public/img/km-logo.png" class="logo">
                    </div>
                </div>
            </div>
            <div class="glass">
                <div class="col-12 container bg-white">
                    lapet
                </div>
            </div>
        </div>
    </body>
</html>