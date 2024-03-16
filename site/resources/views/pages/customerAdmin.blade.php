@extends('layouts.adminDashboard');
@section('bodycontent')
 <h2 class="text-light text-start mt-3 ms-3">Liste Des Clients</h2>
 <div class="container text-center">
  <div class="row">
    <div class="col-md-10 shadow p-3 mb-5 bg-body rounded ">
    <table class="table rounded ">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <a href=""><img src="{{ asset('assets/images/edit.png') }}" alt="" width="5%"></a>
        <a href=""><img src="{{ asset('assets/images/recycle-bin.png') }}" alt="" width="5%"></a>
        <a href=""><img src="{{ asset('assets/images/eye.png') }}" alt="" width="5%"></a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@mdo</td>
      <td>
        <a href=""><img src="{{ asset('assets/images/edit.png') }}" alt="" width="5%"></a>
        <a href=""><img src="{{ asset('assets/images/recycle-bin.png') }}" alt="" width="5%"></a>
        <a href=""><img src="{{ asset('assets/images/eye.png') }}" alt="" width="5%"></a>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Larry </td>
      <td>@twitter</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>
        <a href=""><img src="{{ asset('assets/images/edit.png') }}" alt="" width="5%"></a>
        <a href=""><img src="{{ asset('assets/images/recycle-bin.png') }}" alt="" width="5%"></a>
        <a href=""><img src="{{ asset('assets/images/eye.png') }}" alt="" width="5%"></a>
      </td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
@endsection