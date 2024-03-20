@extends('layouts.adminDashboard')
@section('bodycontent')
    <h2 class="text-light text-start mt-3 ms-3">Liste Des Clients</h2>
   <a href="{{ route('add.customer') }}" class="butt text-light "> <button type="submit" class="btn btn-secondary bg-gradient  w-25 mb-3">Add</button></a>
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
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $ide = 1;
                        @endphp
                        @foreach ($customer as $items)
                            <tr>

                                <th scope="row">{{ $ide }}</th>
                                <td>{{ $items->firstname }}</td>
                                <td>{{ $items->lastname }}</td>
                                <td>{{ $items->age }}</td>
                                <td>{{ $items->email }}</td>
                                <td>

                                <a href="{{ route('modify.customer', ['id' => $items->id]) }}" class="me-3"><button class="shadowe__btn">EDIT</button></a>
                               <button class="shadowd__btn me-3" onclick="return confirm('are you sure you want to delete this user?');"> <a href="{{ route('delete.customer', ['id' => $items->id]) }}" >DELETE</a></button>
                                <a href="{{ route('view.customer', ['id' => $items->id]) }}"  class="me-3"><button class="shadows__btn">SEE</button></a>
                                <a href="{{ route('deposit.customer', ['id' => $items->id]) }}"><button class="shadowm__btn">DEPOSIT</button></a>
                                </td>

                            </tr>


                            @php
                                $ide += 1;
                            @endphp
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
