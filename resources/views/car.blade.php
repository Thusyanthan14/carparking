<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Document</title>

    <style>
    .carimg img{
        width: 80px; 
        height: 150px;
    }

    .btnproceed
    {
        width:20%;
        height:40px;
        float:right;
        margin:30px 0px;
        border:none;
        background-color: cornflowerblue;
        color:white;
        font-size:30px;
        border-radius: 20px;
    }
    </style>

<link href="/css/mainpage.css" rel="stylesheet">
</head>
<body>

<!-- <div class="nav_bar">
                    <div class="logo">
                        <a href="/"><img src="/images/logo.png" alt="logo"> </a>
                    </div>

                    <div class="projectheading">
                        CAR PARKING RESERVERSION
                    </div>
                    <div class="list">
                        
                            <a href="#">Home</a>
                         
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        

                    </div>
                    
</div> -->
@include('layouts.navigation')

<table border="1" style="margin: auto; margin-top:120px;">

<tr>
@foreach($cardetails as $cardetail)
@if($cardetail->id<=10)

<td>
    @if($cardetail->selected)
    <div class="carimg">
        <img src="/images/car_deactive.png" onclick="event.preventDefault();
            document.getElementById('form-deselect{{$cardetail->id}}').submit()"> </div>

<form action ="{{route('carselect.deselect',$cardetail->id)}}" id="{{'form-deselect'.$cardetail->id}}" method="POST">
        @csrf
        @method('put')    
    </form>
        <p style="color:green; font-size:30px; text-align:center;">{{$cardetail->carname }}</p>
        

    @else
    <div class="carimg"><img src="/images/car_active.png" onclick="event.preventDefault();
            document.getElementById('form-select{{$cardetail->id}}').submit()"> </div>
        <form action ="{{route('carselect.select',$cardetail->id)}}" id="{{'form-select'.$cardetail->id}}" method="POST">
        @csrf
        @method('put')    
    </form>
    

    <p style="color:green; font-size:30px; text-align:center;">{{$cardetail->carname }}</p>
    @endif
    </td>
    @endif
@endforeach
</tr>
<tr>
<td colspan=10 style="font-size: 60px; text-align:center; text-transform:uppercase">This way to parking area </td>
</tr>

<tr>
    
    @foreach($cardetails as $cardetail)
@if($cardetail->id>10)

<td>
    @if($cardetail->selected)
    <div class="carimg"><img src="/images/car_deactive.png" onclick="event.preventDefault();
            document.getElementById('form-deselect{{$cardetail->id}}').submit()"> </div>

<form action ="{{route('carselect.deselect',$cardetail->id)}}" id="{{'form-deselect'.$cardetail->id}}" method="POST">
        @csrf
        @method('put')    
    </form>
        <p style="color:green; font-size:30px; text-align:center;">{{$cardetail->carname }}</p>
        

    @else
    <div class="carimg"> <img src="/images/car_active.png" onclick="event.preventDefault();
            document.getElementById('form-select{{$cardetail->id}}').submit()"> </div>
        <form action ="{{route('carselect.select',$cardetail->id)}}" id="{{'form-select'.$cardetail->id}}" method="POST">
        @csrf
        @method('put')    
    </form>
    

    <p style="color:green; font-size:30px; text-align:center;">{{$cardetail->carname }}</p>
    @endif
    </td>
    @endif
@endforeach

     </td>
</tr>

</table>

<p>{{session()->get('message')}}   </p>

<a href="/reserve"><button type="submit" class="btnproceed"> Proceed </button> </a>

</body>
</html>