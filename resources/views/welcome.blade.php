<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/mainpage.css" rel="stylesheet">
        <link href="/css/aboutstyle.css" rel="stylesheet">
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


        <!-- About Section -->
        <div class="aboutheading">
            About
        </div>
        <div class="aboutsection">
            
            <div class="aboutdetails">
                As a company our primary focus has always been in bringing new innovations to our products and developing new technologies.
                We are researching methods to introduce magnetic levitation in our parking systems and charging points on platforms for electric cars.
                <br>
                <a href="/about"><button type="button" class="btn btn-info">Read More</button> </a>
            </div>

            <div class="aboutimage">
                <img src="/images/aboutcar.png">
            </div>
            
        </div>

        <!-- End of About Section -->

        <!-- Contact Us -->
        <div class="contactheading">
            Contact us
        </div>
        <div class="contactsection">

        <div class="contactimage">
                <img src="/images/carlogin.png">
            </div>

            <div class="contactdetails">
                <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi nemo saepe enim ducimus. Fuga aliquam debitis delectus omnis modi dolores quae sapiente odio! Excepturi dolore odit commodi? Ut, eius tenetur.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis recusandae reiciendis sapiente, cumque commodi, hic dolore consequuntur, rerum dicta cum nihil cupiditate! Expedita nemo, ducimus rem cupiditate iure quam maxime.</p>

                
                <a href="/contact"><button type="button" class="btn btn-info">Read More</button> </a>
            </div>
        </div>

        <div class="container text-center">
        
                
                <div class="text-danger" style="font-size:60px">
                <div class="emergencytext">In case of Emergency </div></div>
                <div class="emergencyimg">
                <img src="/images/repair.png">
                </div>
                <div class="text-danger" style="font-size:30px">
                <div class="emergencytext">Contact Our Mechanic Anytime</div></div>
                <div class="text-success" style="font-size:80px">
                <div class="emergencytext">0762594592</div></div>
              
               
        </div>
        <!-- End of Contact us -->
    </body>
</html>
