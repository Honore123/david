<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function index(){
        return view('clients.index', [
            'clients' => Client::all(),
        ]);
    }
    public function store(){
        $data = \request()->validate([
            'name' => ['string','required'],
            'card_uid' => ['string', 'required','unique:clients,card_uid'],
            'phone_number' => ['required','max:10', 'unique:clients,phone_number'],
            'balance' => ['required']
        ]);

        Client::create($data);

        return redirect()->back()->with('success', 'Client created successfully');
    }
    public function updateBalance(Client $client){
        $data = request()->validate([
            'balance' => ['required']
        ]);
        $client->update(['balance' => $client->balance + $data['balance']]);

        return redirect()->back()->with('success', 'Balance assigned successfully!');
    }
    public function update(Client $client){

    }
    public function destroy(Client $client){

    }
}
