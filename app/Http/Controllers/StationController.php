<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StationController extends Controller
{
    public function index(){
        return view('station.index', [
            'stations' => User::query()->where('user_type', 2)->get()
        ]);
    }
    public function store(){
        $data = request()->validate([
            'name' => ['string','required'],
            'user_type' => ['integer', 'required'],
            'email' => ['email', 'required', 'unique:users,email']
        ]);
        $data['password'] = Hash::make('password');
        User::create($data);

        return redirect()->back()->with('success', 'Agent created successfully');
    }
    public function update(User $station){

    }
    public function destroy(User $station){

    }
}
