@extends('layouts.adminDashboard')
@section('bodycontent')
    <div class="container w-50
 mt-3 profile shadow p-3 mb-5 rounded rounded text-center">
        <div class="row">
            <div class="col-md-12 d-flex flex-column  mt-3  ">
                <h2 class="text-light">Add</h2>
                <form method="POST" action="/add/traitement">
                    @csrf

                    <h6 class="text-light">Customer </h6>
                    <input type="text" id="TextInput" name="id" style="display: none;" class="form-control"
                        value="">
                    <div class="mb-3">
                        <input type="text" id="TextInput" name="firstname" class="form-control" placeholder="firstname"
                            value="">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="disabledTextInput" name="lastname" class="form-control"
                            placeholder="lastname" value="">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="disabledTextInput" name="age" class="form-control" placeholder="age"
                            value="">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="disabledTextInput" name="email" class="form-control" placeholder="email"
                            value="">
                    </div>
                    <input type="submit" id="TextInput" class="form-control align-self-center" value="create">
                </form>
            </div>
        </div>
    </div>
@endsection
