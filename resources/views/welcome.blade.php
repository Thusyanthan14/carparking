<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/mainpage.css" rel="stylesheet">
    </head>
    <body>
    <div class="wrapper">
                <div class="nav_bar">
                    <div class="logo">
                        <img src="/images/logo.png" alt="logo">
                    </div>

                    <div class="projectheading">
                        CAR PARKING RESERVERSION
                    </div>
                    <div class="list">
                        
                            <a href="#">Home</a>
                         
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        

                    </div>
                    
                </div>

                <div class="landingpage">
                    <div class="homepagepic">
                        <img src="/images/homepic1.png" alt="pic">
                    </div>

                    <div class="btn">
                       <a href="/carselect"> <button class="btn1">GO TO PARKING AREA</button> </a>
                        <!-- <div class="adminhome">
                        <button class="adminbtn1">LOGIN AS ADMIN</button>
                        <button class="adminbtn2">NEW ADMIN</button>
                        </div> -->
                    </div>

                   
                </div>
        </div>
    </body>
</html>
