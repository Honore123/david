@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-md-12 my-5 border-bottom border-1">
            <h4>Manage Stations</h4>
        </div>
        @include('layouts.partials.notification')
        <div class="col-md-12 d-flex justify-content-end my-3">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newStation">New Station</button>
            @include('station.partials.add')
        </div>
        <div class="col-md-12 ">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Location</th>
                    <th>Email</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @forelse($stations as $station)
                    <tr>
                        <td>{{$station->name}}</td>
                        <td>{{$station->email}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    More
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                    <li><a class="dropdown-item" href="#">Remove</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="3">
                            No Station yet
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
