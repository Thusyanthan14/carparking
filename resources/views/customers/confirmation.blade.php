<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Confirmation</title>

    <style>
        body{
            text-align: center;
        }
        h1{
            color: green; opacity: 0.8; 
            font-size: 60px;
        }
        p
        {
            font-size: 40px;
            color: teal;
            text-transform: uppercase;
            margin-bottom: 150px;
        }
        span{
            color: green;
        }

        button{
            border: none;
            padding: 15px 25px;
            background-color: green;
            color: white;
            font-size: 25px;
            border-radius: 25px;
        }
    </style>
</head>
<body>


        <h1> Hello {{$datas->name}} </h1>
        <h1>Your Reservation Confirmed</h1>

        <p>Your parking Slot - <span>A2</span> </p>

        <a href="/"><button>Finish</button></a>
</body>
</html>