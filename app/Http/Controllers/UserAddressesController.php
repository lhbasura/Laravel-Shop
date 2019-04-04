<?php

namespace App\Http\Controllers;
use App\Models\UserAddress;
use Illuminate\Http\Request;

class UserAddressesController extends Controller
{
    public function index(Request $request)
    {
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }
    public function create(){
        return view('user_addresses.create_and_edit', ['address' => new UserAddress()]);
    }
}
