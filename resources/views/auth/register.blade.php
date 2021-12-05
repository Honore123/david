@extends('layouts.app')
@section('content')
    <div class="row justify-content-center pt-5">
        <div class="col-md-5 card shadow mt-5">
            <div class="card-body px-5">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="border-bottom border-1 border-success mb-5">
                        <h3 class="card-title text-center text-success display-6 mt-4 mb-3">SMART STATION</h3>
                        <p class="card-text text-center mb-3">Create account for Agents and Petrol stations
                        </p>
                    </div>
                    @include('layouts.partials.notification')
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">User Type</label>
                        <select class="form-control" name="user_type" id="user_type">
                            <option value="">~~SELECT TYPE~~</option>
                            <option value="1">Agent</option>
                            <option value="2">Petrol Station</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" value="{{old('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Password</label>
                        <input class="form-control" type="password" id="password" name="password"
                               autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Confirm Password</label>
                        <input class="form-control" type="password" id="password_confirmation"
                               name="password_confirmation">
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-success mt-3 mb-5 rounded-0 w-100">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
