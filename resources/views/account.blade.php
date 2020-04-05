@extends('nav')
@section('content')
   <div class="container pt-4">
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
    </div>
@endsection