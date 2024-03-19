@extends('layouts.adminDashboard')
@section('bodycontent')
    <h2 class="text-light text-start mt-3 ms-3">Liste Des Clients</h2>
    <button type="submit" class="btn btn-secondary bg-gradient  w-25 mb-3"><a href="{{ route('add.customer') }}"
            class="butt text-light ">Add</a></button>
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
                                <a href="{{ route('delete.customer', ['id' => $items->id]) }}" class="me-3"><button class="shadowd__btn">DELETE</button></a>
                                <a href="{{ route('view.customer', ['id' => $items->id]) }}"><button class="shadows__btn">SEE</button></a>
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
