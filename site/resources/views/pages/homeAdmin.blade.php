@extends('layouts.adminDashboard');

@section('bodycontent')
<table class="table ">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">firstname</th>
        <th scope="col">lastname</th>
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
             {{'coumou1000@gmail.com'}}
          </td>
          <td>
            <a href="" class="voir"> <img src="{{ assets('')}}" alt=""> VOIR</a>
            <a href="" class="modifier"> <img src="{{ assets('')}}" alt=""> MODIFIER</a>
            <a href="" class="suprimer"> <img src="{{ assets('')}}" alt=""> SUPRIMER</a>
          </td>
        </tr>
      {{-- @endforeach --}}
    </tbody>
  </table>

@endsection