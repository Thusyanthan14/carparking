<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="/css/mainpage.css" rel="stylesheet">
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap');
        body{
            background-color:red;
        }    
        
        .contacthead {
                font-size:40px;
                text-align:right;
                background-color:rgb(120,120,120,0.4);
                color:white;
            }
            .contactcontent
            {
                margin-top:60px;
                padding-left:50px;
                font-size:25px;
            }
            i{
                color:blue;
            }
        </style>
</head>
<body>
@include('layouts.navigation')
<div class="container mt-5">
    <div class="row">
        <div class="col-6 mt-4 py-md-5"> 
            <form>
                <div class="form-group">
                <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"> </div>
                <div class="form-group">
                    <label for="titile">Title</label>
                    <input type="text" class="form-control" id="title" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your feedback with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="feedback">Your Feedback</label>
                    <textarea rows="4" class="form-control" id="feedback"> </textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        
        <div class="col-6 mt-4 py-md-5">
        <div class="contacthead">Contact Us.</div>
            <div class="contactcontent">
                <i class="fa fa-envelope"></i> thusyan17@gmail.com <br>
                <i class="fa fa-location-arrow"></i> 0762596548 <br>
                <i class="fa fa-map-marker"></i> Erlalai North,
                Erlalai
            </div>
        </div>
    </div>
</div>
</body>
</html>