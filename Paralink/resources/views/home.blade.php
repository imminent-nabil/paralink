@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in please fill below form!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="card-body">  
            <form>
                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="firstname">FirstName</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Enetr first name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastname">LastName</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Enetr last name">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group mb-4">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row mb-4">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Gujarat</option>

                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
</div>
</div>
</div>
</div>
</div>
@endsection
