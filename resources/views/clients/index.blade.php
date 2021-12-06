@extends('layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-md-12 my-5 border-bottom border-1">
            <h4>Manage Clients</h4>
        </div>
        @include('layouts.partials.notification')
        <div class="col-md-12 d-flex justify-content-end my-3">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newClient">New Client</button>
            @include('clients.partials.add')
        </div>
        <div class="col-md-12 ">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Names</th>
                    <th>Card No</th>
                    <th>Telephone</th>
                    <th>Balance</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @forelse($clients as $client)
                    <tr>
                        <td>{{$client->name}}</td>
                        <td>{{$client->card_uid}}</td>
                        <td>
                            0{{$client->phone_number}}
                        </td>
                        <td>{{number_format($client->balance,0,'.',',')}} Rwf</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    More
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reloadBalance">Assign Balance</a></li>
                                </ul>
                            </div>
                        </td>
                        @include('clients.partials.balance')
                    </tr>
                @empty
                <tr>
                    <td class="text-center" colspan="4"> No client yet</td>
                </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
