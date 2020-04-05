@extends('nav')
@section('content')
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
@endsection