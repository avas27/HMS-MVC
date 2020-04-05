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
    <div class="container pt-4 d-flex justify-content-between flex-wrap home">
            <div class="card mb-5" style="width: 18rem;">
                <img src={{asset("assets/lg2.jpg")}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Guest Management</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Open</a>
                </div>
              </div>
              <div class="card mb-5" style="width: 18rem;">
                <img src={{asset("assets/h.jpg")}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Staff Management</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Open</a>
                </div>
              </div>
              <div class="card mb-5" style="width: 18rem;">
                <img src={{asset("assets/r.jpg")}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Room Management</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Open</a>
                </div>
              </div>
              <div class="card mb-5" style="width: 18rem;">
                <img src={{asset("assets/c.jpeg")}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Catering Management</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Open</a>
                </div>
              </div>
              <div class="card mb-5" style="width: 18rem;">
                <img src={{asset("assets/a.jpg")}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Account Management</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="/account" class="btn btn-primary">Open</a>
                </div>
              </div>
              <div class="card mb-5" style="width: 18rem;">
                <img src={{asset("assets/s.jpg")}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Service Management</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Open</a>
                </div>
              </div>
           
    </div>
    {{-- <div class="container pt-4">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Department</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Staff</td>
                <td>Admin</td>
                <td><a  href="#" class="btn btn-sucess bg-success">Open</a></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Guest</td>
                <td>Admin</td>
                <td><a  href="#" class="btn btn-sucess bg-success">Open</a></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Room</td>
                <td>Admin</td>
                <td><a  href="#" class="btn btn-sucess bg-success">Open</a></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Catering</td>
                <td>Admin</td>
                <td><a href="#" class="btn btn-sucess  bg-success">Open</a></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Services</td>
                <td>Admin</td>
                <td><a href="#" class="btn btn-sucess bg-success">Open</a href="#"></td>
              </tr>
            </tbody>
          </table>
    </div> --}}

    {{-- <div class="container pt-4">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Salary ($)</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>15000</td>
                <td><div class="btn btn-primary">Open</div></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>10000</td>
                <td><div class="btn btn-primary">Edit</div></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>12000</td>
                <td><div class="btn btn-primary">Edit</div></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Potter</td>
                <td>11000</td>
                <td><div class="btn btn-primary">Edit</div></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Landsay</td>
                <td>18000</td>
                <td><div class="btn btn-primary">Edit</div></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Marry</td>
                <td>20000</td>
                <td><div class="btn btn-primary">Edit</div></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Arrav</td>
                <td>25000</td>
                <td><div class="btn btn-primary">Edit</div></td>
              </tr>
            </tbody>
          </table>
    </div> --}}
</div>   
</div>
{{-- @yield('content') --}}

</body>
</html>