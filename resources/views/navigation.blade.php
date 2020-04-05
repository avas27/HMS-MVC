<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            overflow: hidden;
        }
        *::-webkit-scrollbar{
            display: none;
        }
        .side-bar{
            z-index: 1;
            height:100vh;
            box-shadow: 5px 0 10px #1a1b1d;
        }
        .side-bar ul{
            list-style: none;
        }
        .side-bar ul li{
            font-weight: bold;
            font-size: 18px;
            padding:10px 0;
            border-bottom:1px solid white; 
        }
        .side-bar ul li:hover{
            background-color: #555;
        }
        .logo img{
            padding:25px;
            width:280px;
            height: auto;
        }
        .m-container{
            background-color: #ffeaa7;
            height: 100vh;
            overflow: scroll;
        }
        .card img{
            width: auto;
            height: 200px;
            object-fit: cover;
        }
        .home{
            overflow: scroll;
        }
    </style>  

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
<div class="row">
<div class="col-2 bg-dark side-bar">
    <div class="row">
        <a href="#" class="logo"><img src={{asset("assets/hms.png")}}></a>
    </div>
    <div class="row">
        <ul class="container">
            <li class="nav-item text-white"><a href="/home" class="nav-link">Home</a></li>
            <li class="nav-item text-white"><a href="/contact" class="nav-link">Guest Management</a></li>
            <li class="nav-item text-white"><a href="/about" class="nav-link">Staff Management</a></li>
            <li class="nav-item text-white"><a href="/about" class="nav-link">Room Management</a></li>
            <li class="nav-item text-white"><a href="/about" class="nav-link">Catering Management</a></li>
            <li class="nav-item text-white"><a href="/about" class="nav-link">Account Management</a></li>
            <li class="nav-item text-white"><a href="/about" class="nav-link">Setting</a></li>
        </ul>
    </div>
</div>
<div class="col-10 m-container">
   @yield('content')
</div>   
</div>


</body>
</html>