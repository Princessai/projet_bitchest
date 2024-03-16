@extends('layouts.adminDashboard');

@section('bodycontent')
<table class="table ">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Firstname</th>
        <th scope="col">Lastname</th>
        <th scope="col">Age</th>
        <th scope="col">Email</th>
        <th  scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      {{-- @foreach ($exe1 as $row) : --}} 
        <tr>
        <td>
             {{'1'}} 
          </td>
          <td>
             {{'Oumou'}}
          </td>
          <td>
             {{'Coulibaly'}}
          </td>
          <td>
             {{'25'}}
          </td>
          <td>
             {{'coumou1000@gmail.com'}}
          </td>
          <td>
            <a href="" class="voir"> <img src="{{ asset('assets/images/eye.png')}}" alt="VOIR" class="img-fluid"></a>
            <a href="" class="modifier"> <img src="{{ asset('assets/images/edit.png')}}" alt="MODIFIER" class="img-fluid"></a>
            <a href="" class="suprimer"> <img src="{{ asset('assets/images/recycle-bin.png')}}" alt="SUPRIMER" class="img-fluid"></a>
          </td>
        </tr>
      {{-- @endforeach --}}
    </tbody>
  </table>

@endsection