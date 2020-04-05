@extends('nav')
@section('content')
<div class="container pt-4">
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
</div>
@endsection